<?php

namespace App\Http\Controllers;

use App\Models\DetailPeriksa;
use App\Models\Obat;
use Illuminate\Http\Request;
use App\Models\Periksa;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class PeriksaController extends Controller
{
    //

    public function dashboard(){

        $totalPasien = User::where('role', 'pasien')->count();

        $jadwalHariIni = Periksa::whereDate('tgl_periksa', Carbon::today())->count();
        $pasienSakit = Periksa::has('periksa')->count();

        return view('dokter.dashboard', compact('totalPasien', 'jadwalHariIni', 'pasienSakit'));
    }

    public function index(){
        
        $dokterId = Auth::id();
    
        $periksa = Periksa::with(['dokter', 'pasien'])
            ->where('id_dokter',$dokterId)
            ->get();
        
        return view('dokter.periksa', compact('periksa'));
    }

    public function show($id){
        $periksa = Periksa::with(['dokter', 'pasien', 'periksa'])
                    ->findOrFail($id);
    
        return view('dokter.detail', compact('periksa'));
    }
    

    public function edit($id){
        $listObat = Obat::all();
        
        $periksa = Periksa::with(['dokter', 'pasien', 'periksa'])
        ->findOrFail($id);

        $selectedObat = $listObat->pluck('nama_obat')->toArray();
        
        
   
        return view('dokter.edit', compact('periksa', 'selectedObat', 'listObat'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'catatan' => 'nullable|string',
            'tgl_periksa' => 'required|date',
            'nama_obat' => 'nullable|string',
            'id_obat' => 'nullable|array',
            'id_obat.*' => 'exists:obat,id',
            
        ]);

        
        
        $periksa = Periksa::findOrFail($id);
        
        DetailPeriksa::where('id_periksa', $periksa->id)->delete();


        $biayaperiksa = 50000;

        if($request->has('id_obat')){
            foreach($request->id_obat as $id_obat){
                $obat = Obat::find($id_obat);
                if($obat){
                    DetailPeriksa::create([
                        'id_periksa' => $periksa->id,
                        'id_obat' => $obat->id,
                    ]);
                    $biayaperiksa += $obat->harga;
                };
            };
        };
        

        $periksa->update([
            'catatan' => $request->catatan,
            'tgl_periksa' => $request->tgl_periksa,
            'biaya_periksa' => $biayaperiksa,
            'nama_obat' => $request->nama_obat,
        ]);
        
        
        Alert::toast('Data Berhasil Diupdate')
            ->autoClose(1500)
            ->timerProgressBar();

        return redirect()->route('dokter.periksa');
    }

    public function destroy($id){
        //
        $periksa = Periksa::findorFail($id);
        $periksa->delete();


        Alert::toast('Data Dihapus')
            ->autoClose(1500)
            ->timerProgressBar();

        return redirect()->route('dokter.periksa')->with('success', 'Data periksa Berhasil Dihapus');

    }

}
