<div id="sidebar" class="bg-dark vh-100 p-3">
    <h4 class="text-white text-center mb-4"> RS</h4>
    

    @if(request()->is('dokter/*'))
        <div class="nav flex-column">
            <a href="{{ route('dokter.dashboard') }}" class="nav-link text-white d-flex align-items-center mb-2">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <a href="{{ route('dokter.periksa') }}" class="nav-link text-white d-flex align-items-center mb-2">
                <i class="bi bi-clipboard-check me-2"></i> Periksa
            </a>
            <a href="{{ route('dokter.obat') }}" class="nav-link text-white d-flex align-items-center mb-2">
                <i class="bi bi-capsule me-2"></i> Obat
            </a>
        </div>
    @else
        <div class="nav flex-column">
            <a href="{{ route('pasien.dashboard') }}" class="nav-link text-white d-flex align-items-center mb-2">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
            </a>
            <a href="{{ route('pasien.periksa') }}" class="nav-link text-white d-flex align-items-center mb-2">
                <i class="bi bi-clipboard-check me-2"></i> Periksa
            </a>
            <a href="{{ route('pasien.riwayat') }}" class="nav-link text-white d-flex align-items-center mb-2">
                <i class="bi bi-clock-history me-2"></i> Riwayat
            </a>
        </div>
    @endif
</div>
