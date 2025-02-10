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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->String('nisn');
            $table->String('tempat_lahir');
            $table->Date('tanggal_lahir');
            $table->String('alamat');
            $table->String('nama_ayah');
            $table->String('nama_ibu');
            $table->String('pekerjaan_ayah');
            $table->String('pekerjaan_ibu');
            $table->String('penghasilan_ortu');
            $table->String('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
