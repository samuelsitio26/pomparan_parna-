<?php

namespace App\Http\Controllers;

use App\Models\Tarombo;
use App\Models\Marga;
use Illuminate\Http\Request;

class TaromboController extends Controller
{
    public function index(Request $request)
    {
        $rootNode = Tarombo::with(['children.children.marga'])->where('generation_level', 1)->first();
        $generation2 = Tarombo::with(['children.marga'])->where('generation_level', 2)->get();
        $allMargas = Marga::orderBy('name')->get();

        return view('pages.tarombo', compact('rootNode', 'generation2', 'allMargas'));
    }
}
