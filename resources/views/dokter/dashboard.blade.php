@extends('layout.layout')
@section('content')


<div class="container mt-4">
    <!-- Ucapan Selamat Datang -->
    <div class="row mb-4">
        <div class="col-md-12">
            <div class="alert alert-info text-center">
                <h3>Selamat datang, Dokter {{ Auth::user()->nama }}</h3>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Card untuk Total Pasien -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-header bg-primary text-white">
                    <h5>Total Pasien</h5>
                </div>
                <div class="card-body">
                    <h3>{{ $totalPasien }}</h3>
                </div>
            </div>
        </div>
        
        <!-- Card untuk Jadwal Hari Ini -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-header bg-success text-white">
                    <h5>Jadwal Hari Ini</h5>
                </div>
                <div class="card-body">
                    <h3>{{ $jadwalHariIni }} Janji Temu</h3>
                </div>
            </div>
        </div>

        <!-- Card untuk Pasien Sakit -->
        <div class="col-md-4 mb-4">
            <div class="card text-center">
                <div class="card-header bg-warning text-white">
                    <h5>Pasien Di Periksa</h5>
                </div>
                <div class="card-body">
                    <h3>{{ $pasienSakit }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection