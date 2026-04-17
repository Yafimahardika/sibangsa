@extends('layouts.app')

@section('title', 'Halaman Produk')

@section('content')
    <a href="{{ route('home.index') }}"
       class="text-blue-600 hover:underline mb-4 inline-block">
        ← Kembali ke Home
    </a>
    <h2 class="text-2xl font-bold mb-4">Daftar Produk</h2>

    <div class="grid grid-cols-3 gap-4">
        <div class="border p-4 rounded shadow">
            <h3 class="font-semibold">Produk A</h3>
            <p>Rp 10.000</p>
        </div>

        <div class="border p-4 rounded shadow">
            <h3 class="font-semibold">Produk B</h3>
            <p>Rp 20.000</p>
        </div>
    </div>
@endsection