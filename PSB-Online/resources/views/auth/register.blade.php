@extends('layout.auth')

@section('container')
<div class="login-box">
    @if ($errors->any())
    <div>
        <ul class="list-group">
            @foreach ($errors->all() as $error)
            <li class="list-group-item list-group-item-danger">{{ $error }}</li>
            @endforeach
        </ul>
        <br>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <form action="" method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username*</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="enter username" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address*</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="enter email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password*</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="enter password" required>
        </div>
        <div class="mb-3">
            <label for="confirmPass" class="form-label">Confirm Password*</label>
            <input type="password" class="form-control" id="confirmPass" name="confirmPass"
                placeholder="confirm password" required>
        </div>
        <div>
            <button class="btn btn-primary form-control" type="submit">Register</button>
        </div>
        <div class="text-center">
            <p>Sudah punya akun ? <a href="login" class="">Log in</a></p>
        </div>
    </form>
</div>
@endsection