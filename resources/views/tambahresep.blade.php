<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: rgb(84,119,148)">
            <div class="container">
                <a class="nav-link mx-3" href="/home" style="color: white">Kembali</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: white" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
          <div class="container">  
            <div class="row justify-content-center mb-3">
                <div class="col-lg-8">
                    <h2>Tulis Resepmu ...</h2>
                </div>
            </div>
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8">
                
                    <form action="/tulisresep/store" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="judul" class="form-label"><h5>Judul</h5></label>
                            <input type="text" class="form-control" id="judul" name="judul">
                        </div>
                        <div class="mb-3">
                            <label for="deskripsi" class="form-label"><h5>Deskripsi</h5></label>
                            <textarea name="deskripsi" class="form-control" id="deskripsi" id="" cols="10" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="bahan" class="form-label"><h5>Bahan - bahan</h5></label>
                            <textarea name="bahan" class="form-control" id="bahan" id="" cols="10" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="pembuatan" class="form-label"><h5>Langkah Pembuatan</h5></label>
                            <textarea name="pembuatan" class="form-control" id="pembuatan" id="" cols="10" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="gambar" class="form-label"><h5>Upload Foto Masakan</h5></label>
                            <input type="text" class="form-control" id="gambar" name="gambar" placeholder="gambar.jpg">
                            {{-- <input type="file" class="form-control" id="gambar" aria-describedby="emailHelp"> --}}
                        </div>
                            <div class="mb-3 d-none">
                                <label for="user" class="form-label"><h5>Penulis</h5></label>
                                <input type="text" class="form-control" id="user" name="user_id" value="{{ $user->id }}">
                            </div>
                        <button type="submit" name="submit" class="btn btn-primary" style="background-color: rgb(84,119,148); width: 100%;">Terbitkan Resep</button>
                    </form>

                </div>
            </div>
          </div>
        </main>
    </div>

</body>
</html>
