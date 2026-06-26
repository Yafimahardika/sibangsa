@extends('layouts.app')

@section('content')
<div class="container overflow-x-auto">
    <h1>Laporan Transaksi Bank Sampah</h1>

    {{-- Dropdown pilih bulan --}}
    <select id="bulan" class="form-control"
        onchange="window.location.href='/laporan/bulan/' + this.value;">
        <option value="">-- Pilih Bulan --</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10">Oktober</option>
        <option value="11">November</option>
        <option value="12">Desember</option>
    </select>

    @isset($bulan)
        <p>Periode: Bulan {{ $bulan }}</p>
    @endisset

    {{-- Tabel Setoran --}}
    <h3>Setoran</h3>
    <div class="table-wrapper" style="overflow-x: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nasabah</th>
                    <th>Jenis Sampah</th>
                    <th>Berat</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($setoran as $s)
                <tr>
                    <td>{{ $s->created_at->format('d-m-Y') }}</td>
                    <td>{{ $s->nasabah->nama }}</td>
                    <td>{{ $s->jenisSampah->nama }}</td>
                    <td>{{ $s->berat }}</td>
                    <td>{{ $s->total }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Tabel Penarikan --}}
    <h3>Penarikan</h3>
    <div class="table-wrapper" style="overflow: auto;">
        <table class="table">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nasabah</th>
                    <th>Jumlah</th>
                </tr>
            </thead>
            <tbody>
                @foreach($penarikan as $p)
                <tr>
                    <td>{{ $p->created_at->format('d-m-Y') }}</td>
                    <td>{{ $p->nasabah->nama }}</td>
                    <td>{{ $p->jumlah }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Tombol Export PDF --}}
    @isset($bulan)
        <a href="{{ route('laporan.exportPdf', $bulan) }}" class="btn btn-danger">Cetak PDF</a>
    @endisset
</div>
@endsection
