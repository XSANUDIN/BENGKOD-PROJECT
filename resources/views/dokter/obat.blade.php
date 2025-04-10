@extends('layout.layout')

@section('content')
<h3>Obat</h3>

{{-- Form --}}
<div class="container-fluid">
    <div class="">
        <div id="add-obat" class="border border-bottom-0 bg-dark col-4 p-2 rounded-top text-center">
            <h3 class="p-2 text-white">Tambah Obat</h3>
        </div>
        <div class="p-4 col-4 border border-top-0 rounded">
            <form class="">
                <div class="form-group">
                    <label for="NamaObat">Nama Obat</label>
                    <input type="text" class="form-control" placeholder="Input Nama Obat">
                </div>
                <div class="form-group p-1">
                    <label for="KemasanObat">Kemasan</label>
                    <input type="text" class="form-control" placeholder="Input Kemasan">
                </div>
                <div class="form-group p-1">
                    <label for="HargaObat">Harga</label>
                    <input type="text" class="form-control" placeholder="Input Harga">
                </div>
                <div class="p-1 text-center">
                    <button type="submit" class="btn btn-dark">Tambahkan</button>
                </div>
            </form>
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
        <div class="table-container">
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
                    <tr>
                        <td>1</td>
                        <td>OBT001</td>
                        <td>Paracetamol</td>
                        <td>Strip 10 tablet</td>
                        <td>Rp 5.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>OBT002</td>
                        <td>Amoxicillin</td>
                        <td>Box 3 strip</td>
                        <td>Rp 25.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>OBT003</td>
                        <td>Cetirizine</td>
                        <td>Strip 10 tablet</td>
                        <td>Rp 15.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>OBT004</td>
                        <td>Ibuprofen</td>
                        <td>Box 20 tablet</td>
                        <td>Rp 20.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>OBT005</td>
                        <td>Vitamin C</td>
                        <td>Botol 30 tablet</td>
                        <td>Rp 30.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>OBT001</td>
                        <td>Paracetamol</td>
                        <td>Strip 10 tablet</td>
                        <td>Rp 5.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>OBT002</td>
                        <td>Amoxicillin</td>
                        <td>Box 3 strip</td>
                        <td>Rp 25.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>OBT003</td>
                        <td>Cetirizine</td>
                        <td>Strip 10 tablet</td>
                        <td>Rp 15.000</td>
                        <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>OBT004</td>
                        <td>Ibuprofen</td>
                        <td>Box 20 tablet</td>
                        <td>Rp 20.000</td>
                           <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>OBT005</td>
                        <td>Vitamin C</td>
                        <td>Botol 30 tablet</td>
                        <td>Rp 30.000</td>
                           <td>
                            <button class="btn btn-warning">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection