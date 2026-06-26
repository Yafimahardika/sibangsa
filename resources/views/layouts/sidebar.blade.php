<aside class="w-64 bg-green-700 text-white h-screen">
    <!-- <div class="p-4 text-xl font-bold">Bank Sampah</div> -->
    <nav>
        <ul>
            <!-- Dashboard -->
            <li class="p-3 hover:bg-green-600 transition-colors duration-200 
                {{ Route::is('dashboard') ? 'bg-green-800 font-bold' : '' }}" >
                <a href="{{ route('dashboard') }}">
                    <i class="fa-solid fa-house"></i> Dashboard
                </a>
            </li>

            <!-- Manajemen -->
            <li x-data="{ open: {{ Route::is('nasabah.*') || Route::is('jenis-sampah.*') || Route::is('user.*') ? 'true' : 'false' }} }" 
                class="p-3 hover:bg-green-600 transition-colors duration-200">
                <button @click="open = !open" class="w-full text-left flex justify-between items-center">
                    <div>
                        <i class="fa-solid fa-user-gear"></i> Manajemen
                    </div>
                    
                    <span :class="{'rotate-90': open}" class="ml-2 transform transition-transform duration-200">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </button>
                <ul x-show="open" x-cloack
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-y-75"
                    x-transition:enter-end="opacity-100 transform scale-y-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-y-100"
                    x-transition:leave-end="opacity-0 transform scale-y-75"
                    class="ml-6 mt-2 space-y-2 origin-top">
                    
                    <li class="p-2 hover:bg-green-500 transition-colors duration-200 
                        {{ Route::is('nasabah.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('nasabah.index') }}">
                            <i class="fa-solid fa-user-group"></i> Nasabah
                        </a>
                    </li>
                    <li class="p-2 hover:bg-green-500 transition-colors duration-200 
                        {{ Route::is('jenis-sampah.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('jenis-sampah.index') }}">
                            <i class="fa-solid fa-recycle"></i> Jenis Sampah
                        </a>
                    </li>
                    <li class="p-2 hover:bg-green-500 transition-colors duration-200 
                        {{ Route::is('user.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('user.index') }}">
                            <i class="fa-solid fa-user"></i> User
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Transaksi -->
            <li x-data="{ open: {{ Route::is('setoran.*') || Route::is('penarikan.*') ? 'true' : 'false' }} }" 
                class="p-3 hover:bg-green-600 transition-colors duration-200">
                <button @click="open = !open" class="w-full text-left flex justify-between items-center">
                    <div>
                        <i class="fa-solid fa-credit-card"></i> Transaksi
                    </div>
                    <span :class="{'rotate-90': open}" class="ml-2 transform transition-transform duration-200">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </button>
                <ul x-show="open" x-cloak
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 transform scale-y-75"
                    x-transition:enter-end="opacity-100 transform scale-y-100"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 transform scale-y-100"
                    x-transition:leave-end="opacity-0 transform scale-y-75"
                    class="ml-6 mt-2 space-y-2 origin-top">
                    
                    <li class="p-2 hover:bg-green-500 transition-colors duration-200 
                        {{ Route::is('setoran.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('setoran.index') }}">
                            <i class="fa-solid fa-sack-dollar"></i> Setoran
                        </a>
                    </li>
                    <li class="p-2 hover:bg-green-500 transition-colors duration-200 
                        {{ Route::is('penarikan.*') ? 'bg-green-800 font-bold' : '' }}">
                        <a href="{{ route('penarikan.index') }}">
                            <i class="fa-solid fa-money-bill-1-wave"></i> Penarikan
                            </a>
                    </li>
                </ul>
            </li>

            <!-- Statistik -->
            <li class="p-3 hover:bg-green-600 transition-colors duration-200 
                {{ Route::is('statistik.index') ? 'bg-green-800 font-bold' : '' }}">
                <a href="{{ route('statistik.index') }}">
                    <i class="fa-solid fa-chart-pie"> </i>Statistik
                </a>
            </li>

            <!-- Laporan -->
            <li class="p-3 hover:bg-green-600 transition-colors duration-200 
                {{ Route::is('laporan.index') ? 'bg-green-800 font-bold' : '' }}">
                <a href="{{ route('laporan.index') }}">
                    <i class="fa-solid fa-file-lines"> </i>Laporan
                </a>
            </li>
        </ul>
    </nav>
</aside>
