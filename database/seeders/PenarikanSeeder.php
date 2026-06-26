<?php

namespace Database\Seeders;

use App\Models\Nasabah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Penarikan;
use Illuminate\Support\Carbon;

class PenarikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Buat data penarikan di 12 bulan
        for ($i = 1; $i <= 12; $i++) {
            Penarikan::create([
                'nasabah_id' => Nasabah::inRandomOrder()->first()->id, // sesuaikan dengan nasabah yang ada
                'jumlah' => rand(10000, 500000), // nominal acak Rp 10 ribu - Rp 500 ribu
                'created_at' => Carbon::create(2026, $i, rand(1,28)),
                'updated_at' => Carbon::now()
            ]);
        }

    }
}
