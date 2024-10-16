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
        Schema::create('pengaduans', function (Blueprint $table) {
            $table->id('id');
            $table->dateTime('tanggal pengaduan');
            $table->char('nik, 16');
            $table->string('judul_laporan');
            $table->text('isi_laporan');
            $table->text('lokasi_kejadian');
            $table->dateTime('tanggal_kejadian');
            $table->string('foto');
            $table->enum('kategori_kejadian', ['agama', 'hukum', 'lingkungan', 'sosial']);
            $table->enum('status', ['0','proses','selesai']);

            $table->foreign('nik')-references('nik')-on('masyarakat')
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaduans');
    }
};
