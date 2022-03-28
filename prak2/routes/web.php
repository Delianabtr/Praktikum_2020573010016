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

// Route::get('/home', function () {
//     return view('halaman_home');
// });
// Route::get('/mahasiswa', function () {
//     return view('mahasiswa');
// });
// Route::get('/mahasiswa', function () {
//     return view('kampus.mahasiswa', ["mahasiswa01" => "Maulana Sultansyah"]);
// });

Route::get('/mahasiswa', function () {
    $arrMahasiswa = ['Syadzwina Sahara', "Deliana Putri"];
    return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
});
/*

Route::get('/home', function () {
    return view('halaman_home');
});

Route::get('/mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa', ["mahasiswa01"=>"Maulana Sultansyah"]);
});


Route::get('/mahasiswa', function () {
    return view('kampus.mahasiswa', 
    [
        "mahasiswa01"=>"Maulana Sultansyah",
        "mahasiswa02"=>"Selvi Ismaturrahmi",
        "mahasiswa03"=>"Suci Sahara"
    ]);
});

*/



/*

Route::get('/profile', function () {
    return view('profile',
    ['title' => "Profile"]);
});


Route::get('/home', function () {
    return view('home',
    ['title' => "Home"]);
});


Route::get('/about', function () {
    return view('about',

    ['title' => "About"]);

});

*/


/*

Route::get('mahasiswa/andi', function ()
{
    echo "Halaman mahasiswa andi";
});



// Membuat Route

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function ()
{
    return 'Hello World';
});

Route::get('/belajar', function ()
{
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar Laravel</p>';
});

Route::get('/mahasiswa/fasilkom/coba', function ()
{
    echo '<h2 style="text-align: center"><u>Welcome</u></h2>';
});



// Route Parameter

Route::get('/mahasiswa/{nama}', function ($nama)
{
    return "Tampilkan data mahasiswa bernama $nama";
});



// Route Parameter dg 2 parameter

Route::get('/stok_barang/{jenis}/{merek}', function ($jenis,$merek)
{
    return "Cek sisa stok untuk $jenis $merek";
});

// atau

Route::get('/stok_barang/{jenis}/{merek}', function ($a,$b)
{
    echo "Cek sisa stok untuk $a $b";
});



// Route dengan Optional Parameter

Route::get('/stok_barang/{jenis?}/{merek?}', function ($a='Lampu',$b='Philips')
{
    return "Cek sisa stok untuk $a $b";
});



// Route Parameter dengan Regular Expression

Route::get('/user/{id}', function ($id)
{
    return "Tampilkan user dengan id = $id";
});

// atau

Route::get('/user/{id}', function ($id)
{
    return "Tampilkan user dengan id = $id";
})->where('id', '[0-9]+');

// atau

Route::get('/user/{id}', function ($id)
{
    return "Tampilkan user dengan id = $id";
})->where('id', '[A-Z]{2}[0-9]+');



// Route Redirect

Route::get('/hubungi-kami', function ()
{
    return "<h1>Hubungi Kami</h1>";
});

Route::redirect('/contact-us', '/hubungi-kami');




// Route Group

Route::get('/admin/mahasiswa', function ()
{
    return "<h1>Daftar Mahasiswa</h1>";
});

Route::get('/admin/dosen', function ()
{
    return "<h1>Daftar Dosen</h1>";
});

Route::get('/admin/karyawan', function ()
{
    return "<h1>Daftar Karyawan</h1>";
});

// atau

Route::prefix('/admin')->group(function ()
{
    Route::get('/mahasiswa', function ()
    {
    echo "<h1>Daftar Mahasiswa</h1>";
    });
    Route::get('/dosen', function ()
    {
    echo "<h1>Daftar Dosen</h1>";
    });
    Route::get('/karyawan', function ()
    {
    echo "<h1>Daftar Karyawan</h1>";
    });
});




// Route Fallback

Route::fallback(function ()
{
    echo "Maaf, alamat tidak ditemukan";
});



// Route Priority

Route::get('/buku/1', function ()
{
    return "Buku ke-1";
});
Route::get('/buku/1', function ()
{
    return "Buku saya ke-1";
});
Route::get('/buku/1', function ()
{
    return "Buku kita ke-1";
});

// atau

Route::get('/buku/{a}', function ($a)
{
    return "Buku ke-$a";
});
Route::get('/buku/{b}', function ($b)
{
    return "Buku saya ke-$b";
});
Route::get('/buku/{c}', function ($c)
{
    return "Buku kita ke-$c";
});


Route::get('mahasiswa/andi', function ()
{
    echo "Halaman mahasiswa andi";
});

// sama dengan 

Route::get('/mahasiswa/andi', function ()
{
    echo "Halaman mahasiswa andi";
});


*/