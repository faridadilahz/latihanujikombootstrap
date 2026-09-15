<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\GalerisController;
use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('guest.beranda');
});

Route::get('/berita', function () {
    return view('guest.berita');
});

Route::get('/galeri', function () {
    return view('guest.galeri');
});

Route::get('/login', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/dasbor', [DashboardController::class, 'index'])->name('admin.dasbor');

    Route::get('admin/berita', [BeritasController::class, 'index'])->name('berita');
    Route::get('admin/berita/posting-berita', [BeritasController::class, 'create'])->name('berita.posting');
    Route::post('admin/berita/posting-berita', [BeritasController::class, 'store'])->name('berita.store');

    Route::get('admin/galeri', [GalerisController::class, 'index'])->name('admin.galeri');
});
