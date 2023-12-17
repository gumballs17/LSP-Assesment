@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="padding:2%;">User Management Data</h2>
    <a href="addUser" class="btn btn-success">Tambah User</a>
</div>
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
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">User ID</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($users as $index => $data)
        <tr>
            <th scope="row">{{ $users->firstItem() + $loop->index }}</th>
            <td>{{ $data->id }}</td>
            <td>{{ $data->username }}</td>
            <td>{{ $data->email }}</td>
            <td>
                <!-- Tombol untuk menampilkan detail -->
                <a href="{{ route('user.show', ['id' => $data->id]) }}" class="btn btn-info"
                    style="width: 100px;">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $users->links('layout.bootstrap-5') }}
@endsection