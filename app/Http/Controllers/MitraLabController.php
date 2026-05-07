<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Lab;

class MitraLabController extends Controller
{

    public function show($slug)
{
    $lab = Lab::where('slug', $slug)->firstOrFail();

    return view('mitra.show', compact('lab'));
}
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
            'slug' => 'nullable',
            'city' => 'required',
            'about' => 'nullable',
            'scope_of_calibration' => 'nullable',
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
            'slug' => Str::slug($request->name),
            'city' => $request->city,
            'logo' => $filename,
            'about' => $request->about,
            'scope_of_calibration' => $request->scope_of_calibration,
            'is_active' => $request->has('is_active'),
            'is_verified' => $request->has('is_verified'),
        ]);

        return redirect()->route('mitra.create')
            ->with('success', 'Mitra Lab berhasil ditambahkan!');
    }
}
