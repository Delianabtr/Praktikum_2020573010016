<?php

// use App\Http\Controllers\DosenController;

use illuminate\Support\Facades\Route;
use App\Http\Controllers\mahasiswacontroller;

Route::get('/cek-object', [mahasiswacontroller::class, 'cekObject']);

Route::get('/insert',   [mahasiswacontroller::class, 'insert']);
Route::get('/mass-assignment',  [mahasiswacontroller::class, 'massAssigment']);
Route::get('/mass-assignment2',  [mahasiswacontroller::class, 'massAssigment2']);

Route::get('/update',   [mahasiswacontroller::class, 'update']);
Route::get('/update-where',   [mahasiswacontroller::class, 'updateWhere']);
Route::get('/mass-update',   [mahasiswacontroller::class, 'massUpdate']);

Route::get('/delete',   [mahasiswacontroller::class, 'delete']);
Route::get('/destroy',   [mahasiswacontroller::class, 'destroy']);
Route::get('/mass-delete',   [mahasiswacontroller::class, 'massDelete']);

Route::get('/all',   [mahasiswacontroller::class, 'all']);
Route::get('/all-view',   [mahasiswacontroller::class, 'allView']);
Route::get('/get-where',   [mahasiswacontroller::class, 'getWhere']);
Route::get('/test-where',   [mahasiswacontroller::class, 'testWhere']);
Route::get('/first',   [mahasiswacontroller::class, 'first']);
Route::get('/find',   [mahasiswacontroller::class, 'find']);
Route::get('/latest',   [mahasiswacontroller::class, 'latest']);
Route::get('/limit',   [mahasiswacontroller::class, 'limit']);
Route::get('/skip-take',   [mahasiswacontroller::class, 'skipTake']);

Route::get('/soft-delete',   [mahasiswacontroller::class, 'softDelete']);
Route::get('/with-trashed',   [mahasiswacontroller::class, 'withTrashed']);
Route::get('/restore',   [mahasiswacontroller::class, 'restore']);

Route::get('/soft-delete',   [mahasiswacontroller::class, 'softDelete']);



// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/mahasiswa', [mahasiswaController::class, 'index']);

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
