@extends('main')
@section('container')
<div class="row justify-content-center align-items-start">
    <form action="" class="col-md-3">
        
        <h4 class="fw-bold">Login</h4>
        <hr/>
        <label for="email" class="form-label" style="font-size: 12px; font-weight: 700;">Email</label>
        <input type="text" id='email' style="font-size: 14px;" class="form-control" placeholder="Email"/>

        <label for="password" class="form-label mt-3" style="font-size: 12px; font-weight: 700;">Password</label>
        <input type="password" id='password' class="form-control" placeholder="Password" style="font-size: 14px;"/>

        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary" style="font-size: 14px;" type="button">Login</button>
        </div>

        {{--  --}}
        <a href='/register' class="mt-3 d-block" style="font-size: 12px;">belum punya akun ? <b>daftar</b></a>
    </form>
</div>
@endsection