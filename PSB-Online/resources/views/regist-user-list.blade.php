@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="padding:2%;">Registration by {{ Auth::user()->username }}</h2>
    <a href="addRegist" class="btn btn-success">Register Online</a>
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
            <th scope="col">ID Registration</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Nomor Telephone</th>
            <th scope="col">Email</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        @foreach($registrations as $index => $data)
        <tr>
            <th scope="row">{{ $registrations->firstItem() + $loop->index }}</th>
            <th>{{ $data->id }}</th>
            <td>{{ $data->nama_lengkap }}</td>
            <td>{{ $data->nomor_telepon }}</td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>
                <!-- Tombol untuk menampilkan detail -->
                <a href="{{ route('register.detail', ['id' => $data->id]) }}" class="btn btn-info"
                    style="width: 100px;">Detail</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{ $registrations->links('layout.bootstrap-5') }}
@endsection