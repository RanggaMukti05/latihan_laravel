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
        Schema::create('barang', function (Blueprint $table) {
            $table->increments ('id_kategori');
            $table->string ('nama_barang');
            $table->unsignedInteger ('id_suplier');
            $table->timestamps();

            $table->foreign('id_suplier')->references('id_suplier')->on('suplier');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('barang');
    }
};
