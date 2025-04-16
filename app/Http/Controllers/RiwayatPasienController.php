<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;

class RiwayatPasienController extends Controller
{
    public function index()
    {
        $riwayat = Periksa::with(['pasien', 'dokter', 'periksa'])->get();

        return view('pasien.riwayat', compact('riwayat'));
    }
}
