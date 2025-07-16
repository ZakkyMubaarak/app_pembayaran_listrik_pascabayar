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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tagihan_id')->references('id')->on('tagihan');
            $table->foreignId('pelanggan_id')->references('id')->on('pelanggan');
            $table->string('midtrans_order_id')->nullable();
            $table->string('payment_type')->nullable();
            $table->char('payment_status')->default('pending');
            $table->decimal('total_bayar', 10, 2);
            $table->string('transaction_id')->nullable();
            $table->datetime('transaction_time')->nullable();
            $table->string('va_number')->nullable();
            $table->string('fraud_status')->nullable();
            $table->text('payment_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
