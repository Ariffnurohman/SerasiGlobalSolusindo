<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ResellerController;
use App\Models\Lab;
use App\Http\Controllers\MitraLabController;

/*
|--------------------------------------------------------------------------
| WEB ROUTES
|--------------------------------------------------------------------------
*/

// ADMIN SEMENTARA

Route::get('/admin/mitra/create', [MitraLabController::class, 'create'])->name('mitra.create');
Route::post('/admin/mitra/store', [MitraLabController::class, 'store'])->name('mitra.store');

/// 🏠 HOMEPAGE
Route::get('/', function () {
    $clients = Lab::where('is_active', true)
        ->where('is_verified', true)
        ->take(6)
        ->get();

    return view('home', compact('clients'));
});


/// 🏢 MITRA LAB
Route::get('/mitra-lab', [LabController::class, 'index'])->name('mitra.index');
Route::get('/mitra-lab/{id}', [LabController::class, 'show'])->name('mitra.show');


/// 📄 TENTANG KAMI
Route::view('/tentang-kami', 'tentang-kami')->name('tentang.kami');


/// 🤝 RESELLER
Route::view('/reseller', 'reseller.index')->name('reseller');


/// 🎯 EVENT
Route::prefix('event')->group(function () {

    // list
    Route::get('/', [EventController::class, 'index'])->name('event.index');

    // create (WAJIB di atas show)
    Route::get('/create', [EventController::class, 'create'])->name('event.create');
    Route::post('/store', [EventController::class, 'store'])->name('event.store');

    // detail (PALING BAWAH)
    Route::get('/{id}', [EventController::class, 'show'])->name('event.show');
});


/// 🧪 LAYANAN
Route::view('/layanan/kalibrasi', 'layanan.kalibrasi')->name('layanan.kalibrasi');
Route::get('/ruang-lingkup/{slug}', [App\Http\Controllers\LayananController::class, 'show']);

/// KONSULTASI  
Route::get('/consultant', function () {
    return view('layanan.consultant');
})->name('consultant');

// TRAINING
Route::get('/training', function () {
    return view('layanan.training');
})->name('training');

/// ❓ FAQ
Route::view('/faq', 'faq')->name('faq');
