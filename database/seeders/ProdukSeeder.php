<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'nama' => 'Laptop',
            'harga' => 8000000,
            'stok' => 5,
            'kategori' => 'Elektronik',
            'aktif' => true
        ]);
    }
}
