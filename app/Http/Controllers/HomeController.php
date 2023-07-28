<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Program;
use App\Models\Video;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        // $menu = "Radio Suara batu bara";
        $article = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->limit(1)->get();
        $article1 = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->offset(1)->limit(2)->get();
        $article2 = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->offset(3)->limit(2)->get();
        $video = Video::orderBy('id', 'desc')->limit(1)->get();
        $video1 = Video::orderBy('id', 'desc')->offset(1)->limit(2)->get();
        $program = Program::orderBy('id', 'desc')->limit(4)->get();
        // API berita batubarakab.go.id
        $apiToken = 'BB-20b2c23d2a0fe5001834efa232f1cd15';
        $apiUrl = 'https://batubarakab.go.id/api/v1/berita?key=' . $apiToken; // Ganti dengan URL API yang sesuai
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $apiToken,
            'Accept' => 'application/json',
        ])->get($apiUrl);
        if ($response->successful()) {
            $berita = $response->json();
        } else {
            echo 'Data tidak ditemukan.';
        }
        // dd($berita);
        return view('home', compact('article', 'article1', 'article2', 'program', 'video', 'video1', 'berita'));
    }
}
