<?php

use App\Http\Controllers\Admin\AlbumController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\UserController;

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
    return view('home');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/watch', function () {
    return view('watch');
});
Route::get('/playlist', function () {
    return view('playlist');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/galeri_show', function () {
    return view('galeri_show');
});

Auth::routes();

Route::prefix('admin')->middleware('role:1')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/post', PostController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/event', EventController::class);
    Route::resource('/program', ProgramController::class);
    Route::resource('/album', AlbumController::class);
    Route::get('/album/photo/{id}', [PhotoController::class, 'index'])->name('photo.index');
    Route::post('/album/photo/store/{id}', [PhotoController::class, 'store'])->name('photo.store');
    Route::resource('/user', UserController::class);
    Route::resource('/profile', ProfileController::class);
});
