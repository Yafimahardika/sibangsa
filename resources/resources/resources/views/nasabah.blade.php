<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nasabah</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            <h4>Data Nasabah</h4>
        </div>

        <div class="card-body">

            <!-- BUTTON TAMBAH -->
            <a href="{{ route('nasabah.create') }}" class="btn btn-primary mb-3">
                + Input Nasabah
            </a>

            <!-- ALERT SUCCESS -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>No Rekening</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>No HP</th>
                        <th>Saldo</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse($nasabah as $n)
                    <tr>
                        <td>{{ $n->no_rekening }}</td>
                        <td>{{ $n->nik }}</td>
                        <td>{{ $n->nama }}</td>
                        <td>{{ $n->alamat }}</td>
                        <td>{{ $n->no_hp }}</td>
                        <td>{{ $n->saldo }}</td>
                        <td>

                            <!-- EDIT -->
                            <a href="{{ route('nasabah.edit', $n->id) }}" 
                               class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <!-- HAPUS -->
                            <form action="{{ route('nasabah.destroy', $n->id) }}" 
                                  method="POST" 
                                  class="d-inline">

                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm"
                                    onclick="return confirm('Yakin hapus data?')">
                                    Hapus
                                </button>
                            </form>

                        </td>
                    </tr>

                    @empty
                    <tr>
                        <td colspan="7" class="text-center">
                            Data tidak ada
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>