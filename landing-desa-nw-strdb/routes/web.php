<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/berita', [LandingController::class, 'berita'])->name('berita');
Route::get('/destinasi', [LandingController::class, 'destinasi'])->name('destinasi');
Route::get('/galery', [LandingController::class, 'galery'])->name('galery');
Route::get('/profile', [LandingController::class, 'profile'])->name('profile');
Route::get('/visimisi', [LandingController::class, 'visimisi'])->name('visimisi');
Route::get('/kepengurusan', [LandingController::class, 'kepengurusan'])->name('kepengurusan');
Route::get('/kelembagaan', [LandingController::class, 'kelembagaan'])->name('kelembagaan');
Route::get('/demografi', [LandingController::class, 'demografi'])->name('demografi');
Route::get('/demografi/{page}', [LandingController::class, 'demografi_data'])->name('demografi_data');
