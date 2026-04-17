@extends('layouts.app')

@section('title', 'Detail Produk')

@section('content')
    <a href="{{ route('home.index') }}"
       class="text-blue-600 hover:underline mb-4 inline-block">
        ← Kembali ke Home
    </a>
    <h2 class="text-2xl font-bold mb-4">Detail Produk</h2>

    <div class="bg-white p-6 rounded shadow">
        <p class="mb-2"><strong>Nama Produk:</strong> {{ $data['nama'] }}</p>
        <p class="mb-4"><strong>Harga:</strong> Rp {{ number_format($data['harga']) }}</p>

        <a href="{{ route('katalog.index') }}"
           class="text-blue-600 hover:underline">
            ← Kembali ke Katalog
        </a>
    </div>
@endsection