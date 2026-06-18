@section('header_title', 'Dashboard')

@extends('layouts.app')

@section('content')

    <!-- <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Ringkasan
        </h1>

        <p class="text-gray-500 mt-2">
            Selamat datang di sistem informasi bank sampah
        </p>
    </div> -->

    <div class="flex flex-col">
        <!-- Ringkasan Jumlah -->
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-gray-500 text-md">Saldo</h2>
                <p class="text-3xl font-bold mt-3 p-6">Rp. 2.999.999</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-gray-500 text-md">Setoran</h2>
                <p class="text-3xl font-bold mt-3 p-6">Rp. 500.000</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-gray-500 text-md">Penarikan</h2>
                <p class="text-3xl font-bold mt-3 p-6">Rp. 150.000</p>
            </div>
            <div class="bg-white rounded-xl shadow p-6">
                <h2 class="text-gray-500 text-md">Nasabah</h2>
                <p class="text-3xl font-bold mt-3 p-6">17</p>
            </div>
         </div>
         <!-- Chart -->
          <div class="flex gap-4">
            <div class="flex-1">
                <div class="w-full bg-white p-4 rounded shadow">
                    <canvas id="myChart" class="max-h-80"></canvas>
                </div>
            </div>
            <div class="flex-4 bg-white p-4 rounded shadow justify">
                <canvas id="pieChart" class="max-h-80"></canvas>
            </div>
          </div>
    </div>

    <!-- <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-gray-500 text-sm">Total Nasabah</h2>
            <p class="text-3xl font-bold mt-3 text-green-600">120</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-gray-500 text-sm">Total Saldo</h2>
            <p class="text-3xl font-bold mt-3 text-blue-600">Rp 12 Jt</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-gray-500 text-sm">Total Setoran</h2>
            <p class="text-3xl font-bold mt-3 text-yellow-500">Rp 5 Jt</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h2 class="text-gray-500 text-sm">Penarikan</h2>
            <p class="text-3xl font-bold mt-3 text-red-500">Rp 2 Jt</p>
        </div>
    </div> -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        // Bar Chart
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar', // tipe chart: bar, line, pie, dll
            data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Juni', 'Agu', 'Sep', 'Okt', 'Nov','Des'],
            datasets: [{
                label: 'Setoran',
                data: [10000, 15000, 8000, 12000, 5000, 15000, 15000, 8000, 12000, 5000, 15000],
                backgroundColor: ['#3b82f6', '#10b981', '#f59e0b', '#ef4444']
            }]
            }
        });
        // Pie Chart
        const cty = document.getElementById('pieChart');
        new Chart(cty, {
            type: 'pie',
            data: {
            labels: ['Plastik', 'Kertas', 'Logam'],
            datasets: [{
                label: 'Jenis Sampah',
                data: [40, 35, 25],
                backgroundColor: ['#3b82f6', '#10b981', '#f59e0b']
            }]
            }
        });
    </script>
@endsection