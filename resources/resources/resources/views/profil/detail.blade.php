@extends('layouts.app')

@section('title', 'Detail Profil')

@section('content')
    <a href="{{ route('home.index') }}"
       class="text-blue-600 hover:underline mb-4 inline-block">
        ← Kembali ke Home
    </a>
    <h2 class="text-2xl font-bold mb-4">Detail Profil</h2>

    <div class="bg-white p-6 rounded shadow">
        <p>NIM Mahasiswa: {{ $nim }}</p>

        <a href="{{ route('profil.index') }}"
           class="text-blue-600 hover:underline">
            ← Kembali
        </a>
    </div>
@endsection