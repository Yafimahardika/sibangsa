@section('header_title', 'Tambah Nasabah')

@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <form method="POST" action="{{ route('nasabah.store') }}">
        @csrf 

        <div class="form-group mb-3">
            <label for="nik">NIK</label>
            <input type="number" name="nik" class="form-control" placeholder="00000000000000">

            @error('nik')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama.." value="DikDika">

            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" class="form-control" placeholder="Alamat.." value="Bakalan">

            @error('alamat')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="no_hp">No. HP</label>
            <input type="number" name="no_hp" class="form-control" placeholder="08xxxxxxxxxx" value="0888">

            @error('no_hp')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group mt-5">
            <input type="submit" class="btn btn-success" value="Simpan">
            <a href="{{ route('nasabah.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection