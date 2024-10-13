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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('numero_documento')->unique();
            $table->string('nombre')->nullable(false);
            $table->string('direccion')->nullable(false);
            $table->string('telefono')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('ciudad')->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};