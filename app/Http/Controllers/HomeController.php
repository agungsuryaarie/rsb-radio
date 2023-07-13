<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        // $menu = "Radio Suara batu bara";
        $post = Post::orderBy('id', 'desc')->where('category_id', '=', '2')->limit(1)->get();
        $latest1 = Post::orderBy('id', 'desc')->where('category_id', '=', '2')->offset(1)->limit(2)->get();
        $latest2 = Post::orderBy('id', 'desc')->where('category_id', '=', '2')->offset(3)->limit(2)->get();
        return view('home', compact('post', 'latest1', 'latest2'));
    }
}
