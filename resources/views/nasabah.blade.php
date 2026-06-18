<!DOCTYPE html>
<html>

<head>
    <title>Data Nasabah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h3>Data Nasabah</h3>

        <a href="{{ route('nasabah.create') }}" class="btn btn-success mb-3">Tambah</a>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>No Rekening</th>
                <th>Aksi</th>
            </tr>

            @foreach ($nasabah as $n)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $n->nik }}</td>
                    <td>{{ $n->nama }}</td>
                    <td>{{ $n->alamat }}</td>
                    <td>{{ $n->no_rekening }}</td>
                    <td>{{ $n->no_hp }}</td>
                    <td>
                        <a href="{{ route('nasabah.edit', $n->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <form action="{{ route('nasabah.destroy', $n->id) }}" method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>

</body>

</html>
