<?php

namespace App\Http\Controllers;

use App\Models\Marga;
use Illuminate\Http\Request;

class MargaController extends Controller
{
    public function index(Request $request)
    {
        $query = Marga::query();

        if ($request->filled('q')) {
            $search = $request->input('q');
            $query->where('name', 'like', "%{$search}%")
                  ->orWhere('branch_group', 'like', "%{$search}%");
        }

        if ($request->filled('branch')) {
            $query->where('branch_group', $request->input('branch'));
        }

        $margas = $query->orderBy('name', 'asc')->get();
        $branches = Marga::select('branch_group')->distinct()->pluck('branch_group');

        return view('pages.marga', compact('margas', 'branches'));
    }
}
