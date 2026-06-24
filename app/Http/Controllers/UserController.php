<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Tampilkan daftar user
    public function index()
    {
        $users = User::paginate(10);
        return view('user.index', compact('users'));
    }

    // Form tambah user
    public function create()
    {
        return view('user.create');
    }

    // Simpan user baru
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:100',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role'     => 'required|in:admin,petugas,nasabah',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => $request->role,
            'status'   => 'aktif',
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil ditambahkan');
    }

    // Form edit user
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    // Update user
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'role'  => 'required|in:admin,petugas,nasabah',
        ]);

        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
            'role'  => $request->role,
            'status'=> $request->status ?? $user->status,
        ]);

        return redirect()->route('user.index')->with('success', 'User berhasil diupdate');
    }

    // Nonaktifkan / hapus user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'nonaktif']);

        return redirect()->route('user.index')->with('success', 'User berhasil dinonaktifkan');
    }

    public function activate($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'aktif']);

        return redirect()->route('user.index')->with('success', 'User berhasil diaktifkan');
    }

    // Tampilkan form reset password
    public function showResetForm($id)
    {
        $user = User::findOrFail($id);
        return view('user.reset', compact('user'));
    }

    // Reset password
    public function resetPassword(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user->update([
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.index')->with('success', 'Password berhasil direset');
    }
}
