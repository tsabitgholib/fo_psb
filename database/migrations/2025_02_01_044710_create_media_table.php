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
        if (!Schema::hasTable('media')){
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->string('media_1')->nullable();
            $table->string('media_2')->nullable();
            $table->string('media_3')->nullable();
            $table->string('media_4')->nullable();
            $table->string('media_5')->nullable();
            $table->timestamps();
        });
    }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
