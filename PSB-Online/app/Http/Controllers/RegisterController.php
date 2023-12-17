<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Kabupaten;
use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //tampilkan list registrasi di halaman admin
    public function index()
    {
        $register = Registration::paginate(5);

        return view("regist-list", ["register" => $register]);
    }

    //tampilkan detail registrasi di halaman admin
    public function registDetail($id)
    {
        $register = Registration::find($id);

        $provinces = Provinsi::orderBy('name')->get();
        $districts = Kabupaten::orderBy('name')->get();

        if (!$register) {
            return redirect('regist')->with('error', 'Registration ID not found.');
        }

        return view('regist-update', [
            'register' => $register,
            'provinces' => $provinces,
            'districts' => $districts]);
    }

    //menu update registrasi di halaman admin
    public function registUpdate(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required|string',
            'alamat_ktp' => 'required|string',
            'alamat_saat_ini' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'nomor_telepon' => 'required|digits:13',
            'email' => 'required|email',
            'kewarganegaraan' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string',
            'kabupaten_lahir' => 'required|string',
            'provinsi_lahir' => 'required|string',
            'jenis_kelamin' => 'required',
            'status_nikah' => 'required',
            'agama' => 'required',
        ]);

        $register = Registration::find($id);

        if (!$register) {
            return redirect('regist')->with('error', 'Register ID not found.');
        }

        $register->update($request->all());

        return redirect('regist')->with('success', 'Data Berhasil Di Update !!');
    }

    //menu hapus registrasi di halaman admin
    public function registDestroy($id)
    {
        $register = Registration::find($id);

        if (!$register) {
            return redirect('regist')->with('error', 'Register ID not found.');
        }

        $register->delete();

        return redirect('regist')->with('success', 'Register deleted successfully!');
    }

    //----------------------------------------------------------------------------------------------------------------------------
    //tampilkan halaman registrasi di halaman user
    public function indexAdd()
    {
        $provinces = Provinsi::orderBy('name')->get();
        $districts = Kabupaten::orderBy('name')->get();

        return view("regist-create", compact('provinces', 'districts'));
    }

    //tambahkan registrasi di halaman user
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string',
            'alamat_ktp' => 'required|string',
            'alamat_saat_ini' => 'required|string',
            'kecamatan' => 'required|string',
            'kabupaten' => 'required|string',
            'provinsi' => 'required|string',
            'nomor_telepon' => 'required|digits:13',
            'email' => 'required|email',
            'kewarganegaraan' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'tempat_lahir' => 'required|string',
            'kabupaten_lahir' => 'required|string',
            'provinsi_lahir' => 'required|string',
            'jenis_kelamin' => 'required',
            'status_nikah' => 'required',
            'agama' => 'required',
        ]);

        $userId = Auth::id();

        $registrationData = array_merge($request->all(), ['users_id' => $userId]);
        Registration::create($registrationData);

        return redirect('addRegist')->with('success', 'Registration data saved successfully.');
    }

    //tampilkan list registrasi di halaman user
    public function show()
    {
        $userId = Auth::id();

        $registrations = Registration::where('users_id', $userId)->paginate(5);

        return view('regist-user-list', ['registrations' => $registrations]);
    }

    public function showDetail($id)
    {
        $register = Registration::find($id);

        $provinces = Provinsi::orderBy('name')->get();
        $districts = Kabupaten::orderBy('name')->get();

        if (!$register) {
            return redirect('regist')->with('error', 'Registration ID not found.');
        }

        return view('regist-user-detail', [
            'register' => $register,
            'provinces' => $provinces,
            'districts' => $districts
        ]);
    }

    public function print($id)
    {
        $register = Registration::find($id);
        $pdf = Pdf::loadView('registprint', ['register' => $register]);
        return $pdf->download('Bukti_Registrasi.pdf');
    }
    
}
