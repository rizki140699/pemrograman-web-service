@extends('main')
@section('container')
<div class="row justify-content-center align-items-start">
    <form action="" class="col-md-3">
        <h4 class="fw-bold">Register</h4>
        <hr/>
        <label for="nama" class="form-label" style="font-size: 12px; font-weight: 700;">Nama</label>
        <input
            type="text"
            id='nama'
            class="form-control"
            placeholder="Nama Lengkap"
            style="font-size: 14px;"/>

        <label for="email" class="form-label mt-3" style="font-size: 12px; font-weight: 700;">Email</label>
        <input 
            type="text"
            id='email'
            class="form-control"
            style="font-size: 14px;"
            placeholder="Email"
        />

        <label for="password" class="form-label mt-3" style="font-size: 12px; font-weight: 700;">Password</label>
        <input
            type="password"
            id='password'
            class="form-control"
            placeholder="Password"
            style="font-size: 14px;"
        />

        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary" style="font-size: 14px;"" type="button">Login</button>
        </div>

        {{--  --}}
        <a href='/login' class="mt-3 d-block" style="font-size: 12px;">sudah punya akun ? <b>login</b></a>
    </form>
</div>
@endsection