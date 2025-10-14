<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class suplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('suplier')->insert([
            'nama_suplier' => 'sup farm',
            'no_handphone' => '085747',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
