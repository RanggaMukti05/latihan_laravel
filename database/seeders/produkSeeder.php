<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produkSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('produk')->insert([
            'nama'        => 'Indomie Goreng',
            'id_kategori' => 1245,
            'qty'         => 100,
            'harga_beli'  => 3500,
            'harga_jual'  => 4000,
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
