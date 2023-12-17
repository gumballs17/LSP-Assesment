@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="padding:2%;">Update User</h2>
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
    @if(isset($user))
    <form action="{{ route('user.update', ['id' => $user->id]) }}" method="post" class="user-form">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
        </div>

        <div class="mb-3">
            <label for="role_id" class="form-label">Role ID</label>
            <select class="form-select" id="role_id" name="role_id" required>
                <option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>Admin</option>
                <option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>User</option>
            </select>
        </div>

        <br>

        <button type="submit" class="btn btn-primary" class="update-btn">Update</button>

        <button type="button" class="btn btn-danger" class="update-btn" data-bs-toggle="modal"
            data-bs-target="#deleteModal">Delete</button>
    </form>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Apakah Anda yakin ingin menghapus user ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form action="{{ route('user.destroy', ['id' => $user->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
@endsection