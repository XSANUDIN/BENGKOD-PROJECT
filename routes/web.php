<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriksaPasienController;
use App\Http\Controllers\RiwayatPasienController;

Route::get('/', function () {
    return view('app');
});

// Auth

Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Dokter

Route::get('/dokter/dashboard', function () {
    return view('dokter.dashboard');
})->name('dokter.dashboard');

Route::get('/dokter/periksa', function () {
    return view('dokter.periksa');
})->name('dokter.periksa');

Route::get('/dokter/obat', function () {
    return view('dokter.obat');
})->name('dokter.obat');


// Pasien

Route::get('/pasien', function () {
    return view('pasien.dashboard');
});

Route::get('/pasien/dashboard', function () {
    return view('pasien.dashboard');
})->name('pasien.dashboard');

Route::get('/pasien/periksa', [PeriksaPasienController::class, 'index'])->name('pasien.periksa');
Route::get('/pasien/riwayat', [RiwayatPasienController::class, 'index'])->name('pasien.riwayat');




