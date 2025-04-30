<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        //
        $obat = Obat::all();
        return view('dokter.obat', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        //
        $request->validate([
            'nama_obat' => 'required|string',
            'kemasan' => 'required|string',
            'harga' => 'required|integer'
        ]);

        // Menyimpan Obat
        $obat = new Obat();
        $obat->nama_obat = $request->nama_obat;
        $obat->kemasan = $request->kemasan;
        $obat->harga = $request->harga;
        $obat->save();
        
        // Alert::success('Berhasil', 'Data Obat Berhasil Ditambahkan');

        
        Alert::toast('Data Obat Berhasil Ditambahkan')
                ->autoClose(1500)
                ->timerProgressBar();

        return redirect()->route('dokter.obat')->with('keep_form_open', true);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        //
        $obat = Obat::findOrFail($id);
        $obat->nama_obat = $request->nama_obat;
        $obat->kemasan = $request->kemasan;
        $obat->harga = $request->harga;
        $obat->save();

        Alert::toast('Data Obat Berhasil Diedit')
                ->autoClose(1500)
                ->timerProgressBar();
    
        return redirect()->route('dokter.obat')->with('success', 'Sukses Mengedit Obat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        //
        $obat = Obat::findorFail($id);

        $obat->delete();

        Alert::toast('Data Obat Terhapus')
                ->autoClose(1500)
                ->timerProgressBar();

        return redirect()->route('dokter.obat')->with('success', 'Data Obat Berhasil Dihapus');

    }
}
