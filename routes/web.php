<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ResellerController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MitraLabController;

// Homepage 
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mitra-lab', [MitraLabController::class, 'index'])->name('mitra.lab');
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang.kami');

// Layanan
Route::get('/layanan/kalibrasi', function () {
    return view('layanan.kalibrasi');
})->name('layanan.kalibrasi');


// FAQ
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

