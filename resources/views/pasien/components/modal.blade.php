<div class="modal fade" id="periksaModal-{{ $dokter->id }}" tabindex="-1" aria-labelledby="periksaModal-{{ $dokter->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="periksaModal">Appointment Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        <div class="modal-body">
            <form class="" action="{{ route('pasien.appointment') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="namaPasien">Nama Pasien</label>
                    <input readonly type="text" class="form-control" placeholder="Pasiens" name="namaPasien">
                </div>
                <div class="form-group p-1">
                    <label for="namaDokter">Nama Dokter</label>
                    <input readonly type="text" class="form-control" name="nama_dokter" value="Dr. {{ $dokter->nama }}" >
                    <input hidden type="text" class="form-control" name="id_dokter" value="{{ $dokter->id }}" >
                </div>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Appointment</button>
                </div>
            </form> 
        </div>
    </div>
</div>

