<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $menu = "Profile";
        $profile = Profile::where('user_id', Auth::user()->id)->first();
        return view("admin.profile.data", compact('menu', 'profile'));
    }

    public function store(Request $request)
    {
        // dd($request->picture);
        if ($request->hasFile('picture')) {
            $image = $request->file('picture');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/' . Auth::user()->id, $filename);
        }
        Profile::updateOrCreate(
            [
                'user_id' => $request->hidden_id
            ],
            [
                'user_id' => Auth::user()->id,
                'real_name' => $request->real_name,
                'tlp' => $request->tlp,
                'jens_kel' => $request->jens_kel,
                'tgl_lahir' => $request->tgl_lahir,
                'alamat' => $request->alamat,
                'status' => $request->status,
                'tentang' => $request->tentang,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
                'twitter' => $request->twitter,
                'tiktok' => $request->tiktok,
                'picture' => $filename
            ]
        );

        return redirect()->back()->with(['success' => 'Profile saved successfully.']);
    }
}
