<aside class="w-64 bg-green-700 text-white h-screen">
    <div class="p-4 text-xl font-bold">Bank Sampah</div>
    <nav>
        <ul>
            <!-- Dashboard -->
            <li class="p-3 hover:bg-green-600 transition-all duration-200 
                {{ Route::is('dashboard') ? 'bg-green-800 font-bold' : '' }}">
                <a href="{{ route('dashboard') }}">🏠 Dashboard</a>
            </li>

            <!-- Manajemen -->
            <li x-data="{ open: {{ Route::is('nasabah.*') || Route::is('jenis-sampah.*') || Route::is('user.*') ? 'true' : 'false' }} }" 
                class="p-3 hover:bg-green-600 transition-all duration-200">
                <button @click="open = !open" class="w-full text-left flex justify-between items-center">
                    ⚙️ Manajemen
                    <span :class="{'rotate-90': open}" class="ml-2 transform transition-transform duration-200">&gt;</span>
                </button>
                <ul x-show="open" x-transition class="ml-6 mt-2 space-y-2">
                    <li class="p-2 hover:bg-green-500 transition-all duration-200 
                        {{ Route::is('nasabah.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('nasabah.index') }}">👥 Nasabah</a>
                    </li>
                    <li class="p-2 hover:bg-green-500 transition-all duration-200 
                        {{ Route::is('jenis-sampah.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('jenis-sampah.index') }}">♻️ Jenis Sampah</a>
                    </li>
                    <li class="p-2 hover:bg-green-500 transition-all duration-200 
                        {{ Route::is('user.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('user.index') }}">👤 User</a>
                    </li>
                </ul>
            </li>

            <!-- Transaksi -->
            <li x-data="{ open: {{ Route::is('setoran.*') || Route::is('penarikan.*') ? 'true' : 'false' }} }" 
                class="p-3 hover:bg-green-600 transition-all duration-200">
                <button @click="open = !open" class="w-full text-left flex justify-between items-center">
                    💳 Transaksi
                    <span :class="{'rotate-90': open}" class="ml-2 transform transition-transform duration-200">&gt;</span>
                </button>
                <ul x-show="open" x-transition class="ml-6 mt-2 space-y-2">
                    <li class="p-2 hover:bg-green-500 transition-all duration-200 
                        {{ Route::is('setoran.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('setoran.index') }}">💰 Setoran</a>
                    </li>
                    <li class="p-2 hover:bg-green-500 transition-all duration-200 
                        {{ Route::is('penarikan.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('penarikan.index') }}">💸 Penarikan</a>
                    </li>
                </ul>
            </li>

            <!-- Statistik -->
            <li class="p-3 hover:bg-green-600 transition-all duration-200 
                {{ Route::is('statistik.index') ? 'bg-green-800 font-bold' : '' }}">
                <a href="{{ route('statistik.index') }}">📊 Statistik</a>
            </li>

            <!-- Laporan -->
            <li class="p-3 hover:bg-green-600 transition-all duration-200 
                {{ Route::is('laporan.index') ? 'bg-green-800 font-bold' : '' }}">
                <a href="{{ route('laporan.index') }}">📑 Laporan</a>
            </li>
        </ul>
    </nav>
</aside>
