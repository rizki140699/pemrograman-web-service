@extends('dashboard.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="mt-5">Halaman Berita</h3>
        <a href='/' class="btn btn-primary mb-5">Berita Baru</a>
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
                            <a type="button" class="btn btn-primary btn-sm"><i class="far fa-eye"></i></a>
                            <a type="button" class="btn btn-warning btn-sm ms-2 me-2"><i class="far fa-edit"></i></a>
                            <a type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection