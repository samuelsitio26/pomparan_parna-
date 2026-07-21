<?php

namespace App\Http\Controllers;

use App\Models\Marga;
use App\Models\Berita;
use App\Models\Tarombo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $totalMargaCount = Marga::count();
        $totalTaromboNodes = Tarombo::count();
        $featuredBerita = Berita::where('is_featured', true)->latest()->take(3)->get();
        $margasPreview = Marga::orderBy('order_number')->take(12)->get();

        return view('pages.home', compact(
            'totalMargaCount',
            'totalTaromboNodes',
            'featuredBerita',
            'margasPreview'
        ));
    }
}
