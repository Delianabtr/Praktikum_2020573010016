<?php

// use App\Http\Controllers\DosenController;

use illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswacontroller;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/mahasiswa', [mahasiswaController::class, 'index']);

// Route::get('mahasiswa', function () {
//     $arrMahasiswa = [
//         "Luhut Panjaitan", "Jokowi", "Vladimir Putin",
//         "Lisa Permata"
//     ];
//     return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
// });

// Route::get('dosen', function () {
//     $arrDosen = [
//         "Maya Fitrianti, M.M", "Prof. Silvia Nst, M.Kom.",
//         "Dr. Umar Agustinus", "Dr. Syahrial, M.Kom"
//     ];
//     return view('dosen')->with('dosen', $arrDosen);
// });

// Route::get('gallery', function () {
//     return view('gallery');
// });

// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PageController;

// Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
// Route::get('/mahasiswa', [App\Http\Controllers\PageController::class, 'tampil']);
