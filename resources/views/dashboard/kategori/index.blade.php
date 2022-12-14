@extends('dashboard.main')
@section('container')
<div class="row justify-content-center">
    <div class="col-md-10">
        <h3 class="mt-5">Halaman Kategori</h3>
        @if(session('success'))
        <div class="alert bg-success">
            {{ session('success') }}
        </div>
        @elseif(session('delete-kategori'))
        <div class="alert bg-success">
            {{ session('delete-kategori') }}
        </div>
        @elseif(session('update-kategori'))
        <div class="alert bg-success">
            {{ session('update-kategori') }}
        </div>
        @endif
        <a href='/dashboard/kategori/create' class="btn btn-primary mt-3">Kategori Baru</a>
        <hr/>
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline mt-3" aria-describedby="example2_info">
            <thead>
                <tr>
                    <th style="width: 10px">No</th>
                    <th>Nama</th>
                    <th style="width: 40px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kategori as $key => $item)    
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama }}</td>
                        <td class="d-flex justify-content-between">
                            <a href='/dashboard/kategori/update/{{ $item->id }}' class="btn btn-warning btn-sm ms-2 me-2"><i class="far fa-edit"></i></a>
                            <form action="/dashboard/berita/delete/{{ $item->id }}" method="POST">
                                @csrf
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