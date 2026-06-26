@section('header_title', 'Penarikan')

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <a href="{{ route('penarikan.create') }}" class="btn btn-danger mb-3">
        <i class="fa-solid fa-plus"></i>  Tambah Penarikan
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nasabah</th>
                <th>Jumlah (Rp)</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($penarikans as $penarikan)
            <tr>
                <td>{{ $penarikan->nasabah->nama }}</td>
                <td>{{ number_format($penarikan->jumlah,0,',','.') }}</td>
                <td>{{ $penarikan->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $penarikans->links() }}
</div>
@endsection
