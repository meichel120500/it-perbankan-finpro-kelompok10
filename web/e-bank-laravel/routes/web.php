<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SaldoController;
use App\Http\Controllers\AccountController;

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

Route::get('/', [LoginController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('sign-up', [LoginController::class, 'sign_up'])->name('sign_up');
Route::post('submit-sign-up', [LoginController::class, 'submit_sign_up'])->name('submit_sign_up');
Route::post('submit-login', [LoginController::class, 'submit_login'])->name('submit_login');

Route::get('logout', [LogoutController::class, 'index'])->name('logout');

Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('saldo', [SaldoController::class, 'index'])->name('saldo');

Route::get('profil', [AccountController::class, 'index'])->name('profil');
Route::post('simpan-profil', [AccountController::class, 'save_profile'])->name('simpan_profil');
Route::get('security-account', [AccountController::class, 'security_account'])->name('security_account');
Route::post('ganti-password', [AccountController::class, 'ganti_password'])->name('ganti_password');


