<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $menu = 'Users';
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('role', function ($data) {
                    if ($data->role == 1) {
                        return "Admin";
                    } else {
                        return "User";
                    }
                })
                ->addColumn('host', function ($data) {
                    if ($data->host == 1) {
                        return "Ya";
                    } else {
                        return "Tidak";
                    }
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Edit" class="btn btn-primary btn-xs edit"><i class="fas fa-edit"></i></a>';
                    $btn = '<center>' . $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-xs delete"><i class="fas fa-trash"></i></a><center>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.user.data', compact('menu'));
    }

    public function store(Request $request)
    {
        //Translate Bahasa Indonesia
        $message = array(
            'name.required'                     => 'Nama harus diisi.',
            'email.required'                    => 'Email harus diisi.',
            'email.email'                       => 'Penulisan email tidak benar.',
            'email.unique'                      => 'Email sudah terdaftar.',
            'role.required'                     => 'Role harus dipilih.',
            'host.required'                     => 'Penyiar harus dipilih.',
            'password.required'                 => 'Password harus diisi.',
            'password.min'                      => 'Password minimal 8 karakter.',
            'password_confirmation.required'    => 'Harap konfirmasi password.',
            'password_confirmation.same'        => 'Password harus sama.',
            'password_confirmation.min'         => 'Password minimal 8 karakter.',
        );

        //Check If Field Unique
        if (!$request->hidden_id) {
            //rule tambah data tanpa user_id
            $ruleEmail = 'required|email|unique:users,email';
        } else {
            //rule edit jika tidak ada user_id
            $user = User::where('id', $request->hidden_id)->first();
            if ($user->email == $request->email) {
                $ruleEmail = 'required|email';
            } else {
                $ruleEmail = 'required|email|unique:users_puskesmas,email';
            }
        }

        // Validasi input dengan rule yang ditentukan
        $validator = Validator::make($request->all(), [
            'name'                  => 'required',
            'email'                 =>  $ruleEmail,
            'role'                  => 'required',
            'host'                  => 'required',
            'password'              => $request->input('password') ? 'required|min:8' : 'required',
            'password_confirmation' => $request->input('password') ? 'required|same:password|min:8' : 'required',
        ], $message);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $userData = [
            'role' => $request->role,
            'host' => $request->host,
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->input('password')) {
            $userData['password'] = $request->password;
        }

        User::updateOrCreate(
            [
                'id' => $request->hidden_id
            ],
            $userData
        );

        return response()->json(['success' => 'User saved successfully.']);
    }

    public function edit($id)
    {
        $data = User::find($id);
        return response()->json($data);
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return response()->json(['success' => 'User deleted successfully.']);
    }
}
