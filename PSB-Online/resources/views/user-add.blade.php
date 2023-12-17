@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="padding:2%;">Add New User</h2>
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
    <form action="{{ url('createUser') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="username" class="form-label">Username*</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email*</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password*</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <label for="role_id" class="form-label">Role ID*</label>
            <select class="form-select" id="role_id" name="role_id" required>
                <option value="">-</option>
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection