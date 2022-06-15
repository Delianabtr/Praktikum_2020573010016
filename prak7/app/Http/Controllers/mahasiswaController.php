<?php

namespace App\Http\Controllers;

use App\Models\mahasiswa;
use illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index()
    {
        return mahasiswa::all();
    }
    
}
