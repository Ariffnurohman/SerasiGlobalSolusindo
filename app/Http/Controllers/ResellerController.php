<?php

use App\Models\Reseller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResellerController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'whatsapp' => 'required',
            'perusahaan' => 'nullable',
            'alamat' => 'nullable',
        ]);

        Reseller::create($validated);

        return back()->with('success', 'Pendaftaran berhasil!');
    }
}
