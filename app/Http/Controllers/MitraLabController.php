<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;

class MitraLabController extends Controller
{
    public function index()
    {
        $labs = Lab::where('is_active', 1)
                   ->where('is_verified', 1) // optional (bisa dihapus kalau belum pakai)
                   ->latest()
                   ->get();

        return view('mitra-lab', compact('labs'));
    }
}