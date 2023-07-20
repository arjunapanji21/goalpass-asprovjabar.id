<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', [MainController::class, 'landing_page'])->name('landing_page');

Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/auth', [AuthController::class, 'auth'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/cekdata/{kd_kartu}', [MainController::class, 'cekKartu'])->name('anggota.cekdata');

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/beranda', [MainController::class, 'beranda'])->name('beranda');
        Route::get('/anggota', [MainController::class, 'anggota'])->name('anggota');
        Route::get('/anggota/baru', [MainController::class, 'anggota_tambah'])->name('anggota.tambah');
        Route::get('/anggota/{kd_kartu}', [MainController::class, 'anggota_profile'])->name('anggota.profile');

        Route::get('/anggota/cetak/{kd_kartu}', [MainController::class, 'cetakKartu'])->name('anggota.cetak');

        Route::get('/admin', [MainController::class, 'admin'])->name('admin');
    });

    Route::prefix('user')->group(function () {
        // Route::get('/beranda', [MainController::class, 'beranda'])->name('beranda');
        // Route::get('/anggota', [MainController::class, 'anggota'])->name('anggota');
        // Route::get('/anggota/baru', [MainController::class, 'anggota_tambah'])->name('tambah_anggota');
        // Route::get('/admin', [MainController::class, 'admin'])->name('admin');
    });
});
