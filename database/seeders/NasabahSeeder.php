<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Nasabah;
use Faker\Factory as Faker;

class NasabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nasabah::truncate();

        Nasabah::create([
            'no_rekening'=>'BS001',
            'nik'=>'3512345678900001',
            'nama'=>'Budi Santoso',
            'alamat'=>'Jl. Merdeka No. 10',
            'no_hp'=>'081234567890',
            'saldo'=>0
        ]);

        Nasabah::create([
            'no_rekening'=>'BS002',
            'nik'=>'3512345678900002',
            'nama'=>'Siti Aminah',
            'alamat'=>'Jl. Mawar No. 5',
            'no_hp'=>'082345678901',
            'saldo'=>0,
        ]);

        // $faker = Faker::create('id_ID');
        
        // for($i = 1; $i <= 140; $i++) {
        //     Nasabah::create([
        //         'no_rekening' => 'BS' . str_pad($i, 3, '0', STR_PAD_LEFT),
        //         'nik'=>$faker->nik(),
        //         'nama'=>$faker->name(),
        //         'alamat'=>$faker->address(),
        //         'no_hp'=>$faker->phoneNumber(),
        //         'saldo'=>rand(10000, 200000)
        //     ]);
        // }
    }
}
