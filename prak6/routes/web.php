<?php

use App\Http\Controllers\DosenController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/mahasiswa', [App\Http\Controllers\PageController::class, 'tampil']);
