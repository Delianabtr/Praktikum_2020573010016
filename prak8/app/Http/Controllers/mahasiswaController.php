<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class mahasiswaController extends Controller
{
    public function first()
    {
        $mahasiswas = Mahasiswa::Where('nim', '20205730')->first();
        dump($mahasiswas);
        // return view('tampil_mahasiswa', ['mahasiswa' => $mahasiswas]);
    }
}
    // $mahasiswa1 = Mahasiswa::create(
    //     [
    //         'nim' => '20205730',
    //         'nama_lengkap' => 'Deliana',
    //         'tanggal_lahir' => '2001-12-20',
    //         'tempat_lahir' => 'Lhokseumawe',
    //         'alamat' => 'Lhokseumawe',
    //         'fakultas' => 'Politeknik negeri lhokseumawe',
    //         'jurusan' => 'TIK',
    //     ]
    // );
    // dump($mahasiswa1);

    // $mahasiswa2 = Mahasiswa::create(
    //     [
    //         'nim' => '20205730',
    //         'nama_lengkap' => 'liana',
    //         'tanggal_lahir' => '2002-10-10',
    //         'tempat_lahir'  => 'Lhokseumawe',
    //         'alamat'    => 'Lhokseumawe',
    //         'fakultas'  => 'Politeknik negeri lhokseumawe',
    //         'jurusan'   => 'TIK',
    //     ]
    // );
    // dump($mahasiswa2);

    // $mahasiswa3 = Mahasiswa::create(
    //     [
    //         'nim' => '20205730',
    //         'nama_lengkap' => 'ana',
    //         'tanggal_lahir' => '2003-09-19',
    //         'tempat_lahir'  => 'Lhokseumawe',
    //         'alamat'    => 'Lhokseumawe',
    //         'fakultas'  => 'Politeknik negeri lhokseumawe',
    //         'jurusan'   => 'TIK',
    //     ]
    // );
    //     dump($mahasiswa);
    // }
// }
