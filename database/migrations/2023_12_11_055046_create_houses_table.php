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
            $table->string('manager',30);
            $table->string('house_name',30);
            $table->float('area');
            $table->float('cost');
            $table->string('city',30);
            $table->string('district',30);
            $table->timestamps();
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
