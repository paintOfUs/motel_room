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
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name',60);
            $table->string('sex',10)->nullable();
            $table->string('email',30)->unique();
            $table->string('password',30);
            $table->string('phone',20);
            $table->string('role',30);
            //$table->unsignedBigInteger('houseID')->nullable();
            //$table->foreign('houseID')->references('houseID')->on('houses')->onDelete('set null');
            $table->timestamps();
        });
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('house_id')->constrained();
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
