<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('etel', function (Blueprint $table) {
            $table->string('kep')->nullable()->after('nev');
        });
    }

    public function down(): void
    {
        Schema::table('etel', function (Blueprint $table) {
            $table->dropColumn('kep');
        });
    }
};