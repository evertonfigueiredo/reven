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
        Schema::table('diario', function (Blueprint $table) {
            // Alterando os campos para permitir valores nulos
            $table->integer('max')->nullable()->change();
            $table->integer('min')->nullable()->change();
            $table->integer('fechamento')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('diario', function (Blueprint $table) {
            // Revertendo os campos para não permitir valores nulos
            $table->integer('max')->nullable(false)->change();
            $table->integer('min')->nullable(false)->change();
            $table->integer('fechamento')->nullable(false)->change();
        });
    }
};
