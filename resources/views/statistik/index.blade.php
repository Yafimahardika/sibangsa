@extends('layouts.app')

@section('content')
<div class="container" style="overflow-y: scroll;">
    <h2>📊 Statistik Bank Sampah</h2>

    <!-- Filter Form -->
    <form method="GET" action="{{ route('statistik.index') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <label>Start Date</label>
                <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
            </div>
            <div class="col-md-3">
                <label>End Date</label>
                <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
            </div>
            <div class="col-md-3">
                <label>Jenis Sampah</label>
                <select name="jenis_sampah_id" class="form-control">
                    <option value="">-- Semua Jenis --</option>
                    @foreach($jenisSampah as $js)
                        <option value="{{ $js->id }}" {{ request('jenis_sampah_id') == $js->id ? 'selected' : '' }}>
                            {{ $js->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-3 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">Filter</button>
            </div>
        </div>
    </form>

    <!-- Statistik Cards -->
    <div class="row mb-4">
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Total Setoran</h5>
                    <h3>{{ number_format($totalSetoran) }} kg</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Total Penarikan</h5>
                    <h3>Rp {{ number_format($totalPenarikan) }}</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Jumlah Nasabah</h5>
                    <h3>{{ $jumlahNasabah }}</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Grafik Aktivitas -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Setoran per Bulan (kg)</h5>
                        <div style="width:100%; max-width:600px; margin:auto;">
                            <canvas id="transaksiChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5>Penarikan per Bulan (Rp)</h5>
                        <div style="width:100%; max-width:600px; margin:auto;">
                            <canvas id="transaksiChart2"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('transaksiChart').getContext('2d');
    const transaksiChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($labels), // array bulan
            datasets: [
                {
                    label: 'Setoran (kg)',
                    data: @json($setoranData),
                    borderColor: 'green',
                    fill: false
                }
            ]
        }
    });

     const ctx2 = document.getElementById('transaksiChart2').getContext('2d');
    const transaksiChart2 = new Chart(ctx2, {
        type: 'line',
        data: {
            labels: @json($labels), // array bulan
            datasets: [
                {
                    label: 'Penarikan (Rp)',
                    data: @json($penarikanData),
                    borderColor: 'red',
                    fill: false
                }
            ]
        }
    });
</script>
@endsection

