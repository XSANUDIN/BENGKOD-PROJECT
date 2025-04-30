<div class="modal fade" id="editModal-{{ $obat->id }}" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered"> 
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModal">Edit Obat</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="" action="{{ route('obat.update', $obat->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="NamaObat">Nama Obat</label>
                        <input type="text" class="form-control" placeholder="Input Nama Obat" name="nama_obat" value="{{ $obat->nama_obat }}">
                    </div>
                    <div class="form-group p-1">
                        <label for="KemasanObat">Kemasan</label>
                        <input type="text" class="form-control" placeholder="Input Kemasan" name="kemasan" value="{{ $obat->kemasan }}">
                    </div>
                    <div class="form-group p-1">
                        <label for="HargaObat">Harga</label>
                        <input type="number" class="form-control" placeholder="Input Harga" name="harga" value="{{ $obat->harga }}">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Edit</button>
                    {{-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> --}}
                  </div>
                </form>
        </div>
    </div>
</div>

