@extends('layouts.main')

@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
          <img src="{{ $resep->gambar }}" class="card-img-top" alt="{{ $resep->gambar }}">
          <h1>{{ $resep->judul }}</h1>
          <p>Penulis Resep : <em>{{ $resep->author->name }}</em></p>
          <p>{{ $resep->deskripsi }}</p>
          <h3>Bahan-bahan :</h3>
          <ul>
            <li>{{ $resep->bahan }}</li>
          </ul>
          <h3>Langkah Pembuatan :</h3>
          <ol>
            <li>{{ $resep->pembuatan }}</li>
          </ol>
        </div>
    </div>
    <div class="mt-5" >
      <a href="/home" style="color: rgb(0, 0, 0)">Kembali</a>
    </div>
</div>
@endsection
