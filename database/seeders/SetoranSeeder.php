<?php

namespace Database\Seeders;

use App\Models\Nasabah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Setoran;
use Illuminate\Support\Carbon;

class SetoranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            Setoran::create([
                'nasabah_id' => Nasabah::inRandomOrder()->first()->id,
                'jenis_sampah_id' => rand(1, 5),
                'berat' => rand(5, 50),
                'total' => rand(1000, 50000),
                'created_at' => Carbon::create(2026, $i, rand(1,28)),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
