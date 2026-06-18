@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')
    <a href="{{ route('home.index') }}"
       class="text-blue-600 hover:underline mb-4 inline-block">
        ← Kembali ke Home
    </a>
    <h2 class="text-2xl font-bold mb-4">Daftar Produk</h2>

    <table class="w-full bg-white rounded shadow">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-3 text-left">ID</th>
                <th class="p-3 text-left">Nama</th>
                <th class="p-3 text-left">Harga</th>
                <th class="p-3 text-left">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $p)
                <tr class="border-t">
                    <td class="p-3">{{ $p['id'] }}</td>
                    <td class="p-3">{{ $p['nama'] }}</td>
                    <td class="p-3">Rp {{ number_format($p['harga']) }}</td>
                    <td class="p-3">
                        <a href="{{ route('katalog.show', $p['id']) }}"
                           class="text-blue-600 hover:underline">
                            Detail
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection