<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::query();

        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
        }

        $beritas = $query->latest()->get();

        return view('pages.berita', compact('beritas'));
    }

    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $relatedBerita = Berita::where('id', '!=', $berita->id)->latest()->take(3)->get();

        return view('pages.berita_detail', compact('berita', 'relatedBerita'));
    }
}
