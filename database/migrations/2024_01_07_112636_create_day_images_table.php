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
        Schema::create('day_images', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->binary('image');
            $table->timestamps();
            $table->unsignedBigInteger('travel_day_id');

            $table->foreign('travel_day_id')->references('id')->on('travel_days')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('day_images');
    }
};
