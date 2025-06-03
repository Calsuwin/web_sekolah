<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EkstrakurikulerController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\SiswaController;

Route::view('/', 'Beranda')->name('beranda');
Route::view('/profil', 'Profil')->name('profil');

// Ganti route berikut agar ambil data dari controller
Route::get('/ekstrakurikuler', [EkstrakurikulerController::class, 'index'])->name('ekstrakurikuler');
Route::get('/guru', [GuruController::class, 'index'])->name('guru');
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');