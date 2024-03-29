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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kode_pengguna')->index();
            $table->foreign('kode_pengguna')->references('kode_pengguna')->on('pengguna')->onDelete('cascade');
            $table->unsignedBigInteger('kode_karyawan')->index()->nullable(true);
            $table->foreign('kode_karyawan')->references('kode_karyawan')->on('karyawan')->onDelete('cascade');
            $table->boolean('status');
            $table->string('alamat')->nullable(true);
            $table->date('tanggal');
            // jika status == 0
            // maka transaksi masih ada di keranjang
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
