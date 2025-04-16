@extends('layout.layout')

@section('content')
<div class="container-fluid">
    <div id="add-obat" class="mx-auto text-center p-4">
        <h1 class="text-black">Daftar Periksa</h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-sm-10">
            <form action="#" method="POST">
                <!-- Nama Obat -->
                <div class="form-group p-2">
                    <label for="dokter">Input Nama</label>
                    <div class="input-group input-group-lg">
                        <input type="text" id="dokter" name="dokter" class="form-control" placeholder="Input Nama" required>
                    </div>
                </div>
                
                <!-- Kemasan Obat -->
                {{-- <div class="form-group p-2">
                    <label for="rumahsakit">Pilih Dokter</label>
                    <select name="" id="" class="form-select form-select-lg">
                        <option selected>Tampilkan Semua</option>
                        <option value="1">Spesialis</option>
                    </select>
                </div> --}}
                
                {{-- List Dokter --}}

                <div class="form-group p-2">
                    <label for="dokter">Pilih Dokter</label>
                    <select name="id_dokter" id="dokter" class="form-select form-select-lg">
                        <option selected disabled>Pilih Dokter</option>
                        @foreach($dokterList as $dokter)
                            <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- <!-- Harga Obat -->
                <div class="form-group p-2">
                    <label for="spesialis">Pilih Spesialis</label>
                    <select name="" id="" class="form-select form-select-lg">
                        <option selected>Tampilkan Semua</option>
                        <option value="1">Spesialis</option>
                        <option value="2">Spesialis</option>
                        <option value="3">Spesialis</option>
                        <option value="4">Spesialis</option>
                    </select>
                </div> --}}

            </form>
        </div>
    </div>

    {{-- <div id="list-dokter" class="p-5 d-xl-flex flex-column justify-content-center">
        <div class="row justify-content-start">
            <div class="col-4 p-2">
                <div class="card">
                    <div class="card-body">
                        <h5>Dr Orang</h5>
                        <p class="card-text">Spesialis</p>
                        <a href="" class="btn btn-outline-primary">Lihat Profile</a>
                        <a href="" class="btn btn-outline-primary">Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div id="list-dokter" class="p-5 d-xl-flex flex-column justify-content-center">
        <div class="row justify-content-start">
            @forelse($dokterTampil as $dokter)
                <div class="col-4 p-2">
                    <div class="card">
                        <div class="card-body">
                            <h5>Dr. {{ $dokter->nama }}</h5>
                            <p class="card-text">{{ $dokter->spesialis ?? 'Umum' }}</p>
                            <a href="#" class="btn btn-outline-primary">Lihat Profile</a>
                            <a href="#" class="btn btn-outline-primary">Appointment</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-muted">Tidak ada dokter ditemukan.</p>
            @endforelse
        </div>
    </div>
</div>



@endsection