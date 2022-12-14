@extends('dashboard.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="mt-5">Kategori Baru</h3>
        <hr/>
        <form action="/dashboard/kategori/new" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="judul">Nama Kategori</label>
            <input id='judul' type="text" placeholder="Masukan Judul Berita" name='nama' class="form-control"/>
            @error('judul_berita')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <a href='/dashboard/kategori' type="button" class="btn btn-secondary mt-3">Kembali</a>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</div>
@endsection