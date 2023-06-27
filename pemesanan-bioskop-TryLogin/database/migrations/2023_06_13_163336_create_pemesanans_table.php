<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('jadwal_tayang_id');
            $table->unsignedBigInteger('pelanggan_id');
            $table->string('nama_pemesan');
            $table->integer('jumlah_tiket');
            $table->string('total_harga');
            // $table->unsignedBigInteger('status_pembayaran_id');
            $table->timestamps();

            $table->foreign('jadwal_tayang_id')->references('id')->on('jadwal_tayang')->onDelete('cascade');
            $table->foreign('pelanggan_id')->references('id')->on('pelanggan')->onDelete('cascade');
            // $table->foreign('status_pembayaran_id')->references('id')->on('status_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};