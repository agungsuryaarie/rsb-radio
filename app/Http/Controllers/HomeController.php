<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Profile;
use App\Models\Program;
use App\Models\User;
use App\Models\Video;

class HomeController extends Controller
{
    public function index()
    {
        $article = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->limit(1)->get();
        $article1 = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->offset(1)->limit(2)->get();
        $article2 = Post::orderBy('id', 'desc')->where('category_id', '=', '1')->offset(3)->limit(2)->get();
        $video = Video::orderBy('id', 'desc')->limit(1)->get();
        $video1 = Video::orderBy('id', 'desc')->offset(1)->limit(2)->get();
        $programs = Program::orderBy('id', 'desc')->limit(4)->get();
        $penyiar = Profile::with('user')
            ->leftJoin('users', 'users.id', '=', 'profiles.user_id')
            ->where('users.host', 1)
            ->select('profiles.picture')
            ->get();
        // API berita batubarakab.go.id
        $apiToken = 'BB-20b2c23d2a0fe5001834efa232f1cd15';
        $apiUrl = 'https://batubarakab.go.id/api/v1/berita?key=' . $apiToken;

        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $apiToken,
            'Accept: application/json',
        ]);

        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($httpCode === 200) {
            $berita = json_decode($response, true);
        } else {
            echo 'Data tidak ditemukan.';
        }
        // ============================
        return view('home', compact('article', 'article1', 'article2', 'programs', 'video', 'video1', 'berita', 'penyiar'));
    }
}
