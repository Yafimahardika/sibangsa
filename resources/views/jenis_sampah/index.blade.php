@section('header_title', 'Daftar Jenis Sampah')

@extends('layouts.app')

@section('content')
    @if(session('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
                <!--  -->
            </button>
        </div>
    @endif

    <div class="container mt-5">
        <a href="{{ route('jenis-sampah.create') }}" class="btn btn-success mb-3">
            <i class="fa-solid fa-plus"></i> Tambah Jenis Sampah
        </a>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Satuan</th>
                    <th>Harga per Satuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jenis_sampah as $js)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $js->nama }}</td>
                    <td>{{ $js->satuan }}</td>
                    <td>{{ number_format($js->harga_satuan, 0, ',', '.') }}</td>
                    <td class="d-flex justify-content-center gap-1">
                        <a href="{{ route('jenis-sampah.edit', $js->id) }}" class="btn btn-warning btn-sm">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <form action="{{ route('jenis-sampah.destroy', $js->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{ $jenis_sampah->links() }}
    </div>
@endsection
