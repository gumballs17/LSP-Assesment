<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExportController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'authenticate']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register', [AuthController::class, 'authRegister']);

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);

    Route::middleware('only_admin')->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::get('user', [UserController::class, 'index']);
        Route::get('addUser', [UserController::class, 'indexAdd']);
        Route::post('createUser', [UserController::class, 'store']);
        Route::get('user/{id}', [UserController::class, 'show'])->name('user.show');
        Route::put('user/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('user/{id}', [UserController::class, 'destroy'])->name('user.destroy');

        Route::get('regist', [RegisterController::class, 'index']);
        Route::get('regist/{id}', [RegisterController::class, 'registDetail'])->name('register.show');
        Route::put('regist/{id}', [RegisterController::class, 'registUpdate'])->name('register.update');
        Route::delete('regist/{id}', [RegisterController::class, 'registDestroy'])->name('register.destroy');

        Route::get('export', [ExportController::class, 'export'])->name('export');
    });

    Route::middleware('only_user')->group(function () {
        Route::get('addRegist', [RegisterController::class, 'indexAdd']);
        Route::post('registration', [RegisterController::class, 'store']);
        Route::get('view', [RegisterController::class,'show']);
        Route::get('view/{id}', [RegisterController::class,'showDetail'])->name('register.detail');
        Route::get('print/{id}', [RegisterController::class, 'print'])->name('print');

        Route::get('profile', [UserController::class, 'showUser']);
        Route::put('profile', [UserController::class, 'updateUser'])->name('profile.update');
    });
});