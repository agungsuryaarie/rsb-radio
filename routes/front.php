<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\EventsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/news', function () {
    return view('news');
});
Route::get('/news_show', function () {
    return view('news_show');
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
// Route::get('/galeri', function () {
//     return view('galeri');
// });
// Route::get('/galeri_show', function () {
//     return view('galeri_show');
// });

Route::get('/', [HomeController::class, 'index'])->name('home.index');
// Galeri
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/foto/detail/{id}', [GaleriController::class, 'show'])->name('galeri.show');
// Events
Route::get('/events', [EventsController::class, 'index'])->name('events.index');
