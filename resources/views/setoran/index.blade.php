@section('header_title', 'Setoran')

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <a href="{{ route('setoran.create') }}" class="btn btn-success mb-3">
        <i class="fa-solid fa-plus"></i> Tambah Setoran
    </a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nasabah</th>
                <th>Jenis Sampah</th>
                <th>Berat (kg)</th>
                <th>Total (Rp)</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($setorans as $setoran)
            <tr>
                <td>{{ $setoran->nasabah->nama }}</td>
                <td>{{ $setoran->jenisSampah->nama }}</td>
                <td>{{ $setoran->berat }}</td>
                <td>{{ number_format($setoran->total,0,',','.') }}</td>
                <td>{{ $setoran->created_at->format('d-m-Y') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $setorans->links() }}
</div>
@endsection
