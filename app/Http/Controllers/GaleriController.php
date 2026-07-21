<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index(Request $request)
    {
        $query = Galeri::query();

        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        if ($request->filled('year')) {
            $query->where('year', $request->input('year'));
        }

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('title', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%");
        }

        $galeris = $query->latest('event_date')->get();
        $totalPhotoCount = Galeri::sum('photo_count');

        return view('pages.galeri', compact('galeris', 'totalPhotoCount'));
    }
}
