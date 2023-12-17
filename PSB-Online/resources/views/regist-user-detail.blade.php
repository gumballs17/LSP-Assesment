@extends('layout.main')

@section('container')
<div class="d-flex justify-content-between align-items-center">
    <h2 style="padding:2%;">Detail Registration Data</h2>
    <a href="{{ url('print', ['id' => $register->id]) }}" class="btn btn-success">Cetak PDF</a>
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
    @if(isset($register))
    <form action="#" method="post">
        <div class="mb-3">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"
                value="{{ $register->nama_lengkap }}">
        </div>

        <div class="mb-3">
            <label for="alamat_ktp" class="form-label">Alamat KTP</label>
            <textarea class="form-control" id="alamat_ktp" name="alamat_ktp">{{ $register->alamat_ktp }}</textarea>
        </div>

        <div class="mb-3">
            <label for="alamat_saat_ini" class="form-label">Alamat Saat Ini</label>
            <textarea class="form-control" id="alamat_saat_ini"
                name="alamat_saat_ini">{{ $register->alamat_saat_ini }}</textarea>
        </div>

        <div class="mb-3">
            <label for="kecamatan" class="form-label">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" value="{{ $register->kecamatan }}">
        </div>

        <div class="mb-3">
            <label for="kabupaten" class="form-label">Kabupaten</label>
            <select class="form-select" id="kabupaten" name="kabupaten" required>
                <option value="">-</option>
                @foreach($districts as $district)
                <option value="{{ $district->name }}" {{ $register->kabupaten == $district->name ? 'selected' : '' }}>
                    {{ $district->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="provinsi" class="form-label">Provinsi</label>
            <select class="form-select" id="provinsi" name="provinsi" required>
                <option value="">-</option>
                @foreach($provinces as $province)
                <option value="{{ $province->name }}" {{ $register->provinsi == $province->name ? 'selected' : '' }}>
                    {{ $province->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="nomor_telepon" class="form-label">Nomor Telepon</label>
            <input type="text" class="form-control" id="nomor_telepon" name="nomor_telepon"
                value="{{ $register->nomor_telepon }}">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $register->email }}">
        </div>

        <div class="mb-3">
            <label for="kewarganegaraan" class="form-label">Kewarganegaraan</label>
            <select class="form-select" id="kewarganegaraan" name="kewarganegaraan" required>
                <option value="">-</option>
                <option value="WNI Asli" {{ $register->kewarganegaraan == 'WNI Asli' ? 'selected' : '' }}>WNI Asli
                </option>
                <option value="WNI Keturunan" {{ $register->kewarganegaraan == 'WNI Keturunan' ? 'selected' : '' }}>WNI
                    Keturunan</option>
                <option value="WNA" {{ $register->kewarganegaraan == 'WNA' ? 'selected' : '' }}>WNA</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                value="{{ $register->tanggal_lahir }}">
        </div>

        <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                value="{{ $register->tempat_lahir }}">
        </div>

        <div class="mb-3">
            <label for="kabupaten_lahir" class="form-label">Kabupaten Lahir</label>
            <select class="form-select" id="kabupaten_lahir" name="kabupaten_lahir" required>
                <option value="">-</option>
                @foreach($districts as $district)
                <option value="{{ $district->name }}" {{ $register->kabupaten_lahir == $district->name ? 'selected' : ''
                    }}>
                    {{ $district->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="provinsi_lahir" class="form-label">Provinsi Lahir</label>
            <select class="form-select" id="provinsi_lahir" name="provinsi_lahir" required>
                <option value="">-</option>
                @foreach($provinces as $province)
                <option value="{{ $province->name }}" {{ $register->provinsi_lahir == $province->name ? 'selected' : ''
                    }}>
                    {{ $province->name }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki" {{ $register->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki
                </option>
                <option value="Perempuan" {{ $register->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan
                </option>
            </select>
        </div>

        <div class="mb-3">
            <label for="status_nikah" class="form-label">Status Nikah</label>
            <select class="form-select" id="status_nikah" name="status_nikah" required>
                <option value="Menikah" {{ $register->status_nikah == 'Menikah' ? 'selected' : '' }}>Menikah</option>
                <option value="Belum Menikah" {{ $register->status_nikah == 'Belum Menikah' ? 'selected' : '' }}>Belum
                    Menikah</option>
                <option value="Lain-lain(janda/duda)" {{ $register->status_nikah == 'Lain-lain(janda/duda)' ? 'selected'
                    : '' }}>Lain-lain(janda/duda)</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="agama" class="form-label">Agama</label>
            <select class="form-select" id="agama" name="agama" required>
                <option value="Islam" {{ $register->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                <option value="Katolik" {{ $register->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
                <option value="Kristen" {{ $register->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
                <option value="Hindu" {{ $register->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                <option value="Buddha" {{ $register->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                <option value="Konghucu" {{ $register->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu</option>
                <option value="Lain-lain" {{ $register->agama == 'Lain-lain' ? 'selected' : '' }}>Lain-lain</option>
            </select>
        </div>
        <br>
    </form>

    @endif

</div>
@endsection