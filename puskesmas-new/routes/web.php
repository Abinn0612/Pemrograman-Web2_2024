<?php

use Illuminate\Support\Facades\Route;

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