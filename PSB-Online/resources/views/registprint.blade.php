<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB Online - BUKTI REGISTRASI SISWA BARU</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            text-align: center;
            padding: 20px;
            background-color: #f0f0f0;
        }

        h2 {
            margin: 0;
            padding: 0;
        }

        main {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input,
        textarea,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        select {
            width: 100%;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <header>
        <h2>BUKTI REGISTRASI SISWA BARU</h2>
    </header>

    <main>
        @if(isset($register))
        <form action="#" method="post">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ $register->nama_lengkap }}" required>

            <label for="alamat_ktp">Alamat KTP</label>
            <input type="text" id="alamat_ktp" name="alamat_ktp" value="{{ $register->alamat_ktp }}" required>

            <label for="alamat_saat_ini">Alamat Saat Ini</label>
            <input type="text" id="alamat_saat_ini" name="alamat_saat_ini" value="{{ $register->alamat_saat_ini }}"
                required>
                
            <label for="kecamatan">Kecamatan</label>
            <input type="text" id="kecamatan" name="kecamatan" value="{{ $register->kecamatan }}" required>

            <label for="kabupaten">Kabupaten</label>
            <input type="text" id="kabupaten" name="kabupaten" value="{{ $register->kabupaten }}" required>

            <label for="provinsi">Provinsi</label>
            <input type="text" id="provinsi" name="provinsi" value="{{ $register->provinsi }}" required>

            <label for="nomor_telepon">Nomor Telepon</label>
            <input type="text" id="nomor_telepon" name="nomor_telepon" value="{{ $register->nomor_telepon }}" required>

            <label for="email">Email</label>
            <input type="text" id="email" name="email" value="{{ $register->email }}" required>

            <label for="kewarganegaraan">Kewarganegaraan</label>
            <input type="text" id="kewarganegaraan" name="kewarganegaraan" value="{{ $register->kewarganegaraan }}"
                required>

            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="text" id="tanggal_lahir" name="tanggal_lahir" value="{{ $register->tanggal_lahir }}" required>

            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" id="tempat_lahir" name="tempat_lahir" value="{{ $register->tempat_lahir }}" required>

            <label for="kabupaten_lahir">Kabupaten Lahir</label>
            <input type="text" id="kabupaten_lahir" name="kabupaten_lahir" value="{{ $register->kabupaten_lahir }}"
                required>

            <label for="provinsi_lahir">Provinsi Lahir</label>
            <input type="text" id="provinsi_lahir" name="provinsi_lahir" value="{{ $register->provinsi_lahir }}"
                required>

            <label for="jenis_kelamin">Jenis Kelamin</label>
            <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{ $register->jenis_kelamin }}" required>

            <label for="status_nikah">Status Nikah</label>
            <input type="text" id="status_nikah" name="status_nikah" value="{{ $register->status_nikah }}" required>

            <label for="agama">Agama</label>
            <input type="text" id="agama" name="agama" value="{{ $register->agama }}" required>

        </form>
        @endif
    </main>
</body>

</html>