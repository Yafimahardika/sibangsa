<nav class="bg-blue-600 p-4 text-white">
    <div class="container mx-auto flex justify-between items-center">
        <h1 class="text-lg font-bold">Web 2</h1>

        <ul class="flex gap-5 font-medium">
            <li>
                <a href="{{ route('home.index') }}"
                   class="hover:underline">
                    Home
                </a>
            </li>

            <li>
                <a href="{{ route('produk.index') }}"
                   class="hover:underline">
                    Produk
                </a>
            </li>

            

            <li>
                <a href="{{ route('about.index') }}"
                   class="hover:underline">
                    About
                </a>
            </li>

            <li>
                <a href="{{ route('kontak.index') }}"
                   class="hover:underline">
                    Kontak
                </a>
            </li>

            <li>
                <a href="{{ route('profil.index') }}"
                   class="hover:underline">
                    Profil
                </a>
            </li>

            <li>
                <a href="{{ route('katalog.index') }}"
                   class="hover:underline">
                    Katalog
                </a>
            </li>
        </ul>
    </div>
</nav>