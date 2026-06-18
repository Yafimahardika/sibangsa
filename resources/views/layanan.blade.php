@extends('layouts.public')

@section('content')
    <section class="bg-gradient-to-br from-green-800 via-green-600 to-lime-500 text-white py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-8">
                Layanan Bank Sampah
            </h1>
            <p class="text-lg md:text-xl text-green-100 max-w-3xl mx-auto">
                Sistem layanan digital modern untuk membantu pengelolaan sampah masyarakat secara efisien dan terorganisir.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        {{-- BUTTON --}}
        <a href="/"
            class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow transition mb-8">
            ← Kembali ke Home
        </a>
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                {{-- LAYANAN 1 --}}
                <div
                    class="bg-gray-100 p-10 rounded-3xl shadow hover:-translate-y-3 hover:shadow-2xl transition duration-300">
                    <div class="text-6xl mb-6">
                        ♻️
                    </div>

                    <h2 class="text-3xl font-bold text-green-700 mb-5">
                        Setoran Sampah
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Nasabah dapat menyetorkan berbagai jenis sampah yang telah dipilah sesuai kategori.
                    </p>
                </div>



                {{-- LAYANAN 2 --}}
                <div
                    class="bg-gray-100 p-10 rounded-3xl shadow hover:-translate-y-3 hover:shadow-2xl transition duration-300">
                    <div class="text-6xl mb-6">
                        💰
                    </div>
                    <h2 class="text-3xl font-bold text-green-700 mb-5">
                        Penarikan Saldo
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Saldo hasil tabungan sampah dapat ditarik dengan sistem transaksi yang aman dan cepat.
                    </p>
                </div>



                {{-- LAYANAN 3 --}}
                <div
                    class="bg-gray-100 p-10 rounded-3xl shadow hover:-translate-y-3 hover:shadow-2xl transition duration-300">
                    <div class="text-6xl mb-6">
                        📊
                    </div>
                    <h2 class="text-3xl font-bold text-green-700 mb-5">
                        Dashboard Statistik
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Monitoring data transaksi, saldo nasabah, dan laporan bank sampah secara realtime.
                    </p>
                </div>



                {{-- LAYANAN 4 --}}
                <div
                    class="bg-gray-100 p-10 rounded-3xl shadow hover:-translate-y-3 hover:shadow-2xl transition duration-300">
                    <div class="text-6xl mb-6">
                        🧾
                    </div>
                    <h2 class="text-3xl font-bold text-green-700 mb-5">
                        Riwayat Transaksi
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Sistem menyediakan histori transaksi setoran dan penarikan saldo secara lengkap.
                    </p>
                </div>



                {{-- LAYANAN 5 --}}
                <div
                    class="bg-gray-100 p-10 rounded-3xl shadow hover:-translate-y-3 hover:shadow-2xl transition duration-300">
                    <div class="text-6xl mb-6">
                        👥
                    </div>
                    <h2 class="text-3xl font-bold text-green-700 mb-5">
                        Manajemen Nasabah
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Pengelolaan data nasabah digital untuk mempermudah administrasi bank sampah.
                    </p>
                </div>



                {{-- LAYANAN 6 --}}
                <div
                    class="bg-gray-100 p-10 rounded-3xl shadow hover:-translate-y-3 hover:shadow-2xl transition duration-300">
                    <div class="text-6xl mb-6">
                        🌱
                    </div>
                    <h2 class="text-3xl font-bold text-green-700 mb-5">
                        Edukasi Lingkungan
                    </h2>
                    <p class="text-gray-600 text-lg leading-relaxed">
                        Memberikan edukasi kepada masyarakat mengenai pentingnya pengelolaan sampah dan daur ulang.
                    </p>
                </div>
            </div>
        </div>

    </section>
@endsection
