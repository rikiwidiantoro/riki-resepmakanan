@extends('layouts.app')

@section('content')
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
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card bg-light" style="border: none;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <span style="color: gray"><em>2 orang menyukai ini</em></span>
                    <h5 class="card-title">Sambal Jamur ala SS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="width: 100%; background-color: rgb(194,201,205);">Suka</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card bg-light" style="border: none;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <span style="color: gray"><em>2 orang menyukai ini</em></span>
                    <h5 class="card-title">Sambal Jamur ala SS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="width: 100%; background-color: rgb(194,201,205);">Suka</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card bg-light" style="border: none;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <span style="color: gray"><em>2 orang menyukai ini</em></span>
                    <h5 class="card-title">Sambal Jamur ala SS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="width: 100%; background-color: rgb(194,201,205);">Suka</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card bg-light" style="border: none;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <span style="color: gray"><em>2 orang menyukai ini</em></span>
                    <h5 class="card-title">Sambal Jamur ala SS</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn" style="width: 100%; background-color: rgb(194,201,205);">Suka</a>
                </div>
            </div>
        </div>
    </div>
    
</div>
@endsection
