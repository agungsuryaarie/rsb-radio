<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Program;

class HomeController extends Controller
{
    public function index()
    {
        // $menu = "Radio Suara batu bara";
        $article = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->limit(1)->get();
        $article1 = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->offset(1)->limit(2)->get();
        $article2 = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->offset(3)->limit(2)->get();
        $program = Program::orderBy('id', 'desc')->limit(4)->get();
        return view('home', compact('article', 'article1', 'article2', 'program'));
    }
}
