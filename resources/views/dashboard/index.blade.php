@extends('layouts.app')

@section('content')
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Dashboard Bank Sampah
        </h1>

        <p class="text-gray-500 mt-2">
            Selamat datang di sistem informasi bank sampah
        </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-gray-500 text-sm">Total Nasabah</h2>
            <p class="text-3xl font-bold mt-3 text-green-600">120</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-gray-500 text-sm">Total Saldo</h2>
            <p class="text-3xl font-bold mt-3 text-blue-600">Rp 12 Jt</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-gray-500 text-sm">Total Setoran</h2>
            <p class="text-3xl font-bold mt-3 text-yellow-500">Rp 5 Jt</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-gray-500 text-sm">Penarikan</h2>
            <p class="text-3xl font-bold mt-3 text-red-500">Rp 2 Jt</p>
        </div>
    </div>
@endsection