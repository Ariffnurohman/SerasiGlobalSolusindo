<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LabSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */public function run()
{
    $labs = [
        [
            'name' => 'PT TUV NORD Indonesia',
            'slug' => 'tuv-nord-indonesia',
            'description' => 'Layanan lengkap mulai dari layanan sertifikasi sistem, layanan pengujian, layanan inspeksi, dan kalibrasi.',
            'address' => 'Jakarta',
            'city' => 'Jakarta',
            'phone' => '(021) 12345678',
            'email' => 'info@tuvnord.co.id',
            'contact_person' => 'Budi Santoso',
            'contact_phone' => '081234567890',
            'is_verified' => true,
            'is_featured' => true,
        ],
        [
            'name' => 'PT Dinamika Kalibrasi Indonesia',
            'slug' => 'dinamika-kalibrasi-indonesia',
            'description' => 'Melayani semua kalangan pengguna dari pemerintahan, industri dan swasta lainnya.',
            'address' => 'Surabaya',
            'city' => 'Surabaya',
            'phone' => '(031) 87654321',
            'email' => 'info@dinamikakalibrasi.com',
            'contact_person' => 'Siti Aminah',
            'contact_phone' => '082345678901',
            'is_verified' => true,
            'is_featured' => true,
        ],
    ];

    foreach ($labs as $lab) {
        LabSeeder::create($lab);
    }
}
}
