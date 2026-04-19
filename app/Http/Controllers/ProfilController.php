<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $nama = "Tiapermata";
        $nim = "4124045";
        $prodi = "Sistem Informasi";
        $semester = "4";

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