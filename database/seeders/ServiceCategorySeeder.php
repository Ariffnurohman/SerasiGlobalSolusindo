<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            ['name' => 'Kalibrasi Tekanan', 'slug' => 'kalibrasi-tekanan', 'icon' => 'fas fa-tachometer-alt', 'order' => 1],
            ['name' => 'Kalibrasi Suhu', 'slug' => 'kalibrasi-suhu', 'icon' => 'fas fa-thermometer-half', 'order' => 2],
            ['name' => 'Kalibrasi Dimensi', 'slug' => 'kalibrasi-dimensi', 'icon' => 'fas fa-ruler', 'order' => 3],
            ['name' => 'Kalibrasi Massa', 'slug' => 'kalibrasi-massa', 'icon' => 'fas fa-weight', 'order' => 4],
            ['name' => 'Kalibrasi Listrik', 'slug' => 'kalibrasi-listrik', 'icon' => 'fas fa-bolt', 'order' => 5],
            ['name' => 'Sertifikasi Halal', 'slug' => 'sertifikasi-halal', 'icon' => 'fas fa-mosque', 'order' => 6],
            ['name' => 'Inspeksi Teknis', 'slug' => 'inspeksi-teknis', 'icon' => 'fas fa-clipboard-check', 'order' => 7],
            ['name' => 'Pengujian Material', 'slug' => 'pengujian-material', 'icon' => 'fas fa-flask', 'order' => 8],
        ];
    
        foreach ($categories as $category) {
            ServiceCategorySeeder::create($category);
        }
    }
}
