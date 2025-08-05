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
        Schema::create('vehicle_counts', function (Blueprint $table) {
            $table->id();
            $table->string('location');
            $table->integer('car_count');
            $table->integer('motorbike_count');
            $table->integer('truck_count');
            $table->integer('bus_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_counts');
    }
};
