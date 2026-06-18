<div class="w-64 bg-green-700 text-white min-h-screen p-5">

    <h1 class="text-2xl font-bold mb-10">
        SIBANGSI
    </h1>

    <ul class="space-y-3">

        <li>
            <a href="{{ route('dashboard') }}" class="block p-3 rounded hover:bg-green-600">
                Dashboard
            </a>
        </li>

        <li>
            <a href="{{ route('nasabah.index') }}" class="block p-3 rounded hover:bg-green-600">
                Nasabah
            </a>
        </li>

        <li>
            <a href="{{ route('jenis-sampah.index') }}" class="block p-3 rounded hover:bg-green-600">
                Jenis Sampah
            </a>
        </li>

        <li>
            <a href="{{ route('setoran.index') }}" class="block p-3 rounded hover:bg-green-600">
                Setoran
            </a>
        </li>

        <li>
            <a href="{{ route('penarikan.index') }}" class="block p-3 rounded hover:bg-green-600">
                Penarikan
            </a>
        </li>

    </ul>

</div>
