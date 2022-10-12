@extends('main')
@section('container')
<div class="row justify-content-center align-items-start">
    <form action="/register/new" method="POST" class="col-md-3">
        @csrf
        <h4 class="fw-bold">Register</h4>
        <hr/>

        {{-- dislpay error --}}
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger mb-2" role="alert">
                <small>{{ $error }}</small>
            </div>
            @endforeach
        @endif

        {{-- alert when email already registered --}}
        @if($msg = Session::get('user-exists'))
            <div class="alert alert-danger mb-2" role="alert">
                <small>{{ $msg }}</small>
            </div>
        @endif

        {{-- alert if register success --}}
        @if($msg = Session::get('register-success'))
            <div class="alert alert-success mb-2" role="alert">
                <small>{{ $msg }}</small>
            </div>
        @endif

        {{-- form inputs --}}
        <label for="nama" class="form-label" style="font-size: 12px; font-weight: 700;">Name</label>
        <input
            type="text"
            id='nama'
            name="name"
            class="form-control"
            placeholder="Nama Lengkap"
            style="font-size: 14px;"/>

        <label for="username" class="form-label mt-3" style="font-size: 12px; font-weight: 700;">Username</label>
        <input 
            type="text"
            name='username'
            id='username'
            class="form-control"
            style="font-size: 14px;"
            placeholder="Username"
        />
        
        <label for="email" class="form-label mt-3" style="font-size: 12px; font-weight: 700;">Email</label>
        <input 
            type="text"
            id='email'
            name='email'
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
            name="password"
        />

        <div class="d-grid gap-2 mt-3">
            <button class="btn btn-primary" style="font-size: 14px;"" type="submit">Buat Akun</button>
        </div>

        {{--  --}}
        <a href='/login' class="mt-3 d-block" style="font-size: 12px;">sudah punya akun ? <b>login</b></a>
    </form>
</div>
@endsection