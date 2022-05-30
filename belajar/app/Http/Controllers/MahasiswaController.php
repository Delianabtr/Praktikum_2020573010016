<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function mahasiswa()
    {
        $arrMahasiswa = ["Megawati", "Luhut Panjaitan", "Susilo Bambang Kusumo", "Probowo Subianto"];
        return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
    }

    public function dosen()
    {
        $arrDosen = ["Megawati M.M", "Prof. Luhut Panjaitan", "Dr. Susilo Bambang Kusumo", "Dr. Prabowo Subianto, M.Kom"];
        return view('dosen')->with('dosen', $arrDosen);
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function informasi($jurusan, $prodi)
    {
        $data = [$jurusan, $prodi];
        return view('informasi')->with('data', $data);
    }
}