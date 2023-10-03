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
        Schema::create('mesyuarat', function (Blueprint $table) {
            $table->id();
            $table->string('perkara');
            $table->date('tarikh')->nullable();
            $table->time('masa_mula')->nullable();
            $table->time('masa_tamat')->nullable();
            $table->string('lokasi');
            $table->string('ahli')->nullable();
            $table->string('status', 10)->default('draf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesyuarat');
    }
};
