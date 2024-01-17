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
        Schema::create('travel_days', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->char('title_day', 50);
            $table->text('description_day');
            $table->timestamps();
            $table->unsignedBigInteger('travel_id');

            $table->foreign('travel_id')->references('id')->on('travels')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('travel_days');
    }
};
