<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    //
    protected $table = 'produk';

    protected $primarykey = 'id_prduk';

    protected $fillable = [
        'nama',
        'id_kategori',
        'qty',
        'harga_beli',
        'harga_jual'
    ];
}
