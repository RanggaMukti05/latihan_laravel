<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migration.
     */
    public function up(): void
    {
        Schema::table('barang', function (Blueprint $table) {
            $table->string('nama_barang')->nullable();
            $table->unsignedBigInteger('id_suplier')->nullable();

            // Tambah foreign key
            $table->foreign('id_suplier')->references('id_suplier')->on('suplier');
        });
    }

    /**
     * Rollback migration.
     */
    public function down(): void
{
    Schema::table('barang', function (Blueprint $table) {
        if (Schema::hasColumn('barang', 'id_suplier')) {
            try {
                $table->dropForeign(['id_suplier']);
            } catch (\Exception $e) {
                // Abaikan error kalau foreign key tidak ada
            }
            $table->dropColumn(['nama_barang', 'id_suplier']);
        }
    });
}
};
