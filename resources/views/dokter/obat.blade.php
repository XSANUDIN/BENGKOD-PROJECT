@extends('layout.layout')

@section('content')
<h3>Obat</h3>

{{-- Form --}}
<div class="container-fluid">
    <div class="row">
        {{-- Form Tambah Obat --}}
        <div class="col-md-4">
            <div class="border border-bottom-0 bg-dark p-2 rounded-top text-center">
                <h3 class="p-2 text-white mb-0">
                    <a class="text-white text-decoration-none" data-bs-toggle="collapse" href="#formTambahObat" role="button" aria-expanded="false" aria-controls="formTambahObat">
                        Tambah Obat
                    </a>
                </h3>
            </div>
            <div class="collapse border border-top-0 rounded p-4 {{ session('keep_form_open') ? 'show' : '' }}" id="formTambahObat">
                <form action="" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="NamaObat">Nama Obat</label>
                            <input type="text" class="form-control" placeholder="Input Nama Obat" name="nama_obat" required>
                        </div>
                        <div class="form-group p-1">
                            <label for="KemasanObat">Kemasan</label>
                            <input type="text" class="form-control" placeholder="Input Kemasan" name="kemasan" required>
                        </div>
                        <div class="form-group p-1">
                            <label for="HargaObat">Harga</label>
                            <input type="number" class="form-control" placeholder="Input Harga" name="harga" required>
                        </div>
                        <div class="p-1 text-center">
                            <button type="submit" class="btn btn-success">Tambahkan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <div class="mt-4">
        <div class="border border-bottom-0 bg-dark p-2 rounded-top">
            <div class="d-flex justify-content-between align-items-center">
            <h3 class="p-2 text-white">List Obat</h3>
                <div class="form-inline col-sm-3 mx-3">
                    <input type="text" class="form-control" placeholder="Cari Obat" />
                </div>
            </div>
        </div>
        {{-- Tabel --}}
        <div class="table-container" id="tableContainer">
            <table class="table border">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kemasan</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($obat as $obat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $obat->id }}</td>
                        <td>{{ $obat->nama_obat }}</td>
                        <td>{{ $obat->kemasan }}</td>
                        <td>{{ $obat->harga }}</td>
                        <td class="d-flex gap-2">
                            @include('dokter.components.edit_modal')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{ $obat->id }}">
                                Edit
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </button>
                            
                            <form id="deleteObat-{{ $obat->id }}" action="{{ route('obat.delete', $obat->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger"
                                onclick="confirmAction({
                                    formId: 'deleteObat-{{ $obat->id }}',
                                    title: 'Konfirmasi Hapus',
                                    text: 'Data ini akan dihapus permanen.',
                                    confirmButtonText: 'Ya, hapus!',
                                    cancelButtonText: 'Batal'
                                })">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


    
@endsection
