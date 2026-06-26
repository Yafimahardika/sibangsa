@section('header_title', 'Dashboard')

@extends('layouts.app')

@section('content')

    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">
            Ringkasan
        </h1>

        <p class="text-gray-500 mt-2">
            Selamat datang di sistem informasi bank sampah
        </p>
    </div>

    <div class="flex flex-col">
        <!-- Ringkasan Jumlah -->
         <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-2xl shadow p-6">
                <h2 class="text-gray-500 text-sm">Total Nasabah</h2>
                <p class="text-3xl font-bold mt-3 text-green-600">{{ $totalNasabah }}</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <h2 class="text-gray-500 text-sm">Total Saldo Nasabah</h2>
                <p class="text-3xl font-bold mt-3 text-blue-600">Rp {{ number_format($totalSaldo, 0, ',', '.') }}</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <h2 class="text-gray-500 text-sm">Total Setoran Nasabah</h2>
                <p class="text-3xl font-bold mt-3 text-yellow-500">Rp {{ number_format($totalSetoran, 0, ',', '.') }}</p>
            </div>

            <div class="bg-white rounded-2xl shadow p-6">
                <h2 class="text-gray-500 text-sm">Penarikan</h2>
                <p class="text-3xl font-bold mt-3 text-red-500">Rp {{ number_format($totalPenarikan, 0, ',', '.') }}</p>
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

    

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const setoranData = @json($setoranPerBulan);
        const labelsJenis = @json($labelsJenis);
        const dataJenis   = @json($dataJenis);

        // Bar Chart
        const ctx = document.getElementById('myChart');
        new Chart(ctx, {
            type: 'bar',
            data: {
            labels: Object.keys(setoranData),
            datasets: [{
                label: 'Setoran',
                data: Object.values(setoranData),
                backgroundColor: ['#3b82f6', '#10b981']
            }]
            }
        });
        // Pie Chart
        const cty = document.getElementById('pieChart');
        new Chart(cty, {
            type: 'pie',
            data: {
            labels: labelsJenis,
            datasets: [{
                data: dataJenis,
                backgroundColor: ['#3b82f6', '#10b981', '#f59e0b' ,'#8b5cf6']
            }]
            }
        });
    </script>
@endsection