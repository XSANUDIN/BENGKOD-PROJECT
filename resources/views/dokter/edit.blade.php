@extends('layout.layout')
@section('content')

<div class="p-4">
    <a href="{{ route('dokter.periksa') }}">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z"/>
        </svg>
    </a>
</div>

<div class="container-fluid p-4">

    <div class="">
        <div id="add-obat" class="border border-bottom-0 bg-dark col-4 p-2 rounded-top text-center">
            <h3 class="p-2 text-white">Edit Periksa</h3>
        </div>
        <div class="p-4 col-4 border border-top-0 rounded">
            <form class="" action="{{ route('dokter.update', $periksa->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="NamaPasien">Nama Pasien</label>
                    <input type="text" class="form-control" placeholder="Nama Obat" name="nama" value="{{ $periksa->pasien->nama }}" readonly>
                </div>
    

                <div class="form-group p-1" 
                    x-data="{ tanggal: '{{ old('tgl_periksa', $periksa->tgl_periksa ? \Carbon\Carbon::parse($periksa->tgl_periksa)->format('Y-m-d') : '') }}' }">
                    <label for="tanggalPeriksa">Tanggal Periksa</label>
                    <input type="date" id="tanggalPeriksa" class="form-control" name="tgl_periksa" x-model="tanggal">
                </div>


                <div class="form-group p-1">
                    <label for="catatan">Catatan</label>
                    <input type="text" class="form-control" placeholder="Input Catatan" name="catatan" value="{{ $periksa->catatan }}">
                </div>

                {{-- <div class="form-group p-1">
                    <label>Obat yang Pernah Dipilih</label>
                    @foreach($periksa->periksa as $obat)
                        <input type="text" class="form-control mb-1" value="{{ $obat->obat->nama_obat }}" readonly>
                    @endforeach
                </div>
                <div class="form-group p-1">
                    <label for="id_obat">Pilih Obat</label>
                    <select name="id_obat[]" id="id_obat" class="form-control" multiple>
                        @foreach($listObat as $obat)
                            <option value="{{ $obat->id }}" {{ in_array($obat->id, $selectedObat) ? 'selected' : '' }}>
                                {{ $obat->nama_obat }}
                            </option>
                        @endforeach
                    </select>
                    <small class="text-muted">Gunakan Ctrl (Windows) atau Cmd (Mac) untuk memilih lebih dari satu.</small>
                </div> --}}
                
                <div x-data="multiselect()" x-init="init()" class="form-group p-1">
                    <label for="id_obat">Pilih Obat</label>
                    <div class="dropdown">
                        <button class="form-control text-start dropdown-toggle" type="button" data-bs-toggle="dropdown">
                            <template x-if="selected.length === 0">Pilih Obat...</template>
                            <template x-for="(item, idx) in selected" :key="item.value">x
                                <span class="badge bg-success me-1 d-inline-flex align-items-center">
                                    <span x-text="item.label"></span>
                                    <button type="button" class="btn-close btn-close-white btn-sm ms-1" @click.stop="remove(idx)" style="font-size: 0.6rem;"></button>
                                </span>
                            </template>
                        </button>
                        <ul class="dropdown-menu w-100" style="max-height: 200px; overflow-y: auto;">
                            <template x-for="option in options" :key="option.value">
                                <li>
                                    <a href="#" class="dropdown-item" @click.prevent="toggle(option)">
                                        <input type="checkbox" class="form-check-input me-2" :checked="isSelected(option)">
                                        <span x-text="option.label"></span>
                                    </a>
                                </li>
                            </template>
                        </ul>
                    </div>
                
                    <!-- Hidden inputs for form submission -->
                    <template x-for="item in selected" :key="item.value">
                        <input type="hidden" name="id_obat[]" :value="item.value">
                    </template>
                
                    <small class="text-muted">Klik untuk memilih lebih dari satu.</small>
                </div>

                <a href="{{ route('dokter.edit', $periksa->id) }}">
                    <button class="btn btn-primary">
                        Edit
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                        </svg>
                    </button>
                </a>
            </form>
        </div>
    </div>
</div>




<script>
function multiselect() {
    return {
        options: @json($listObat->map(fn($o) => ['value' => $o->id, 'label' => $o->nama_obat])),
        selected: [],
        toggle(option) {
            const index = this.selected.findIndex(o => o.value === option.value);
            if (index > -1) {
                this.selected.splice(index, 1);
            } else {
                this.selected.push(option);
            }
        },
        remove(idx) {
            this.selected.splice(idx, 1);
        },
        isSelected(option) {
            return this.selected.some(o => o.value === option.value);
        },
        init() {
            const previouslySelected = @json($periksa->periksa->map(fn($item) => $item->obat->id));
            this.selected = this.options.filter(opt => previouslySelected.includes(opt.value));
        }
    }
}


    </script>
    

</script>
@endsection