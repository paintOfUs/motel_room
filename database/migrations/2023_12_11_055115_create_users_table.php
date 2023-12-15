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
            $table->string('user_name',255);
            $table->string('sex',20)->nullable();
            $table->string('email',255)->unique();
            $table->string('password',255);
            $table->string('phone',20)->nullable();
            $table->integer('role')->nullable();
            $table->longText('img')->nullable();
            //$table->string('remember_token')->nullable();
            $table->timestamps();;
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
