<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MesyuaratSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Mesyuarat 1
        DB::table('mesyuarat')->insert([
            'perkara' => 'Mesyuarat 1', // cara 1 penyediaan validation rules - guna tiang
            'tarikh' => now(), // cara 2 penyediaan validation rules - guna array
            'masa_mula' => now(),
            'masa_tamat' => now(),
            'lokasi' => 'Bilik Tulip 1',
            'status' => 'aktif',
        ]);

        // Mesyuarat 2
        DB::table('mesyuarat')->insert([
            'perkara' => 'Mesyuarat 2', // cara 1 penyediaan validation rules - guna tiang
            'tarikh' => now(), // cara 2 penyediaan validation rules - guna array
            'masa_mula' => now(),
            'masa_tamat' => now(),
            'lokasi' => 'Bilik Tulip 2',
            'status' => 'aktif',
        ]);
    }
}
