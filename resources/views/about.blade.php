@extends('layouts.public')

@section('title', 'Tentang Kami')

@section('content')
    <div class="min-h-screen bg-gray-100">

        {{-- HERO SECTION --}}
        <section class="relative">
            <img src="{{ asset('images/sampah.jpeg') }}" alt="Bank Sampah" class="w-full h-[350px] object-cover brightness-50">

            <div class="absolute inset-0 flex items-center justify-center text-center px-6">
                <div class="text-white">
                    <h1 class="text-4xl md:text-5xl font-bold mb-4">
                        Tentang SIBANGSA
                    </h1>
                    <p class="max-w-2xl text-lg text-gray-200">
                        Bersama menciptakan lingkungan yang bersih, sehat,
                        dan bernilai ekonomi melalui pengelolaan sampah digital.
                    </p>
                </div>
            </div>
        </section>

        {{-- CONTENT --}}
        <section class="max-w-6xl mx-auto px-6 py-12">

            {{-- BUTTON --}}
            <a href="/"
                class="inline-flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg shadow transition mb-8">
                ← Kembali ke Home
            </a>

            {{-- ABOUT --}}
            <div class="grid md:grid-cols-2 gap-10 items-center mb-16">

                <div>
                    <h2 class="text-3xl font-bold text-green-700 mb-5">
                        Apa Itu SIBANGSA?
                    </h2>

                    <p class="text-gray-700 leading-relaxed mb-4">
                        <strong>SIBANGSA</strong> adalah sistem pengelolaan sampah berbasis masyarakat
                        yang bertujuan meningkatkan kesadaran lingkungan serta memberikan nilai ekonomi
                        dari sampah yang dihasilkan sehari-hari.
                    </p>

                    <p class="text-gray-700 leading-relaxed">
                        Melalui sistem ini, masyarakat dapat menabung sampah yang telah dipilah seperti
                        plastik, kertas, dan logam. Sampah tersebut kemudian dicatat dan memiliki nilai
                        rupiah layaknya menabung di bank.
                    </p>
                </div>

                <div>
                    <img src="{{ asset('images/sampahorang.jpeg') }}" alt="Kegiatan Bank Sampah"
                        class="rounded-2xl shadow-xl w-full h-[350px] object-cover">
                </div>
            </div>

            {{-- VISI MISI --}}
            <div class="grid md:grid-cols-2 gap-8 mb-16">

                {{-- VISI --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 border-t-4 border-green-600">
                    <h3 class="text-2xl font-bold text-green-700 mb-4">
                        🎯 Visi
                    </h3>

                    <p class="text-gray-700 leading-relaxed">
                        Menjadi solusi inovatif dalam pengelolaan sampah
                        untuk menciptakan lingkungan yang bersih,
                        sehat, dan bernilai ekonomi.
                    </p>
                </div>

                {{-- MISI --}}
                <div class="bg-white rounded-2xl shadow-lg p-8 border-t-4 border-yellow-500">
                    <h3 class="text-2xl font-bold text-yellow-600 mb-4">
                        🚀 Misi
                    </h3>

                    <ul class="space-y-3 text-gray-700">
                        <li>✅ Meningkatkan kesadaran masyarakat terhadap pentingnya pengelolaan sampah</li>
                        <li>✅ Mendorong kebiasaan memilah sampah sejak dini</li>
                        <li>✅ Mengurangi volume sampah yang dibuang ke TPA</li>
                        <li>✅ Memberikan manfaat ekonomi bagi masyarakat</li>
                    </ul>
                </div>
            </div>

            {{-- LAYANAN --}}
            <div class="mb-16">
                <div class="text-center mb-10">
                    <h2 class="text-3xl font-bold text-green-700">
                        📌 Layanan Kami
                    </h2>
                    <p class="text-gray-600 mt-2">
                        Beberapa layanan yang tersedia pada sistem Bank Sampah
                    </p>
                </div>

                <div class="grid md:grid-cols-4 gap-6">
                    <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition">
                        <div class="text-5xl mb-4">📝</div>
                        <h4 class="font-bold mb-2">Tabungan Sampah</h4>
                        <p class="text-sm text-gray-600">
                            Pencatatan tabungan sampah secara digital.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition">
                        <div class="text-5xl mb-4">⚖️</div>
                        <h4 class="font-bold mb-2">Penimbangan</h4>
                        <p class="text-sm text-gray-600">
                            Penimbangan dan penilaian sampah secara akurat.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition">
                        <div class="text-5xl mb-4">💰</div>
                        <h4 class="font-bold mb-2">Penukaran</h4>
                        <p class="text-sm text-gray-600">
                            Sampah dapat ditukar menjadi uang atau kebutuhan.
                        </p>
                    </div>

                    <div class="bg-white rounded-2xl shadow-md p-6 text-center hover:shadow-xl transition">
                        <div class="text-5xl mb-4">📚</div>
                        <h4 class="font-bold mb-2">Edukasi</h4>
                        <p class="text-sm text-gray-600">
                            Edukasi pengelolaan sampah kepada masyarakat.
                        </p>
                    </div>

                </div>
            </div>

            {{-- TIM --}}
            <div class="bg-green-700 rounded-3xl p-10 text-white text-center shadow-xl">

                <h2 class="text-3xl font-bold mb-4">
                    👥 Tim Kami
                </h2>

                <p class="max-w-3xl mx-auto leading-relaxed text-green-100">
                    Website ini dikembangkan untuk membantu pengelolaan Bank Sampah
                    secara digital sehingga memudahkan pencatatan data nasabah,
                    transaksi, dan laporan agar lebih efektif dan modern.
                </p>
            </div>

            {{-- FOOTER --}}
            <div class="text-center text-gray-500 text-sm mt-10">
                © {{ date('Y') }} Bank Sampah. Semua hak dilindungi.
            </div>

        </section>
    </div>
@endsection
