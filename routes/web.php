<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MargaController;
use App\Http\Controllers\TaromboController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;

// Halaman Utama / Beranda
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Tentang Parna
Route::get('/tentang-parna', [TentangController::class, 'index'])->name('tentang');

// Halaman Marga Parna
Route::get('/marga-parna', [MargaController::class, 'index'])->name('marga');

// Halaman Tarombo Silsilah
Route::get('/tarombo', [TaromboController::class, 'index'])->name('tarombo');

// Halaman Berita & Kegiatan
Route::get('/berita-kegiatan', [BeritaController::class, 'index'])->name('berita');
Route::get('/berita-kegiatan/{slug}', [BeritaController::class, 'show'])->name('berita.detail');

// Halaman Galeri Dokumentasi
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');

// Halaman Kontak Kami
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak');
Route::post('/kontak', [KontakController::class, 'send'])->name('kontak.send');
