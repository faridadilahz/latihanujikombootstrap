<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BeritasController;
use App\Http\Controllers\GalerisController;
use App\Models\Galeris;
use Illuminate\Support\Facades\Route;

Route::get('/beranda', [BerandasController::class, 'showBeranda']);

Route::get('/berita', [BerandasController::class, 'berita']);
Route::get('/berita/{id}', [BerandasController::class, 'showBerita'])->name('guest.detailberita');

Route::get('/galeri', [BerandasController::class, 'galeri']);

Route::get('/login', function() {
    return view('auth.login');
})->name('login');

Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('admin/dasbor', [DashboardController::class, 'index'])->name('admin.dasbor');

    Route::get('admin/berita', [BeritasController::class, 'index'])->name('berita');
    Route::get('admin/berita/posting-berita', [BeritasController::class, 'create'])->name('berita.posting');
    Route::post('admin/berita/posting-berita', [BeritasController::class, 'store'])->name('berita.store');

    Route::get('admin/berita/edit-berita/{id}', [BeritasController::class, 'edit'])->name('berita.edit');
    Route::put('admin/berita/{id}', [BeritasController::class, 'update'])->name('berita.update');
    Route::delete('admin/berita/{id}', [BeritasController::class, 'destroy'])->name('berita.destroy');

    Route::get('admin/galeri', [GalerisController::class, 'index'])->name('galeri');
    Route::get('admin/galeri/posting-galeri', [GalerisController::class, 'create'])->name('galeri.posting');
    Route::post('admin/galeri/posting-galeri', [GalerisController::class, 'store'])->name('galeri.store');

    Route::get('admin/galeri/edit-galeri/{id}', [GalerisController::class, 'edit'])->name('galeri.edit');
    Route::put('admin/galeri/{id}', [GalerisController::class, 'update'])->name('galeri.update');
    Route::delete('admin/galeri/{id}', [GalerisController::class, 'destroy'])->name('galeri.destroy');
});
