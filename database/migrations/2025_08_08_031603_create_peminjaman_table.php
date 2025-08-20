<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('peminjam_id')->constrained('peminjam')->cascadeOnDelete();
            $table->foreignUlid('alat_id')->constrained('alat')->cascadeOnDelete();
            $table->timestamp('tanggal_pinjam')->nullable();
            $table->timestamp('tanggal_kembali')->nullable();
            $table->integer('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peminjaman');
    }
};
