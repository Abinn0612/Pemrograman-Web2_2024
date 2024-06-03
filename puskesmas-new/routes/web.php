<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/Salam', function () {
    return "Selamat Belajar Tabin, di Framework Laravel";
});

Route::get('/beranda', function () {
    return "Halaman Beranda";
});

Route::get('/profil', function () {
    return "Halaman Profil";
});

// Praktikum Laravel 2
Route::get('/admin2', [Admincontroller::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);


// Praktikum Laravel 3
Route::get('/admin2/pasien', [PasienController::class, 'index']);

// Latihan Kelurahan
Route::get('/admin2/kelurahan', [KelurahanController::class, 'index']);

// Praktikum Laravel 4
Route::get('/admin2/kelurahan/create', [KelurahanController::class, 'create']);
Route::post('/admin2/kelurahan/store', [KelurahanController::class, 'store']);
Route::get('/admin2/kelurahan/show/{id}', [KelurahanController::class, 'show']);

// Tugas Laravel 4
Route::get('/admin2/pasien/create', [PasienController::class, 'create']);
Route::post('/admin2/pasien/store', [PasienController::class, 'store']);
Route::get('/admin2/pasien/show/{id}', [PasienController::class, 'show']);
