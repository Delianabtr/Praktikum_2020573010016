<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MahasiswaController;

Route::get('/mahasiswa', [MahasiswaController::class, 'mahasiswa'])->name('mahasiswa');
Route::get('/dosen', [MahasiswaController::class, 'dosen'])->name('dosen');
Route::get('/gallery', [MahasiswaController::class, 'gallery'])->name('gallery');
Route::get('/informasi/{fakultas}/{jurusan}', [MahasiswaController::class, 'informasi'])->name('info');