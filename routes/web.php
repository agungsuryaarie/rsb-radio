<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProfileController;
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
    return view('welcome');
});

Auth::routes();



Route::prefix('admin')->middleware('role:1')->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('/post', PostController::class);
    Route::resource('/category', CategoryController::class);
    Route::get('category/get-category', [CategoryController::class, 'show']);
    Route::resource('/user', UserController::class);
    Route::resource('/profile', ProfileController::class);
});
