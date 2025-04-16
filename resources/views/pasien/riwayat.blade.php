@extends('layout.layout')

@section('content')
<div class="container-fluid">
    <h3>Riwayat Periksa</h3>
    <div class="mt-4">
        <div class="border border-bottom-0 bg-dark p-2 rounded-top">
            <div class="d-flex justify-content-between align-items-center">
            <h3 class="p-2 text-white">Riwayat Periksa</h3>
                <div class="form-inline mx-4 col-sm-3">
                    <input type="text" class="form-control" placeholder="Cari..." />
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table border">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Id Periksa</th>
                        <th scope="col">Dokter</th>
                        <th scope="col">Tanggal Periksa</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Obat</th>
                        <th scope="col">Biaya Periksa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($riwayat as $i => $item)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td>P{{ str_pad($item->id, 3, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $item->dokter->nama ?? '-' }}</td>
                            <td>{{ \Carbon\Carbon::parse($item->tgl_periksa)->format('Y-m-d') }}</td>
                            <td>{{ $item->catatan ?? '-' }}</td>
                            <td>Rp {{ number_format($item->biaya_periksa, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
    
    
@endsection