@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Reset Password untuk {{ $user->name }}</h2>

    <form action="{{ route('user.resetPassword', $user->id) }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Password Baru</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Konfirmasi Password</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Reset</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
