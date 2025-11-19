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
        Schema::create('etel', function (Blueprint $table) {
            $table->id();
            $table->string('nev');
            $table->unsignedBigInteger('kategoriaid');
            $table->date('felirdatum')->nullable();
            $table->date('elsodatum')->nullable();
            $table->timestamps();
    
            $table->foreign('kategoriaid')->references('id')->on('kategoria')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etel');
    }
};
