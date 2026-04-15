<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lab;

class MitraLabController extends Controller
{
    // ✅ halaman mitra (frontend)
    public function index()
    {
        $labs = Lab::where('is_active', 1)->get();
        return view('mitra-lab', compact('labs'));
    }

    // ✅ halaman form tambah (admin)
    public function create()
    {
        return view('admin.mitra.create');
    }

    // ✅ proses simpan data
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'layanan' => 'required',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        // upload logo
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images/mitra'), $filename);
        } else {
            $filename = 'default.png';
        }

        Lab::create([
            'name' => $request->name,
            'city' => $request->city,
            'logo' => $filename,
            'layanan' => $request->layanan,
            'is_active' => $request->has('is_active'),
            'is_verified' => $request->has('is_verified'),
        ]);

        return redirect()->route('mitra.create')
                         ->with('success', 'Mitra Lab berhasil ditambahkan!');
    }
}