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
        Schema::create('mesyuarat_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mesyuarat_id')->unsigned();
            $table->unsignedBigInteger('user_id');

            $table->foreign('mesyuarat_id')->references('id')->on('mesyuarat')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mesyuarat_user');
    }
};
