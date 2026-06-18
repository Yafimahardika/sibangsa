<nav class="bg-green-700/90 backdrop-blur-md text-white shadow sticky top-0 z-50 border-b border-green-500/30">

    <div class="container mx-auto px-6 py-4">

        <div class="flex justify-between items-center">

            {{-- LOGO --}}
            <h1 class="text-2xl font-bold">

                Bank Sampah

            </h1>



            {{-- MENU DESKTOP --}}
            <div class="hidden md:flex items-center space-x-8">

                <a href="/" class="hover:text-lime-200 transition duration-300 hover:scale-105">

                    Home

                </a>

                <a href="/tentang" class="hover:text-lime-200 transition duration-300 hover:scale-105">

                    Tentang

                </a>

                <a href="/layanan" class="hover:text-lime-200 transition duration-300 hover:scale-105">

                    Layanan

                </a>

                <a href="/kontak" class="hover:text-lime-200 transition duration-300 hover:scale-105">

                    Kontak

                </a>

            </div>



            {{-- BUTTON DESKTOP --}}
            <div class="hidden md:flex items-center space-x-4">

                <a href="/login"
                    class="bg-white text-green-700 px-5 py-2 rounded-2xl font-semibold hover:scale-105 transition duration-300 shadow-lg">

                    Login

                </a>

                <a href="/register"
                    class="bg-green-500 px-5 py-2 rounded-2xl hover:bg-green-400 hover:scale-105 transition duration-300 shadow-lg">

                    Register

                </a>

            </div>



            {{-- HAMBURGER --}}
            <button id="menu-btn" class="md:hidden text-4xl focus:outline-none">
                ☰
            </button>

        </div>



        {{-- MOBILE MENU --}}

        <div id="mobile-menu" class="hidden md:hidden flex flex-col mt-6 space-y-4 bg-green-800 p-6 rounded-2xl">



            <a href="/" class="block hover:text-lime-200">
                Home
            </a>

            <a href="/tentang" class="block hover:text-lime-200">
                Tentang
            </a>

            <a href="/layanan" class="block hover:text-lime-200">
                Layanan
            </a>

            <a href="/kontak" class="block hover:text-lime-200">
                Kontak
            </a>

            <a href="/login" class="block bg-white text-green-700 px-5 py-3 rounded-2xl text-center font-semibold">

                Login

            </a>

            <a href="/register" class="block bg-green-500 px-5 py-3 rounded-2xl text-center">

                Register

            </a>

        </div>

    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const menuBtn = document.getElementById('menu-btn');

            const mobileMenu = document.getElementById('mobile-menu');

            menuBtn.addEventListener('click', function() {

                mobileMenu.classList.toggle('hidden');

            });

        });
    </script>



</nav>
