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
        Schema::create('hasznalt', function (Blueprint $table) {
            $table->id();
            $table->string('mennyiseg')->nullable();
            $table->string('egyseg')->nullable();
            $table->unsignedBigInteger('etelid');
            $table->unsignedBigInteger('hozzavaloid');
            $table->timestamps();
    
            $table->foreign('etelid')->references('id')->on('etel')->onDelete('cascade');
            $table->foreign('hozzavaloid')->references('id')->on('hozzavalo')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasznalt');
    }
};
