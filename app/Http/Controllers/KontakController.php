<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('pages.kontak');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        return back()->with('success', 'Terima kasih! Pesan Anda telah berhasil dikirim ke pengurus Parsadaan Parna.');
    }
}
