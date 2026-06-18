<div class="bg-white shadow px-6 py-4 flex justify-between items-center">

    <h2 class="text-xl font-semibold">
        Sistem Informasi Bank Sampah
    </h2>

    <div>

        <span class="mr-4">
            {{ Auth::user()->name }}
        </span>

        <form action="{{ route('logout') }}" method="POST" class="inline">
            @csrf

            <button class="bg-red-500 text-white px-4 py-2 rounded">
                Logout
            </button>
        </form>

    </div>

</div>
