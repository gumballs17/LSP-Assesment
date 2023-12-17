@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="padding:2%;">Online Registration Student</h2>
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
    <form action="{{ url('registration') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap*</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
        </div>

        <div class="mb-3">
            <label for="alamat_ktp" class="form-label">Alamat KTP*</label>
            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp" required></textarea>
        </div>

        <div class="mb-3">
            <label for="alamat_saat_ini" class="form-label">Alamat Saat Ini*</label>
            <textarea class="form-control" id="alamat_saat_ini" name="alamat_saat_ini" required></textarea>
        </div>

        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan*</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
        </div>

        <div class="mb-3">
            <label for="kabupaten" class="form-label">Kabupaten*</label>
            <select class="form-select" id="kabupaten" name="kabupaten" required>
                <option value="">-</option>
                @foreach($districts as $district)
                <option value="{{ $district->name }}">{{ $district->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi*</label>
            <select class="form-select" id="provinsi" name="provinsi" required>
                <option value="">-</option>
                @foreach($provinces as $province)
                <option value="{{ $province->name }}">{{ $province->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon*</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email*</label>
            <input type="text" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="kewarganegaraan" class="form-label">Kewarganegaraan*</label>
            <select class="form-select" id="kewarganegaraan" name="kewarganegaraan" required>
                <option value="">-</option>
                <option value="WNI Asli">WNI Asli</option>
                <option value="WNI Keturunan">WNI Keturunan</option>
                <option value="WNA">WNA</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir*</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
        </div>

        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir*</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
        </div>

        <div class="mb-3">
            <label for="kabupaten_lahir" class="form-label">Kabupaten Lahir*</label>
            <select class="form-select" id="kabupaten_lahir" name="kabupaten_lahir" required>
                <option value="">-</option>
                @foreach($districts as $district)
                <option value="{{ $district->name }}">{{ $district->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="provinsi_lahir" class="form-label">Provinsi Lahir*</label>
            <select class="form-select" id="provinsi_lahir" name="provinsi_lahir" required>
                <option value="">-</option>
                @foreach($provinces as $province)
                <option value="{{ $province->name }}">{{ $province->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin*</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="">-</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status_nikah" class="form-label">Status Nikah*</label>
            <select class="form-select" id="status_nikah" name="status_nikah" required>
                <option value="">-</option>
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Lain-lain(janda/duda)">Lain-lain(janda/duda)</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama*</label>
            <select class="form-select" id="agama" name="agama" required>
                <option value="">-</option>
                <option value="Islam">Islam</option>
                <option value="Islam">Katolik</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="Lain-lain">Lain-lain</option>
            </select>
        </div>


        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>

<script>
    function validateForm() {
        var nomorTelepon = document.getElementById('nomor_telepon').value;

        var regex = /^[0-9]+$/;

        if (!regex.test(nomorTelepon)) {
            alert('Nomor Telepon harus berupa angka.');
            return false;
        }

        return true;
    }
</script>
@endsection