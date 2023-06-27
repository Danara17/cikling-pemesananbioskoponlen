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
        Schema::create('jadwal_tayang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('film_id');
            $table->date('tanggal_tayang');
            $table->time('waktu_tayang');
            $table->string('harga_tiket');
            $table->integer('kuota');
            $table->timestamps();

            $table->foreign('film_id')->references('id')->on('film')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_tayang');
    }
};