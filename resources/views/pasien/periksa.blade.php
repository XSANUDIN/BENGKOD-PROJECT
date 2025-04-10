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
                    <label for="dokter">Cari Dokter</label>
                    <div class="input-group input-group-lg">
                        <input type="text" id="dokter" name="dokter" class="form-control" placeholder="Input Nama Dokter" required>
                    </div>
                </div>
                
                <!-- Kemasan Obat -->
                <div class="form-group p-2">
                    <label for="rumahsakit">Pilih Rumahsakit</label>
                    <select name="" id="" class="form-select form-select-lg">
                        <option selected>Tampilkan Semua</option>
                        <option value="1">Spesialis</option>
                        <option value="2">Spesialis</option>
                        <option value="3">Spesialis</option>
                        <option value="4">Spesialis</option>
                    </select>
                </div>
                
                <!-- Harga Obat -->
                <div class="form-group p-2">
                    <label for="spesialis">Pilih Spesialis</label>
                    <select name="" id="" class="form-select form-select-lg">
                        <option selected>Tampilkan Semua</option>
                        <option value="1">Spesialis</option>
                        <option value="2">Spesialis</option>
                        <option value="3">Spesialis</option>
                        <option value="4">Spesialis</option>
                    </select>
                </div>

            </form>
        </div>
    </div>

    <div id="list-dokter" class="p-5 d-xl-flex flex-column justify-content-center">
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
    </div>
 
</div>



@endsection