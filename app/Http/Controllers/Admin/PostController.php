<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index(Request $request)
    {
        $menu = 'Post';
        if ($request->ajax()) {
            $data = Post::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('categories', function ($data) {
                    return $data->categories->name;
                })
                ->addColumn('author', function ($data) {
                    return $data->user->name;
                })
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('post.edit', $row->id) . '" class="btn btn-primary btn-xs edit"><i class="fas fa-edit"></i></a>';
                    $btn = '<center>' . $btn . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $row->id . '" data-original-title="Delete" class="btn btn-danger btn-xs delete"><i class="fas fa-trash"></i></a><center>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.post.data', compact('menu'));
    }

    public function create()
    {
        $menu = "Post Create";
        return view('admin.post.create', compact('menu'));
    }

    public function store(Request $request)
    {
        //Translate Bahasa Indonesia
        $message = array(
            'categories_id.required'    => 'Kategori harus dipilih.',
            'title.required'            => 'Judul harus diisi.',
            'content.required'          => 'Konten harus diisi.',
            'status.required'           => 'Status harus dipilih.',
            'image.required'            => 'Gambar harus diupload.',
        );

        // Validasi input dengan rule yang ditentukan
        $validator = Validator::make($request->all(), [
            'categories_id'     => 'required',
            'title'             => 'required',
            'content'           => 'required',
            'status'            => 'required',
            'image'             => 'required',

        ], $message);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . Auth::user()->id, $filename);
        }
        Post::updateOrCreate(
            [
                'id' => $request->hidden_id
            ],
            [
                'user_id' => Auth::user()->id,
                'categories_id' => $request->categories_id,
                'title' => $request->title,
                'content' => $request->content,
                'status' => $request->status,
                'image' => $filename
            ]
        );

        return redirect()->route('post.index')->with(['success' => 'Post saved successfully.']);
    }

    public function edit(Post $post)
    {
        $menu = "Post Edit";
        $posts = Post::where('id', $post->id)->first();
        return view('admin.post.create', compact('menu', 'posts'));
    }

    public function show(Post $post)
    {

        $data = Post::where('id', $post->id)->first();
        return response()->json($data);
    }
}
