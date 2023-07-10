<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $menu = "Radio Suara batu bara";
        $post = Berita::orderBy('id', 'desc')->where('kategori', '=', 'Dinas')->limit(1)->get();
    }
}
