<?php

use Egulias\EmailValidator\Parser\CommentStrategy\CommentStrategy;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/template', function () {
//     return view('template_engine', ["posts" => "2"]);
// });

// Route::get('blade-sample', function () {
//     return View('blade-sample');
// });

// Menampilkan data 1
Route::get('/mahasiswa', function () {
    $nama = 'John Paijo Simatupang';
    $nilai = 75;
    return view('mahasiswa', compact('nama', 'nilai'));
});

//Menampilkan data 2
// Route::get('/mahasiswa', function () {
//     $nama = '<u> Elon Musk Batubara </u>';
//     $nilai = 75;
//     return view('mahasiswa', compact('nama', 'nilai'));
// });

// Kondisi If Else
// Route::get('/mahasiswa', function () {
//     $nama = ' Elon Musk Batubara';
//     $nilai = 75;
//     return view('mahasiswa', compact('nama', 'nilai'));
// });

// Perulangan foreach 
// Route::get('/mahasiswa', function () {
//     $nama = 'Vladimir Putin Harahap';
//     $nilai = [];
//     return view('mahasiswa', compact('nama', 'nilai'));
// });

// Perintah Continue dan Break
// Route::get('/mahasiswa', function () {
//     $nama = 'Tya Kiran Putri';
//     $nilai = [80, 64, 30, 76, 95];
//     return view('mahasiswa', compact('nama', 'nilai'));
// });
