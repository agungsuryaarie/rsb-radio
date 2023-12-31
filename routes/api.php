<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [ApiController::class, 'login']);
Route::post('/register', [ApiController::class, 'register']);
Route::get('/user', [ApiController::class, 'getUserData'])->middleware('auth:sanctum');
Route::get('/berita', [ApiController::class, 'getBerita'])->middleware('auth:sanctum');
Route::get('/berita/{id}', [ApiController::class, 'getBeritaDetail'])->middleware('auth:sanctum');
Route::get('/program', [ApiController::class, 'getProgram'])->middleware('auth:sanctum');
Route::get('/program/{id}', [ApiController::class, 'getProgramDetail'])->middleware('auth:sanctum');
Route::get('/event', [ApiController::class, 'getEvent'])->middleware('auth:sanctum');
Route::get('/event/{id}', [ApiController::class, 'getEventDetail'])->middleware('auth:sanctum');
Route::get('/host', [ApiController::class, 'getHost'])->middleware('auth:sanctum');
Route::get('/host/{id}', [ApiController::class, 'getHostDetail'])->middleware('auth:sanctum');
Route::get('/video', [ApiController::class, 'getVideo'])->middleware('auth:sanctum');
Route::get('/logout', [ApiController::class, 'logout'])->middleware('auth:sanctum');
