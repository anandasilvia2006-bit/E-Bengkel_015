<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\KendaraanController;


// Route untuk menampilkan halaman utama (Daftar Servis)
Route::resource('kendaraan', KendaraanController::class);