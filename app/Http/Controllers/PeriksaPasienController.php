<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PeriksaPasienController extends Controller
{
    // public function index()
    // {
    //     $dokterList = User::where('role', 'dokter')->get();

    //     return view('pasien.periksa', compact('dokterList'));
    // }

    public function index(Request $request)
    {
        // Semua dokter
        $dokterList = User::where('role', 'dokter')->get();

        // Filter jika dipilih
        $selectedDokterId = $request->id_dokter;

        $dokterTampil = User::where('role', 'dokter')
                            ->when($selectedDokterId, function ($query, $id) {
                                return $query->where('id', $id);
                            })->get();

        return view('pasien.periksa', compact('dokterList', 'dokterTampil', 'selectedDokterId'));
    }

}
