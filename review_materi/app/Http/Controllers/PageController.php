<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function index()
    {
        return "Halaman Home";
    }
    public function tampil()
    {
        return "Data Mahasiswa";
    }
    public function cobaFacade()
    {
        echo Str::snake('SedangBerpuasaDiBulanRamadhan');
        echo "<br>";
        echo Str::kebab('SedangSahurSeorangDiri');
    }
}
