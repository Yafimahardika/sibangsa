<nav class="bg-green-700/90 backdrop-blur-md text-white shadow sticky top-0 z-50 border-b border-green-500/30">

    <div class="container mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-2xl font-bold">
            SIBANGSA
        </h1>

        <ul class="flex space-x-6">

            <li>
                <a href="{{ route('home') }}" class="hover:text-green-200 transition duration-300 hover:scale-105">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('about') }}" class="hover:text-green-200 transition duration-300 hover:scale-105">
                    Tentang
                </a>
            </li>

            <li>
                <a href="{{ route('kontak') }}" class="hover:text-green-200 transition duration-300 hover:scale-105">
                    Kontak
                </a>
            </li>

        </ul>

        <div class="space-x-3">

            <a href="{{ route('login') }}"
                class="bg-white text-green-700 px-5 py-2 rounded-xl font-semibold hover:bg-green-700 hover:text-white hover:scale-105 transition duration-300 shadow-lg">
                Login
            </a>

            <a href="{{ route('register') }}"
                class="bg-green-500 px-5 py-2 rounded-xl hover:bg-green-400 hover:scale-105 transition duration-300 shadow-lg">
                Register
            </a>

        </div>

    </div>

</nav>