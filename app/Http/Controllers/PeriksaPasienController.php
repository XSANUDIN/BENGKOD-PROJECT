<?php

namespace App\Http\Controllers;

use App\Models\Periksa;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PeriksaPasienController extends Controller
{
    public function dashboard(){
        return view('pasien.dashboard');
    }

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

    public function store(Request $request){

        $userId = Auth::id();

        $request->validate([
            'id_dokter' => 'required',
            'id_pasien' => 'nullable',
        ]);

        $dokter = User::where('id', $request->id_dokter)
            ->where('role', 'dokter')
            ->first();

        // $dokter = User::where('role', 'dokter')
        // ->where('nama', 'like', '%'.$request->nama_dokter.'%')
        // ->first();


        // dd($dokter);

        $periksa = new Periksa();
        $periksa->id_dokter = $request->id_dokter;
        $periksa->id_pasien = $userId;
        $periksa->save();


        
        return redirect()->route('pasien.periksa')->with('success', 'Berhasil Melakukan Appoinment');
    }




}
