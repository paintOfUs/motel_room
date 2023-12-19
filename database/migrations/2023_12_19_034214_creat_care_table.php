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
        Schema::dropIfExists('care');
        Schema::create('care', function (Blueprint $table) {
            $table->id();
            $table->string('email',255);
            $table->string('motel_id',20);
            //$table->string('remember_token')->nullable();
            $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('care');
    }
};
