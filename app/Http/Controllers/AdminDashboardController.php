<?php

namespace App\Http\Controllers;

use App\Models\Marga;
use App\Models\Tarombo;
use App\Models\Berita;
use App\Models\Galeri;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index()
    {
        $margaCount = Marga::count();
        $taromboCount = Tarombo::count();
        $beritaCount = Berita::count();
        $galeriCount = Galeri::sum('photo_count');
        $recentBerita = Berita::latest()->take(5)->get();

        return view('pages.admin.dashboard', compact(
            'margaCount',
            'taromboCount',
            'beritaCount',
            'galeriCount',
            'recentBerita'
        ));
    }
}
