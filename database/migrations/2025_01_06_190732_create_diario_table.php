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
        Schema::create('diario', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->decimal('abertura', 10, 2);
            $table->decimal('max', 10, 2);
            $table->decimal('min', 10, 2);
            $table->decimal('fechamento', 10, 2);
            $table->decimal('range', 10, 2)->virtualAs('max - min'); // Define 'range' como coluna calculada
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diario');
    }
};
