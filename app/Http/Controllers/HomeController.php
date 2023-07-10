<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // $menu = "Radio Suara batu bara";
        $post = Post::where('category_id', '=', '2')->limit(1)->get();
        $latest = Post::where('category_id', '=', '2')->limit(4)->get();
        return view('home', compact('post', 'latest'));
    }
}
