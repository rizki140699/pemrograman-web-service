@extends('dashboard.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="mt-5">{{ $berita->judul_berita }}</h3>
        <hr/>
        <div class="col-md-5">
            <img class="img-fluid" src="{{ $berita->foto }}"/>
        </div>
        <p>
            {{ $berita->isi_berita }}
        </p>
        <hr/>
        <a class='btn btn-success' href='/dashboard/berita'>Kembali</a>
        <a class="btn btn-warning" href=''>Edit</a>
        <a class='btn btn-danger' href=''>Hapus</a>
    </div>
</div>
@endsection