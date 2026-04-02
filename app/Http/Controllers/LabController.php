<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LabController extends Controller
{
    public function index()
    {
        $labs = Lab::where('is_active', true)
                   ->where('is_verified', true)
                   ->paginate(9);

        return view('labs.index', compact('labs'));
    }

    public function show($id)
    {
        $lab = Lab::findOrFail($id);

        return view('labs.show', compact('lab'));
    }
}