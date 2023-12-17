<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Registration;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        $totalUsers = User::count();
        $totalRegistrations = Registration::count();
        $totalKabupaten = Kabupaten::count();
        
        return view("dashboard", [
            'totalUsers' => $totalUsers,
            'totalRegistrations' => $totalRegistrations,
            'totalKabupaten'=> $totalKabupaten
        ]);
    }

}
