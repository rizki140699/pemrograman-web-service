@extends('main')
@section('container')
    <div class="row">
      @foreach ($berita as $item)       
        <div class="col-md-3 me-3">
            <div class="card border border-0" style="width: 18rem;">
                <img height="120" src="{{ $item->foto }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->judul_berita }}</h5>
                  <p class="card-text">{{ Str::substr($item->isi_berita, 0, 50) }}</p>
                  <a href="/berita/{{ $item->slug }}" class="btn btn-primary btn-sm">Detail</a>
                </div>
              </div>
        </div>
      @endforeach
    </div>
@endsection