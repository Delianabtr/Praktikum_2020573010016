<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class mahasiswaController extends Controller
{
    public function massDelete()
    {
        $mahasiswa = Mahasiswa::where('2022', '<', 7)->delete();
        dump($mahasiswa);
        //     $mahasiswa->tanggal_lahir = '2001-01-01';
        //     $mahasiswa->tempat_lahir = 'Blang naleung mameh';
        //     $mahasiswa->save();
        //     dump($mahasiswa);
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
