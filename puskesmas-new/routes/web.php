<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Contactcontroller;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\KelurahanController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/dashboard')->group(function (){
        Route::get('/', [AdminController::class, 'index']);

        Route::prefix('/kelurahan')->group(function () {
        Route::get('/', [KelurahanController::class, 'index']);
        Route::get('/', [KelurahanController::class, 'create']);
        Route::post('/', [KelurahanController::class, 'store']);
        Route::get('/}', [KelurahanController::class, 'show']);
        Route::get('/', [PasienController::class, 'create']);
        Route::post('/', [PasienController::class, 'store']);
        Route::get('/', [PasienController::class, 'show']);
        });

    });
});


require __DIR__.'/auth.php';

// Praktikum Laravel 2
Route::get('/admin2', [Admincontroller::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);


// Praktikum Laravel 3
Route::get('/admin2/pasien', [PasienController::class, 'index']);

// Latihan Kelurahan
Route::get('/admin2/kelurahan', [KelurahanController::class, 'index']);

// // Praktikum Laravel 4
// Route::get('/admin2/kelurahan/create', [KelurahanController::class, 'create']);
// Route::post('/admin2/kelurahan/store', [KelurahanController::class, 'store']);
// Route::get('/admin2/kelurahan/show/{id}', [KelurahanController::class, 'show']);

// Tugas Laravel 4
// Route::get('/admin2/pasien/create', [PasienController::class, 'create']);
// Route::post('/admin2/pasien/store', [PasienController::class, 'store']);
// Route::get('/admin2/pasien/show/{id}', [PasienController::class, 'show']);

// Praktikum Laravel 5
Route::get('/admin2/kelurahan/edit/{id}', [KelurahanController::class, 'edit']);
Route::put('/admin2/kelurahan/update/{id}', [KelurahanController::class, 'update']);
Route::delete('/admin2/kelurahan/destroy/{id}', [KelurahanController::class, 'destroy']);

// Tugas Laravel 5
Route::get('/admin2/pasien/edit/{id}', [PasienController::class, 'edit']);
Route::put('/admin2/pasien/update/{id}', [PasienController::class, 'update']);
Route::delete('/admin2/pasien/destroy/{id}', [PasienController::class, 'destroy']);