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
</head>
<body>
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