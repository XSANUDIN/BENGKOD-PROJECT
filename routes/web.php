<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PeriksaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeriksaPasienController;
use App\Http\Controllers\RiwayatPasienController;
use App\Models\Periksa;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Auth

Route::get('/',[AuthController::class, 'showLogin'])->name('auth.login');
Route::get('/register',[AuthController::class, 'showRegister'])->name('auth.register');
Route::get('/login',[AuthController::class, 'showLogin'])->name('auth.login');
Route::post('/register',[AuthController::class, 'register'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout',[AuthController::class, 'logout'])->name('logout');


//Dokter

Route::middleware(['auth', 'role:dokter'])->prefix('dokter')->controller(ObatController::class)->group(function(){

    Route::delete('/obat/{id}', 'destroy')->name('obat.delete');
    Route::post('/obat', 'store')->name('obat.store');
    Route::put('/obat/{id}', 'update')->name('obat.update');
    Route::get('/obat', 'index')->name('dokter.obat');

});


Route::middleware(['auth', 'role:dokter'])->prefix('dokter')->controller(PeriksaController::class)->group(function(){

    Route::get('/', 'dashboard')->name('dokter.dashboard');
    Route::get('/dashboard', 'dashboard')->name('dokter.dashboard');
    Route::get('/periksa', 'index')->name('dokter.periksa');
    Route::get('/periksa/{id}', 'show')->name('dokter.show');
    Route::get('/periksa/{id}/edit', 'edit')->name('dokter.edit');
    Route::put('/periksa/{id}/edit', 'update')->name('dokter.update');
    Route::delete('/periksa{id}', 'destroy')->name('periksa.delete');
    
});

// Pasien

Route::middleware(['auth', 'role:pasien'])->prefix('pasien')->name('pasien.')->controller(PeriksaPasienController::class)->group(function(){

    Route::get('/',  'dashboard')->name('dashboard');
    Route::get('/dashboard',  'dashboard')->name('dashboard');
    Route::get('/periksa',  'index')->name('periksa');
    Route::post('/periksa',  'store')->name('appointment');
    
});

Route::get('/pasien/riwayat', [RiwayatPasienController::class, 'index'])->name('pasien.riwayat')->middleware();




// Hash Password Dokter Manual

// Route::get('/fix-doctor-passwords', function () {
//     $doctors = User::where('role', 'dokter')->get();

//     foreach ($doctors as $doctor) {
//         if (strlen($doctor->password) < 60) { // asumsi belum Bcrypt
//             $doctor->password = Hash::make($doctor->password);
//             $doctor->save();
//         }
//     }

//     return 'Password dokter berhasil diperbaiki!';
// });
