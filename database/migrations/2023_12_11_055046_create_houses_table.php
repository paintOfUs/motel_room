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
        Schema::dropIfExists('houses');
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->float('area');
            $table->float('cost');
            //$table->('locationID');
            //$table->foreign('locationID')->references('locationID')->on('locations');
            $table->timestamps();
        });
        Schema::table('houses', function (Blueprint $table) {
            $table->foreignId('location_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
