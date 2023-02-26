<?php

use Illuminate\Support\Facades\Route;

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
// Login and Signup Routes
Route::get('/', function () {
    return view('login', [
        "title" => "Login",

    ]);
});
Route::get('/signup', function () {
    return view('signup', [
        "title" => "Signup",

    ]);
});

// Admin Routes
Route::get('/dash-adm', function () {
    return view('admin.dashboard', [
        "title" => "Dashboard",

    ]);
});
Route::get('/acc-adm', function () {
    return view('admin.accounts', [
        "title" => "Daftar Akun",

    ]);
});
Route::get('/valid-adm', function () {
    return view('admin.valid', [
        "title" => "Validasi Akun",

    ]);
});
Route::get('/pgd-adm', function () {
    return view('admin.pengaduan', [
        "title" => "Pengaduan",

    ]);
});
Route::get('/dtl-pgd-adm', function () {
    return view('admin.dtl-pengaduan', [
        "title" => "Pengaduan",

    ]);
});
Route::get('/user-adm', function () {
    return view('admin.user', [
        "title" => "Profil",

    ]);
});

// Petugas Routes
Route::get('/dash-ptg', function () {
    return view('petugas.dashboard', [
        "title" => "Dashboard",

    ]);
});
Route::get('/pgd-ptg', function () {
    return view('petugas.pengaduan', [
        "title" => "Pengaduan",

    ]);
});
Route::get('/dtl-pgd-ptg', function () {
    return view('petugas.dtl-pengaduan', [
        "title" => "Pengaduan",

    ]);
});
Route::get('/user-ptg', function () {
    return view('petugas.user', [
        "title" => "Profil",

    ]);
});

// User Routes
Route::get('/dash-user', function () {
    return view('user.dashboard', [
        "title" => "Dashboard",

    ]);
});
Route::get('/pgd-user', function () {
    return view('user.pengaduan', [
        "title" => "Pengaduan",

    ]);
});
Route::get('/dtl-pgd-user', function () {
    return view('user.dtl-pengaduan', [
        "title" => "Pengaduan",

    ]);
});
Route::get('/user-user', function () {
    return view('user.user', [
        "title" => "Profil",

    ]);
});
