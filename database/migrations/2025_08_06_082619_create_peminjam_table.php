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
        Schema::create('peminjam', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('alat_id')->nullable();
            $table->string('nisn')->nullable();
            $table->integer('jurusan')->nullable();
            $table->string('kelas')->nullable();
            $table->string('gambar')->comment('kartu pelajar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjam');
    }
};
