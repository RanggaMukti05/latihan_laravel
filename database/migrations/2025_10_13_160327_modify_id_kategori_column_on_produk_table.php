<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('produk', function (Blueprint $table) {
            // ubah tipe data id_kategori menjadi unsigned integer
            $table->unsignedInteger('id_kategori')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::table('produk', function (Blueprint $table) {
            // kembalikan seperti semula jika di-rollback
            $table->integer('id_kategori')->change();
        });
    }
};
