<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisSampahSeeder extends Seeder
{
    /**
     * Jalankan seeder.
     */
    public function run(): void
    {
        DB::table('jenis_sampahs')->insert([
            [
                'nama' => 'Plastik PET',
                'harga_satuan' => 2000,
                'satuan' => 'kg',
                'deskripsi' => 'Botol plastik bening sekali pakai',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kertas HVS',
                'harga_satuan' => 1500,
                'satuan' => 'kg',
                'deskripsi' => 'Kertas putih bekas cetakan',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kaleng Aluminium',
                'harga_satuan' => 5000,
                'satuan' => 'kg',
                'deskripsi' => 'Kaleng minuman ringan',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Kaca',
                'harga_satuan' => 1000,
                'satuan' => 'kg',
                'deskripsi' => 'Pecahan kaca bening',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Organik',
                'harga_satuan' => 500,
                'satuan' => 'kg',
                'deskripsi' => 'Sisa makanan dan daun',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
