<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @vite('resources/js/app.js')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.19.1/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.19.1/dist/sweetalert2.min.css" rel="stylesheet">
</head>
<body>
    @include('sweetalert::alert')
    <div class="container-fluid">
        <div class="row">

            {{-- Sidebar --}}

            <div class="col-md-2 p-0">
                @include('layout.sidebar')
            </div>
            
            {{-- Main Content --}}

            <div class="col-md-10">

                {{-- Navbar --}}

                <div class="">
                    @include('layout.navbar')
                </div>
                
                {{-- Content --}}

                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
        @include('layout.footer')
    </body>
</html>