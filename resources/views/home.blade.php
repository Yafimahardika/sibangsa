@extends('layouts.public')

@section('content')
    <section class="relative overflow-hidden bg-gradient-to-br from-green-800 via-green-600 to-lime-500 text-white py-28">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white opacity-10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-lime-200 opacity-20 rounded-full blur-3xl"></div>
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl font-bold leading-tight mb-6">
                Kelola Sampah Menjadi
                Tabungan Bernilai
            </h1>
            <p class="text-xl text-green-100 mb-10">
                Sistem informasi bank sampah modern untuk mendukung lingkungan yang lebih bersih dan sehat.
            </p>
            <div class="space-x-4">
                <a href="/register"
                    class="bg-white text-green-700 px-8 py-4 rounded-2xl font-bold shadow-xl hover:scale-105 transition duration-300">
                    Daftar Sekarang
                </a>
                <a href="/login"
                    class="bg-green-700 px-8 py-4 rounded-2xl font-bold shadow-xl hover:scale-105 transition duration-300">
                    Login
                </a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-6">
                <div class="bg-green-50 p-8 rounded-3xl text-center shadow hover:shadow-xl transition">
                    <h2 class="text-4xl font-bold text-green-700">
                        120+
                    </h2>
                    <p class="mt-3 text-gray-600">
                        Nasabah Aktif
                    </p>
                </div>
                <div class="bg-green-50 p-8 rounded-3xl text-center shadow hover:shadow-xl transition">
                    <h2 class="text-4xl font-bold text-green-700">
                        5 Ton
                    </h2>
                    <p class="mt-3 text-gray-600">
                        Sampah Terkelola
                    </p>
                </div>
                <div class="bg-green-50 p-8 rounded-3xl text-center shadow hover:shadow-xl transition">
                    <h2 class="text-4xl font-bold text-green-700">
                        Rp 12 Jt
                    </h2>
                    <p class="mt-3 text-gray-600">
                        Total Saldo
                    </p>
                </div>
                <div class="bg-green-50 p-8 rounded-3xl text-center shadow hover:shadow-xl transition">
                    <h2 class="text-4xl font-bold text-green-700">
                        24/7
                    </h2>
                    <p class="mt-3 text-gray-600">
                        Sistem Digital
                    </p>
                </div>
            </div>
        </div>
        <div class="container mx-auto px-6">
            <div class="text-center mb-14 mt-14">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">
                    Fitur Utama Sistem
                </h2>
                <p class="text-gray-500 max-w-2xl mx-auto">
                    Sistem informasi bank sampah modern untuk mempermudah pengelolaan sampah dan transaksi tabungan nasabah.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-3xl shadow hover:-translate-y-2 transition duration-300">
                    <div class="text-5xl mb-5">
                        ♻️
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-700">
                        Setoran Sampah
                    </h3>
                    <p class="text-gray-600">
                        Nasabah dapat menyetorkan berbagai jenis sampah dan mendapatkan saldo otomatis.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow hover:-translate-y-2 transition duration-300">
                    <div class="text-5xl mb-5">
                        💰
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-700">
                        Penarikan Saldo
                    </h3>
                    <p class="text-gray-600">
                        Saldo hasil setoran dapat ditarik dengan sistem transaksi yang aman.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow hover:-translate-y-2 transition duration-300">
                    <div class="text-5xl mb-5">
                        📊
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-700">
                        Dashboard Statistik
                    </h3>
                    <p class="text-gray-600">
                        Monitoring transaksi, data nasabah, dan laporan bank sampah secara realtime.
                    </p>
                </div>
                <div class="bg-white p-8 rounded-3xl shadow hover:-translate-y-2 transition duration-300">
                    <div class="text-5xl mb-5">
                        🌱
                    </div>
                    <h3 class="text-2xl font-bold mb-4 text-green-700">
                        Lingkungan Bersih
                    </h3>
                    <p class="text-gray-600">
                        Membantu masyarakat menjaga kebersihan lingkungan dengan sistem digital modern.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="container mx-auto px-6 ">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 ">
                <div class="bg-gray-100 p-8 rounded-2xl shadow">
                    <h2 class="text-2xl font-bold mb-4 text-green-700">
                        Setor Sampah
                    </h2>
                    <p class="text-gray-600">
                        Nasabah dapat menyetorkan sampah dan mendapatkan saldo tabungan otomatis.
                    </p>
                </div>
                <div class="bg-gray-100 p-8 rounded-2xl shadow">
                    <h2 class="text-2xl font-bold mb-4 text-green-700">
                        Kelola Saldo
                    </h2>
                    <p class="text-gray-600">
                        Saldo tabungan dapat dipantau dan dikelola dengan mudah.
                    </p>
                </div>
                <div class="bg-gray-100 p-8 rounded-2xl shadow">
                    <h2 class="text-2xl font-bold mb-4 text-green-700">
                        Lingkungan Bersih
                    </h2>
                    <p class="text-gray-600">
                        Membantu menjaga lingkungan tetap bersih dan sehat.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                {{-- GAMBAR --}}
                <div>
                    <div class="bg-green-100 rounded-3xl p-10 shadow-lg">
                        <img src="https://images.unsplash.com/photo-1532996122724-e3c354a0b15b?q=80&w=1200&auto=format&fit=crop"
                            alt="Bank Sampah" class="rounded-2xl shadow-lg">
                    </div>
                </div>
                {{-- TEKS --}}
                <div>
                    <span class="text-4xl text-green-700 font-bold uppercase tracking-widest">
                        Tentang Kami
                    </span>
                    <h2 class="text-4xl font-bold text-gray-800 mt-4 leading-tight">
                        Sistem Informasi
                        Bank Sampah Modern
                    </h2>
                    <p class="text-gray-600 mt-8 text-lg leading-relaxed">
                        Bank Sampah merupakan sistem pengelolaan sampah berbasis digital
                        yang membantu masyarakat dalam mencatat setoran sampah,
                        mengelola saldo tabungan, dan menjaga lingkungan tetap bersih.
                    </p>
                    <p class="text-gray-600 mt-5 text-lg leading-relaxed">
                        Melalui sistem ini, nasabah dapat melakukan transaksi setoran,
                        memantau saldo tabungan, serta memperoleh layanan pengelolaan
                        sampah secara modern dan efisien.
                    </p>
                    <div class="grid grid-cols-2 gap-6 mt-10">
                        <div class="bg-gray-100 p-5 rounded-2xl">
                            <h3 class="text-3xl font-bold text-green-700">
                                100%
                            </h3>
                            <p class="text-gray-600 mt-2">
                                Sistem Digital
                            </p>
                        </div>
                        <div class="bg-gray-100 p-5 rounded-2xl">
                            <h3 class="text-3xl font-bold text-green-700">
                                Eco
                            </h3>
                            <p class="text-gray-600 mt-2">
                                Friendly
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-100">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-4xl text-green-700 font-bold uppercase tracking-widest">
                    Jenis Sampah
                </span>
                <h2 class="text-4xl font-bold text-gray-800 mt-4 leading-tight">
                    Sampah Yang Dapat Disetorkan
                </h2>
                <p class="text-gray-500 mt-6 max-w-3xl mx-auto text-lg">
                    Berbagai jenis sampah dapat dikelola dan ditukarkan menjadi saldo tabungan melalui sistem bank sampah
                    digital.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                {{-- PLASTIK --}}
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-3 transition duration-300">
                    <div class="bg-green-600 text-white text-center py-10 text-6xl">
                        ♻️
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">
                            Plastik
                        </h3>
                        <p class="text-gray-600 mb-5">
                            Botol plastik, gelas plastik, dan kemasan plastik yang dapat didaur ulang.
                        </p>
                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-xl text-sm font-semibold">
                            Rp 5.000 / Kg
                        </span>
                    </div>
                </div>
                {{-- KERTAS --}}
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-3 transition duration-300">
                    <div class="bg-yellow-500 text-white text-center py-10 text-6xl">
                        📄
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">
                            Kertas
                        </h3>
                        <p class="text-gray-600 mb-5">
                            Koran bekas, kardus, dan berbagai jenis kertas yang dapat diproses kembali.
                        </p>
                        <span class="bg-yellow-100 text-yellow-700 px-4 py-2 rounded-xl text-sm font-semibold">
                            Rp 3.000 / Kg
                        </span>
                    </div>
                </div>
                {{-- BESI --}}
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-3 transition duration-300">
                    <div class="bg-gray-700 text-white text-center py-10 text-6xl">
                        ⚙️
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">
                            Besi
                        </h3>
                        <p class="text-gray-600 mb-5">
                            Besi bekas, aluminium, dan logam lainnya yang memiliki nilai jual tinggi.
                        </p>
                        <span class="bg-gray-100 text-gray-700 px-4 py-2 rounded-xl text-sm font-semibold">
                            Rp 8.000 / Kg
                        </span>
                    </div>
                </div>
                {{-- KACA --}}
                <div class="bg-white rounded-3xl shadow-lg overflow-hidden hover:-translate-y-3 transition duration-300">
                    <div class="bg-blue-500 text-white text-center py-10 text-6xl">
                        🍾
                    </div>
                    <div class="p-8">
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">
                            Botol Kaca
                        </h3>
                        <p class="text-gray-600 mb-5">
                            Botol kaca dan barang pecah belah yang dapat didaur ulang secara aman.
                        </p>
                        <span class="bg-blue-100 text-blue-700 px-4 py-2 rounded-xl text-sm font-semibold">
                            Rp 4.000 / Kg
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-20">
                <span class="text text-4xl text-green-700 font-bold uppercase tracking-widest">
                    Cara Kerja
                </span>
                <h2 class="text-5xl font-bold text-gray-800 mt-4">
                    Alur Penggunaan Sistem
                </h2>
                <p class="text-gray-500 mt-6 max-w-3xl mx-auto text-lg">
                    Sistem bank sampah digital mempermudah masyarakat dalam mengelola sampah menjadi tabungan bernilai.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
                {{-- Langkah 1 --}}
                <div class="bg-white p-8 rounded-3xl shadow hover:-translate-y-2 transition duration-300">
                    <div class="text-center relative">
                        <div
                            class="w-24 h-24 bg-green-600 text-white rounded-full flex items-center justify-center text-4xl mx-auto shadow-lg">
                            👤
                        </div>
                        <h3 class="text-2xl font-bold mt-8 mb-4">
                            Registrasi
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Nasabah melakukan pendaftaran akun untuk dapat menggunakan layanan bank sampah.
                        </p>
                    </div>
                </div>
                {{-- Langkah 2 --}}
                <div class="bg-white p-8 rounded-3xl shadow hover:-translate-y-2 transition duration-300">
                    <div class="text-center relative">
                        <div
                            class="w-24 h-24 bg-yellow-500 text-white rounded-full flex items-center justify-center text-4xl mx-auto shadow-lg">
                            ♻️
                        </div>
                        <h3 class="text-2xl font-bold mt-8 mb-4">
                            Setor Sampah
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Nasabah menyetorkan berbagai jenis sampah yang telah dipilah sesuai kategori.
                        </p>
                    </div>
                </div>
                {{-- Langkah 3 --}}
                <div class="bg-white p-8 rounded-3xl shadow hover:-translate-y-2 transition duration-300">
                    <div class="text-center relative">
                        <div
                            class="w-24 h-24 bg-blue-500 text-white rounded-full flex items-center justify-center text-4xl mx-auto shadow-lg">
                            💰
                        </div>
                        <h3 class="text-2xl font-bold mt-8 mb-4">
                            Saldo Bertambah
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Sistem otomatis menghitung nilai sampah dan menambahkan saldo tabungan nasabah.
                        </p>
                    </div>
                </div>
                {{-- Langkah 4 --}}
                <div class="bg-white p-8 rounded-3xl shadow hover:-translate-y-2 transition duration-300">
                    <div class="text-center relative">
                        <div
                            class="w-24 h-24 bg-red-500 text-white rounded-full flex items-center justify-center text-4xl mx-auto shadow-lg">
                            🏦
                        </div>
                        <h3 class="text-2xl font-bold mt-8 mb-4">
                            Tarik Saldo
                        </h3>
                        <p class="text-gray-600 leading-relaxed">
                            Nasabah dapat melakukan penarikan saldo hasil tabungan sampah dengan mudah.
                        </p>
                    </div>
                </div>
            </div>
    </section>
@endsection
