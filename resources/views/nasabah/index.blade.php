@section('header_title', 'Data Nasabah')

@extends('layouts.app')

@section('content')
<div class="container mt-5">

        <a href="{{ route('nasabah.create') }}" class="btn btn-success mb-3">Tambah</a>

        @if(session('success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
                <!--  -->
            </button>
        </div>
        @endif

        <table class="table table-hover table-striped table-bordered">
            <thead>
                <th>No</th>
                <th>No Rekening</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Saldo</th>
                <th>Aksi</th>
            </thead>

            @foreach ($nasabah as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->no_rekening }}</td>
                    <td>{{ $n->nik }}</td>
                    <td>{{ $n->nama }}</td>
                    <td>{{ $n->alamat }}</td>
                    <td>{{ $n->no_hp }}</td>
                    <td>{{ $n->saldo }}</td>
                    <td>
                        <!-- Edit -->
                        <a href="{{ route('nasabah.edit', $n->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Hapus -->
                        <form action="{{ route('nasabah.destroy', $n->id) }}" method="POST" class="d-inline"">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

</body>
</html>
@endsection
