<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MargaController;
use App\Http\Controllers\TaromboController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminDashboardController;

// Public Website Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-parna', [TentangController::class, 'index'])->name('tentang');
Route::get('/marga-parna', [MargaController::class, 'index'])->name('marga');
Route::get('/tarombo', [TaromboController::class, 'index'])->name('tarombo');
Route::get('/berita-kegiatan', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita-kegiatan/{slug}', [BeritaController::class, 'show'])->name('berita.detail');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'send'])->name('kontak.send');

// Hidden Admin Routes (Akses khusus via ketik URL /admin)
Route::get('/admin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm']);
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});
