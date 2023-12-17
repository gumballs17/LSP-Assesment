@extends('layout.auth')

@section('container')
<div class="login-box">
    @if (session('status') === 'success')
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @elseif (session('status') === 'failed')
    <div class="alert alert-danger">
        {{ session('message') }}
    </div>
    @endif
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="masukkan email anda" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password"
                placeholder="masukkan password anda" required>
        </div>
        <div>
            <button class="btn btn-primary form-control" type="submit">Login</button>
        </div>
        <div class="text-center">
            <p>Belum punya akun ? <a href="register" class="">Sign Up</a></p>
        </div>
    </form>
    <div class="mx-auto">
        <a href="/">
            <button type="button" class="btn btn-light">Home</button>
        </a>
    </div>
</div>
@endsection