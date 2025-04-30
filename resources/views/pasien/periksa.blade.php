@extends('layout.layout')

@section('content')
<div class="container-fluid">
    <div id="add-obat" class="mx-auto text-center p-4">
        <h1 class="text-black">Daftar Periksa</h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="col-sm-10">
            <form action="#" method="POST">
                <div class="form-group p-2">
                    <label for="dokter">Nama Pasien</label>
                    <div class="input-group input-group-lg">
                        <input type="text" id="dokter" name="dokter" class="form-control" value="{{ Auth::user()->nama }}" readonly >
                    </div>
                </div>
                
                {{-- List Dokter --}}

                {{-- <div class="form-group p-2">
                    <label for="dokter">Pilih Dokter</label>
                    <select name="id_dokter" id="dokter" class="form-select form-select-lg">
                        <option selected disabled>Pilih Dokter</option>
                        @foreach($dokterList as $dokter)
                            <option value="{{ $dokter->id }}">{{ $dokter->nama }}</option>
                        @endforeach
                    </select>
                </div> --}}

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
        <hr>
        <div class="p-2">
            <div class="d-flex justify-content-between align-items-center">
            <h3 class="p-2 text-dark">List Dokter</h3>
                <div class="form-inline mx-4 col-sm-4">
                    <input type="text" class="form-control" placeholder="Cari..." />
                </div>
            </div>
        </div>
        <hr>
        <div class="row justify-content-start">
                
            @forelse($dokterTampil as $dokter)
                <div class="col-4 p-2">
                    <div class="card">
                        <div class="card-body">
                            <h5>Dr. {{ $dokter->nama }}</h5>
                            <p class="card-text">{{ $dokter->spesialis ?? 'Umum' }}</p>

                            @include('pasien.components.modal', ['dokter'=>$dokter])
                            <a href="#" class="btn btn-outline-primary">Lihat Profile</a>

                            <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#periksaModal-{{ $dokter->id }}">
                                Appointment
                            </button>
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