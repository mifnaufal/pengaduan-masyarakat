<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Monolog\Level;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->integer('id_petugas',16)->primary();
            $table->string('nama_petugas',45);
            $table->string('username', 25)->unique();
            $table->string('password', 13);
            $table->string('telp');
            $table->enum('status',['admin','petugas']);
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugas');
    }
};
