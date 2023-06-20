<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PenyiarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});
Route::get('/login', function () {
    return view('auths.login');
});
Route::get('/register', function () {
    return view('auths.register');
});

Route::get('/penyiar', [PenyiarController::class, 'index'])->name('penyiar.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
