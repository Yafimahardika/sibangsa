<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Dio Ananda";
        $nim = "4123031";
        $prodi = "Sistem Informasi";
        $semester = "6";

        $keahlian = [
            "PHP",
            "Laravel",
            "Database",
            "Networking"
        ];

        return view('profil',
        [
         'nama' => $nama,
            'nim' => $nim,
            'prodi' => $prodi,
            'semester' => $semester,
            'keahlian' => $keahlian
        ]);
    }

  public function show($nim)
{
    return view('profil.detail', [
        'nim' => $nim
    ]);
}
}