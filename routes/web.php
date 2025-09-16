<?php

use App\Http\Controllers\EskulController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\ProfilController;

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri');
Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');
Route::get('/eskul', [EskulController::class, 'index'])->name('eskul');
Route::prefix('profil')->name('profil.')->group(function () {
    Route::get('/', [ProfilController::class, 'index'])->name('index');
    Route::get('/sejarah', [ProfilController::class, 'sejarah'])->name('sejarah');
    Route::get('/visi-misi', [ProfilController::class, 'visiMisi'])->name('visi-misi');
    Route::get('/data-pokok', [ProfilController::class, 'dataPokok'])->name('data-pokok');
    Route::get('/data-statistik', [ProfilController::class, 'dataStatistik'])->name('data-statistik');
});
