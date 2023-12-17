<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //tampilkan list user di halaman admin
    public function index()
    {
        $users = User::all();

        $generaluser = User::where('role_id', '2')->paginate(5);

        return view("user-list", ["users" => $generaluser]);
    }

    //tampilkan add user di halaman admin
    public function indexAdd()
    {
        return view("user-add");
    }

    //fungsi simpan user di halaman admin
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role_id' => 'required|integer',
        ]);

        // Simpan data user baru
        User::create([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'role_id' => $request->input('role_id'),
        ]);

        return redirect('addUser')->with('success', 'Data Berhasil Ditambahkan !!');
    }

    //fungsi detail user di halaman admin
    public function show($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('user')->with('error', 'User not found.');
        }

        return view('user-update', ['user' => $user]);
    }

    //fungsi edit user di halaman admin
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'role_id' => 'required|integer',
        ]);

        $user = User::find($id);

        if (!$user) {
            return redirect('user')->with('error', 'User not found.');
        }

        $user->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'role_id' => $request->input('role_id'),
        ]);

        return redirect('user')->with('success', 'User data updated successfully!');
    }

    //fungsi delete user di halaman admin
    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect('user')->with('error', 'User not found.');
        }

        $user->delete();

        return redirect('user')->with('success', 'User deleted successfully!');
    }

    //----------------------------------------------------------------------------------------------------------------------------
    //fungsi detail user di halaman user
    public function showUser()
    {
        $user = Auth::user();

        return view('user-profile', ['profile' => $user]);
    }

    public function updateUser(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'oldpass' => 'required|string|min:8',
            'newpass' => 'nullable|string|min:8',
        ]);

        // Check if the entered old password matches the user's current password
        if (!Hash::check($request->input('oldpass'), $user->password)) {
            return redirect('profile')->with('error', 'Incorrect old password');
        }

        // Update user details
        $user->update([
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'password' => $request->input('newpass') ? bcrypt($request->input('newpass')) : $user->password,
        ]);

        return redirect('profile')->with('success', 'Profile updated successfully');
    }
}
