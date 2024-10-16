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
        Schema::create('masyarakats', function (Blueprint $table) {
            $table->char('nik',16)->primary();
            $table->string('nama', 45);
            $table->string('email')->unique();
            $table->dateTime('email_verified_at')->nullable();
            $table->string('Username', 25)->unique();
            $table->string('Password')->nullable(); //
            $table->string('Telp')->nullable();

            $table->string('provider_id')->nullable();
            $table->string('provider')->nullable();
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('masyarakat');
    }
};
