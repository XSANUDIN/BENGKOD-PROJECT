<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Periksa;

class PeriksaController extends Controller
{
    //

    public function index(){
        $periksa = Periksa::all();
        return view('dokter.periksa', compact('periksa'));
    }
}
