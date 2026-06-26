@section('header_title', 'Laporan')

@extends('layouts.app')

@section('content')
<div class="container mt-5 overflow-x-auto">

    {{-- Dropdown pilih bulan --}}
    <select id="bulan" class="form-control mb-4"
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
        <p class="fs-5">Periode: Bulan {{ $bulan }}</p>
    @endisset

    {{-- Tabel Setoran --}}
    <p class="fs-4 fw-bold mb-2">Setoran</p>

    <div class="table-wrapper mb-4" style="overflow-x: auto;">
        <table class="table table-striped border">
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

        {{ $setoran->links() }}
    </div>

    {{-- Tabel Penarikan --}}
    <p class="fs-4 fw-bold mb-2">Penarikan</p>
    <div class="table-wrapper" style="overflow: auto;">
        <table class="table table-striped border">

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

        {{ $penarikan->links() }}
    </div>

    {{-- Tombol Export PDF --}}
    @isset($bulan)
        <a href="{{ route('laporan.exportPdf', $bulan) }}" class="btn btn-danger">
            <i class="fa-solid fa-print"></i>  Cetak PDF
        </a>
    @endisset
</div>
@endsection
