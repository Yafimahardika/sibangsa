@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Setoran</h2>

    <form action="{{ route('setoran.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nasabah_id" class="form-label">Nasabah</label>
            <select name="nasabah_id" id="nasabah_id" class="form-select" required>
                @foreach($nasabahs as $nasabah)
                    <option value="{{ $nasabah->id }}">{{ $nasabah->nama }} - {{ $nasabah->no_rekening }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jenis_sampah_id" class="form-label">Jenis Sampah</label>
            <select name="jenis_sampah_id" id="jenis_sampah_id" class="form-select" required>
                @foreach($jenisSampahs as $jenis)
                    <option value="{{ $jenis->id }}">{{ $jenis->nama }} (Rp {{ number_format($jenis->harga_satuan,0,',','.') }}/kg)</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat (kg)</label>
            <input type="number" step="0.01" name="berat" id="berat" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('setoran.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
