@section('header_title', 'Tambah Penarikan')

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <form action="{{ route('penarikan.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nasabah_id" class="form-label">Nasabah</label>
            <select name="nasabah_id" id="nasabah_id" class="form-select" required>
                @foreach($nasabahs as $nasabah)
                    <option value="{{ $nasabah->id }}">{{ $nasabah->nama }} - Saldo: Rp {{ number_format($nasabah->saldo,0,',','.') }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="jumlah" class="form-label">Jumlah Penarikan</label>
            <input type="number" step="0.01" name="jumlah" id="jumlah" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-danger">Tarik</button>
        <a href="{{ route('penarikan.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
