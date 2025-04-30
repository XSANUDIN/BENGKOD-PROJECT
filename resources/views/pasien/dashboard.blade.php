@extends('layout.layout')
@section('content')
<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="display-4 fw-bold text-primary">
            <i class="bi bi-person-heart"></i> Halaman Pasien
        </h1>
        <p class="lead text-muted">Selamat datang, <strong>{{ Auth::user()->nama }}</strong>! . Kelola data kesehatan Anda di sini.</p>
    </div>

    <div class="row justify-content-center">
        <!-- Kartu 1 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-journal-medical fs-1 text-success mb-3"></i>
                    <h5 class="card-title">Riwayat Medis</h5>
                    <p class="card-text">Lihat dan kelola catatan medis Anda.</p>
                    <a href="{{ route('pasien.riwayat') }}" class="btn btn-outline-success">Lihat</a>
                </div>
            </div>
        </div>
        <!-- Kartu 2 -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="bi bi-calendar-check fs-1 text-info mb-3"></i>
                    <h5 class="card-title">Janji Temu</h5>
                    <p class="card-text">Atur dan lihat jadwal konsultasi.</p>
                    <a href="{{ route('pasien.periksa') }}" class="btn btn-outline-info">Jadwal</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection