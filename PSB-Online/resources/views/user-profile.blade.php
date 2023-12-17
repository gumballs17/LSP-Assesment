@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="padding:2%;">Update Profile User</h2>
</div>
<div class="mt-4">
    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <!-- Tampilkan pesan error jika ada -->
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
    @if(isset($profile))
    <form action="{{ route('profile.update') }}" method="post" class="user-form">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $profile->username }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $profile->email }}">
        </div>

        <div class="mb-3">
            <label for="oldpass" class="form-label">Password</label>
            <input type="password" class="form-control" id="oldpass" name="oldpass" placeholder="old password" >
        </div>

        <div class="mb-3">
            <label for="newpass" class="form-label">New Password</label>
            <input type="password" class="form-control" id="newpass" name="newpass" placeholder="new password">
        </div>
        <br>

        <button type="submit" class="btn btn-primary" class="update-btn">Update</button>
    </form>
    @endif

</div>
@endsection