@extends('layouts.app')

@section('title', 'About')

@section('content')
    <a href="{{ route('home.index') }}"
       class="text-blue-600 hover:underline mb-4 inline-block">
        ← Kembali ke Home
    </a>
    <h1 class="text-2xl font-bold mb-2">Halaman About</h1>
    <p>Halaman ini berisi informasi tentang website.</p>
@endsection