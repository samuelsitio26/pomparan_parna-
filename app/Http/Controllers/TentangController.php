<?php

namespace App\Http\Controllers;

use App\Models\Marga;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function index()
    {
        $margaCount = Marga::count();
        return view('pages.tentang', compact('margaCount'));
    }
}
