<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    //
    public function login()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            if (Auth::user()->role_id == 1) {
                return redirect('dashboard');
            }
            if (Auth::user()->role_id == 2) {
                return redirect('view');
            }
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Please cek email & password !');
        return redirect('login');
    }

    public function authRegister(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
            'email' => 'required|unique:users|max:255',
            'password' => 'required|string|min:6',
        ]);

        if ($request->password != $request->confirmPass) {
            return redirect()->back()->withInput()->withErrors(['confirmPassword' => 'confirm password does not same']);
        }

        $user = User::create($request->all());
        Session::flash('status', 'success');
        Session::flash('message', 'Register successfully');
        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
