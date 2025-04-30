<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @include('sweetalert::alert')

  </head>
  <body>
<main>
  <nav class="navbar sticky-top bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">RS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
        <span class="navbar-text">Navbar text with an inline element</span>
      </div>
    </div>
  </nav>

  <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        {{-- <h1 class="display-4 fw-bold lh-1 mb-3">RS</h1> --}}
        <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-hospital" viewBox="0 0 16 16">
          <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1zM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25zM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25z"/>
          <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1zm2 14h2v-3H7zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1zm0-14H6v1h4zm2 7v7h3V8zm-8 7V8H1v7z"/>
        </svg>
        <h5 class="col-lg-10 fs-4 my-2">Halaman Registrasi</h5>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light" action="{{ route('register') }}" method="POST">
          @csrf
          <div class="mx-2 my-3">
            <h4>Form Pendaftaran</h4>
            <small>Lengkapi semua input yang tertera dibawah.</small>
          </div>
          <div class="form-floating mb-3">
            <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama Lengkap">
            <label for="nama">Nama Lengkap</label>
            @error('nama')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="email" id="email" name="email" class="form-control" placeholder="Email">
            <label for="email">Email</label>
            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="text" id="no_hp" name="no_hp" class="form-control" placeholder="No. HP">
            <label for="no_hp">No. Hp WhatsApp</label>
            @error('no_hp')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
            <label for="password">Password</label>
            @error('password')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Ketik Ulang Password">
            <label for="password_confirmation">Ketik Ulang Password</label>
            @error('password')
              <small class="text-danger">{{ $message }}</small>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
          <hr class="my-4">
          <small class="text-muted">Sudah punya akun? <a href="login">Login</a></small>
        </form>
      </div>
    </div>

    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; 2025</p>

      {{-- 
      <a href="#" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <img src="https://img.icons8.com/ios/2x/t-key.png" width="30">
      </a>
      --}}

      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Terms</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Policy</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Help</a></li>
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contact</a></li>
      </ul>
    </footer>
  </div>
</main>

{{-- 
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-body p-4 text-center">
        <h5 class="mb-0">Are u feeling good?</h5>
      </div>
      <div class="modal-footer flex-nowrap p-0">
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0 border-end"><strong>I like this</strong></button>
        <button type="button" class="btn btn-lg btn-link fs-6 text-decoration-none col-6 m-0 rounded-0" data-bs-dismiss="modal">No thanks</button>
      </div>
    </div>
  </div>
</div>
--}}

  </body>
</html>
