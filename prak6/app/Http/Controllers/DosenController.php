<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return ('Ini adalah halaman dosen');
    }
    public function tampil()
    {
        return "Data Dosen";
    }
}
