<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            'nama_barang' => 'cocacola',
            'id_suplier'  => '3',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
