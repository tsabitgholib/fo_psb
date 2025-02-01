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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->String('user_id');
            $table->Date('tanggal_transaksi');
            $table->String('created_time');
            $table->String('transaction_qr_id');
            $table->String('va_number');
            $table->String('transaksi');
            $table->String('method');
            $table->String('lunas');
            $table->Double('for_ict');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
