<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MitraLabController extends Controller
{
    public function index()
    {
        return view('mitra-lab');
    }
}