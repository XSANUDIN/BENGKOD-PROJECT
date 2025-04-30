<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;
use Illuminate\Support\Facades\Auth;

class RiwayatPasienController extends Controller
{
    public function index(){
        $userId = Auth::id();

        $riwayat = Periksa::with(['pasien', 'dokter', 'periksa.obat'])->where('id_pasien', $userId)->get();


        return view('pasien.riwayat', compact('riwayat'));
    }
}
