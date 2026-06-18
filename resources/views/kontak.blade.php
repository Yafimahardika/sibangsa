@extends('layouts.public')

@section('content')
    <section class="bg-gradient-to-br from-green-800 via-green-600 to-lime-500 text-white py-24">
        <div class="container mx-auto px-6 text-center">
            <h1 class="text-5xl md:text-6xl font-bold mb-8">
                Hubungi Kami
            </h1>
            <p class="text-lg md:text-xl text-green-100 max-w-3xl mx-auto">
                Kami siap membantu dan menerima masukan terkait sistem informasi Bank Sampah digital.
            </p>
        </div>
    </section>


    <section class="py-24 bg-white">
            <a href="/"
                class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow transition mb-8">
                ← Kembali ke Home
            </a>
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                {{-- FORM --}}
                <div class="bg-gray-100 p-10 rounded-3xl shadow-lg">
                    <h2 class="text-4xl font-bold text-gray-800 mb-8">
                        Kirim Pesan
                    </h2>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">
                                Nama
                            </label>
                            <input type="text"
                                class="w-full rounded-2xl border-gray-300 focus:ring-green-500 focus:border-green-500"
                                placeholder="Masukkan nama">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">
                                Email
                            </label>
                            <input type="email"
                                class="w-full rounded-2xl border-gray-300 focus:ring-green-500 focus:border-green-500"
                                placeholder="Masukkan email">
                        </div>

                        <div>
                            <label class="block text-gray-700 font-semibold mb-2">
                                Pesan
                            </label>
                            <textarea rows="5" class="w-full rounded-2xl border-gray-300 focus:ring-green-500 focus:border-green-500"
                                placeholder="Tulis pesan..."></textarea>
                        </div>

                        <button type="submit"
                            class="bg-green-700 hover:bg-green-600 text-white px-8 py-4 rounded-2xl font-bold shadow-lg transition duration-300">
                            Kirim Pesan
                        </button>
                    </form>
                </div>

                {{-- INFO --}}
                <div>
                    <span class="text-green-700 font-bold uppercase tracking-widest">
                        Informasi Kontak
                    </span>
                    <h2 class="text-5xl font-bold text-gray-800 mt-4 leading-tight">
                        Mari Terhubung
                        Bersama Kami
                    </h2>
                    <p class="text-gray-600 mt-8 text-lg leading-relaxed">
                        Sistem Informasi Bank Sampah hadir untuk membantu masyarakat dalam pengelolaan sampah digital yang
                        lebih modern dan efisien.
                    </p>

                    <div class="space-y-8 mt-12">
                        <div class="flex items-start gap-5">
                            <div
                                class="w-16 h-16 bg-green-100 text-green-700 rounded-2xl flex items-center justify-center text-3xl">
                                📍
                            </div>

                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">
                                    Alamat
                                </h3>
                                <p class="text-gray-600 mt-2">
                                    Indonesia
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div
                                class="w-16 h-16 bg-blue-100 text-blue-700 rounded-2xl flex items-center justify-center text-3xl">
                                📧
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">
                                    Email
                                </h3>
                                <p class="text-gray-600 mt-2">
                                    banksampah@gmail.com
                                </p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div
                                class="w-16 h-16 bg-yellow-100 text-yellow-700 rounded-2xl flex items-center justify-center text-3xl">
                                📞
                            </div>
                            <div>
                                <h3 class="text-2xl font-bold text-gray-800">
                                    Telepon
                                </h3>
                                <p class="text-gray-600 mt-2">
                                    08123456789
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
