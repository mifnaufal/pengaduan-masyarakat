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
        Schema::create('laporans', function (Blueprint $table) {
            $table->unsignedBigInteger('id pengaduan');
            $table->dateTime('tanggal tanggapan');
            $table->text('tanggapan');
            $table->unsignedBigInteger('id petugas');
            $table->enum('level', ['0','pending', 'selesai']);
            $table->foreign('id_pengaduan')->refrences('id_pengaduan')->on('pengaduan');
            $table->foreign('id_petugas')->refrences('id_petugas')->on('petugas');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporans');
    }
};
