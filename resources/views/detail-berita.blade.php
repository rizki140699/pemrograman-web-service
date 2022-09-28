@extends('main')
@section('container')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <span class="badge text-bg-info">{{ $berita->kategori->nama }}</span>
            <h2 style="font-weight: 700;">{{ $berita->judul_berita }}</h2>
            <img src="{{ $berita->foto }}" style="width: 100%;max-height: 400px;" class="mt-3"/>
            <p style="line-height: 28px;" class="mt-5">{{ $berita->isi_berita }}</p>
        </div>
    </div>
@endsection