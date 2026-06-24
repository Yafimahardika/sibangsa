@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar User</h2>
    <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah User</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->status }}</td>
                <td>
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    @if($user->status === 'aktif')
                        <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Nonaktifkan</button>
                        </form>
                    @else
                        <form action="{{ route('user.activate', $user->id) }} " method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm">Aktifkan</button>
                        </form>
                    @endif
                    <a href="{{ route('user.showResetForm', $user->id) }}" class="btn btn-secondary btn-sm">Reset Password</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
   {{ $users->links() }}
</div>
@endsection
