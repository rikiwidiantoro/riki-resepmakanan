@extends('layouts.main')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Selamat Datang, ') }}{{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>

    <br><br>

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h5>Resep Terbaru</h5>
        </div>
    </div>
    <div class="row">
        @foreach($reseps as $resep)
        <div class="col-lg-4 mb-5">
            <div class="card bg-light" style="border: none;">
                <img src="gambar.jpg" class="card-img-top" alt="gambar.jpg">
                <div class="card-body">
                    <span style="color: gray"><em>2 orang menyukai ini</em></span>
                    <h5 class="card-title">
                        <a href="/detail/{{ $resep->id }}" class="text-decoration-none">{{ $resep->judul }}</a>
                    </h5>
                    <p class="card-text">{{ $resep->deskripsi }}</p>
                    <a href="#" class="btn suka" style="width: 100%; background-color: rgb(194,201,205);">Suka</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</div>
@endsection
