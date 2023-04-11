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
        Schema::table('ducks', function (Blueprint $table) {
            $table->id();
            $table->string('Price', 255);
            $table->string('Rarity', 255);
            $table->string('Color', 255);
            $table->string('Theme', 255);
            $table->string('Manufacturer', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ducks', function (Blueprint $table) {
            //
        });
    }
};
