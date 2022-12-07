@extends('dashboard.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="mt-5">Halaman Berita</h3>
        @if(session('success'))
        <div class="alert bg-success">
            {{ session('success') }}
        </div>
        @endif
        <a href='/dashboard/berita/new' class="btn btn-primary mt-3">Berita Baru</a>
        <hr/>
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline mt-3" aria-describedby="example2_info">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Judul Berita</th>
                    <th>Kategori</th>
                    <th style="width: 40px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)    
                    <tr>
                        <td>1</td>
                        <td>{{ $item->judul_berita }}</td>
                        <td>{{ $item->kategori->nama }}</td>
                        <td class="d-flex justify-content-between">
                            <a href='/dashboard/berita/detail/{{ $item->slug }}' class="btn btn-primary btn-sm"><i class="far fa-eye"></i></a>
                            <a href='/' class="btn btn-warning btn-sm ms-2 me-2"><i class="far fa-edit"></i></a>
                            <form action="/dashboard/berita/delete" method="POST">
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection