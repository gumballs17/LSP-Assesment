@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="padding:2%;">Registration Management</h2>
    <a href="export" class="btn btn-success">Download Data</a>
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
            <th scope="col">ID User</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Nomor Telephone</th>
            <th scope="col">Email</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($register as $index => $data)
        <tr>
            <th scope="row">{{ $register->firstItem() + $loop->index }}</th>
            <th>{{ $data->users_id }}</th>
            <td>{{ $data->nama_lengkap }}</td>
            <td>{{ $data->nomor_telepon }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>
                <!-- Tombol untuk menampilkan detail -->
                <a href="{{ route('register.show', ['id' => $data->id]) }}" class="btn btn-info"
                    style="width: 100px;">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $register->links('layout.bootstrap-5') }}
@endsection