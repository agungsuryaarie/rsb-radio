<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Penyiar;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PenyiarController extends Controller
{
    public function index()
    {
        $tittle = 'Selamat Datang di Administrator Website';
        $menu = 'Penyiar';

        return view('admin.penyiar.index', compact('tittle', 'menu'));
    }
}
