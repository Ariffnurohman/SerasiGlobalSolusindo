<?php

namespace App\Http\Controllers;

use App\Models\Lab;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function show($slug)
    {
        $layanan = [
            'kalibrasi-dimensi' => [
                'nama' => 'Kalibrasi Dimensi',
                'deskripsi' => 'Kalibrasi alat ukur dimensi seperti jangka sorong, micrometer, dll.',
                'gambar' => 'dimensi.jpg'
            ],
            'kalibrasi-massa' => [
                'nama' => 'Kalibrasi Massa',
                'deskripsi' => 'Kalibrasi timbangan dan alat ukur massa lainnya.',
                'gambar' => 'massa.jpg'
            ],
            'kalibrasi-tekanan' => [
                'nama' => 'Kalibrasi Tekanan',
                'deskripsi' => 'Kalibrasi pressure gauge, manometer, dll.',
                'gambar' => 'tekanan.jpg'
            ],
            'kalibrasi-temperatur' => [
                'nama' => 'Kalibrasi Temperatur',
                'deskripsi' => 'Kalibrasi thermometer, oven, dll.',
                'gambar' => 'temperatur.jpg'
            ],
        ];

        if (!isset($layanan[$slug])) {
            abort(404);
        }

        return view('ruang-lingkup.detail', [
            'layanan' => $layanan[$slug]
        ]);
    }
    public function index()
    {
        $mitraLabs = Lab::where('is_active', true)
            ->where('is_verified', true)
            ->latest()
            ->get();

        return view('layanan.kalibrasi', compact('mitraLabs'));
    }
}