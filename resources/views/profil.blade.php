@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <a href="{{ route('home.index') }}"
       class="text-blue-600 hover:underline mb-4 inline-block">
        ← Kembali ke Home
    </a>
    <h2 class="text-2xl font-bold mb-4">Profil Mahasiswa</h2>

    <div class="bg-white p-6 rounded shadow">
        <p><strong>Nama:</strong> {{ $nama }}</p>
        <p><strong>NIM:</strong> {{ $nim }}</p>
        <p><strong>Prodi:</strong> {{ $prodi }}</p>
        <p><strong>Semester:</strong> {{ $semester }}</p>

        <h3 class="font-semibold mt-4">Keahlian</h3>
        <ul class="list-disc ml-6">
            @foreach ($keahlian as $k)
                <li>{{ $k }}</li>
            @endforeach
        </ul>

        <a href="{{ route('profil.show', $nim) }}"
           class="inline-block mt-4 text-blue-600 hover:underline">
            Lihat Detail Profil
        </a>
    </div>
@endsection