@section('header_title', 'Edit Jenis Sampah')

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <form action="{{ route('jenis-sampah.update', $jenis_sampah->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ $jenis_sampah->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="satuan" class="form-label">Satuan</label>
            <input type="text" name="satuan" id="satuan" class="form-control" value="{{ $jenis_sampah->satuan }}" required>
        </div>

        <div class="mb-3">
            <label for="harga_satuan" class="form-label">Harga per Satuan</label>
            <input type="number" name="harga_satuan" id="harga_satuan" class="form-control" value="{{ $jenis_sampah->harga_satuan }}" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $jenis_sampah->deskripsi }}</textarea>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="1" {{ $jenis_sampah->status ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ !$jenis_sampah->status ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="{{ route('jenis-sampah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
