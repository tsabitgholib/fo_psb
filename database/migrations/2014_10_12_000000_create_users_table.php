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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('nama_orang_tua');
            $table->string('no_hp');
            $table->String('jenis_kelamin');
            $table->String('sekolah');
            $table->String('tagihan');
            $table->String('lunas');
            $table->String('created_time');
            $table->String('transaction_qr_id');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
