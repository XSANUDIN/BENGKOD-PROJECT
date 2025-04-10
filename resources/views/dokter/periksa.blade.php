@extends('layout.layout')

@section('content')
<div class="container-fluid">
    <h3>Periksa</h3>
    <div class="mt-4">
        <div class="border border-bottom-0 bg-dark p-2 rounded-top">
            <div class="d-flex justify-content-between align-items-center">
            <h3 class="p-2 text-white">Daftar Periksa</h3>
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
                        <th scope="col">Pasien</th>
                        <th scope="col">Tanggal Periksa</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Biaya Periksa</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>P001</td>
                        <td>Andi</td>
                        <td>2025-04-10</td>
                        <td>Riwayat sakit kepala</td>
                        <td>Rp 200.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>P002</td>
                        <td>Siti</td>
                        <td>2025-04-09</td>
                        <td>Periksa mata</td>
                        <td>Rp 150.000</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>P003</td>
                        <td>Joko</td>
                        <td>2025-04-08</td>
                        <td>Periksa gigi</td>
                        <td>Rp 300.000</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>P004</td>
                        <td>Rina</td>
                        <td>2025-04-07</td>
                        <td>Periksa darah</td>
                        <td>Rp 250.000</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>P005</td>
                        <td>Rahmat</td>
                        <td>2025-04-06</td>
                        <td>Periksa jantung</td>
                        <td>Rp 400.000</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>P006</td>
                        <td>Lina</td>
                        <td>2025-04-05</td>
                        <td>Periksa kulit</td>
                        <td>Rp 175.000</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>P007</td>
                        <td>Budi</td>
                        <td>2025-04-04</td>
                        <td>Periksa THT</td>
                        <td>Rp 225.000</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>P008</td>
                        <td>Fitria</td>
                        <td>2025-04-03</td>
                        <td>Periksa kaki</td>
                        <td>Rp 180.000</td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td>P009</td>
                        <td>Yanto</td>
                        <td>2025-04-02</td>
                        <td>Periksa perut</td>
                        <td>Rp 275.000</td>
                    </tr>
                    <tr>
                        <td>10</td>
                        <td>P010</td>
                        <td>Umi</td>
                        <td>2025-04-01</td>
                        <td>Periksa gigi</td>
                        <td>Rp 300.000</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>P011</td>
                        <td>Arief</td>
                        <td>2025-03-31</td>
                        <td>Periksa mata</td>
                        <td>Rp 150.000</td>
                    </tr>
                    <tr>
                        <td>12</td>
                        <td>P012</td>
                        <td>Yulia</td>
                        <td>2025-03-30</td>
                        <td>Periksa darah</td>
                        <td>Rp 250.000</td>
                    </tr>
                    <tr>
                        <td>13</td>
                        <td>P013</td>
                        <td>Fahmi</td>
                        <td>2025-03-29</td>
                        <td>Periksa jantung</td>
                        <td>Rp 400.000</td>
                    </tr>
                    <tr>
                        <td>14</td>
                        <td>P014</td>
                        <td>Vera</td>
                        <td>2025-03-28</td>
                        <td>Periksa kulit</td>
                        <td>Rp 175.000</td>
                    </tr>
                    <tr>
                        <td>15</td>
                        <td>P015</td>
                        <td>Andreas</td>
                        <td>2025-03-27</td>
                        <td>Periksa THT</td>
                        <td>Rp 225.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
    
    
@endsection