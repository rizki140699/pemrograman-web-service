@extends('dashboard.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="mt-5">Berita Baru</h3>
        <hr/>
        <form action="/dashboard/berita/create" method="POST">
            @csrf
            <label for="judul">Judul Berita</label>
            <input id='judul' type="text" placeholder="Masukan Judul Berita" name='judul_berita' class="form-control"/>
            @error('judul_berita')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <label for="kategori" class="mt-2">Kategori</label>
            <select id='kategori' class="form-control" name="kategori_id">
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                @endforeach
            </select>
            @error('kategori_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <label for="foto" class="mt-2">Foto</label>
            <input id='foto' type="file" name='foto' class="form-control"/>
            @error('foto')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <label for="isi" class="mt-2">Isi Berita</label>
            <textarea id='isi' type="file" name='isi_berita' class="form-control" placeholder="masukan isi berita"></textarea>
            @error('isi_berita')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <a href='/dashboard/berita' type="button" class="btn btn-secondary mt-3">Kembali</a>
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
        </form>
    </div>
</div>
@endsection