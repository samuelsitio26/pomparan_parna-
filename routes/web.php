<?php

use Illuminate\Support\Facades\Route;

// Halaman Utama / Beranda
Route::get('/', function () {
    return view('pages.home');
});

// Halaman Tentang Parna
Route::get('/tentang-parna', function () {
    return view('pages.tentang');
});

// Halaman Marga Parna
Route::get('/marga-parna', function () {
    return view('pages.marga');
});

// Halaman Tarombo Silsilah
Route::get('/tarombo', function () {
    return view('pages.tarombo');
});

// Halaman Berita & Kegiatan
Route::get('/berita-kegiatan', function () {
    return view('pages.berita');
});
