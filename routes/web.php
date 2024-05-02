<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengunjungController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\UsersController;

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

Route::get('/', [DashboardController::class,'index'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth')->name('home');

Route::resource('/acara', AcaraController::class)->except('show')->middleware('auth');

Route::resource('/acara/{acara}/pengunjung', PengunjungController::class)->except('show')->middleware('auth');

Route::get('/acara/{acara}/registrasi', [PengunjungController::class, 'register'])->middleware('guest');

Route::post('/acara/{acara}/registrasi', [PengunjungController::class, 'registration']);

Route::get('/acara/{acara}/registrasi/success', function () {
    return view('pages.registrasi.pengunjung.message');
})->middleware('guest');

Route::resource('/users', UsersController::class)->except('show')->middleware('auth');

Route::get('/login', [LoginController::class, 'halaman_login'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/tamu/export', [TamuController::class,'export'])->middleware('auth');

Route::get('/pengunjung/{acara}/export', [PengunjungController::class, 'export'])->middleware('auth');

Route::get('/acara/{acara}/download', [AcaraController::class, 'download'])->middleware('auth');