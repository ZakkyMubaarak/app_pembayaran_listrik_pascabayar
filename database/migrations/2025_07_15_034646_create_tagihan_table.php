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
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id();
            $table->char('kode_tagihan')->unique();
            $table->foreignId('penggunaan_id')->references('id')->on('penggunaan')->cascadeOnDelete();
            $table->foreignId('pelanggan_id')->references('id')->on('pelanggan')->cascadeOnDelete();
            $table->decimal('total_tagihan');
            $table->char('status')->default('belum bayar');
            $table->integer('bulan');
            $table->char('tahun');
            $table->integer('jumlah_meter');
            $table->integer('biaya_admin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tagihan');
    }
};
