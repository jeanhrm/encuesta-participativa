<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->string('codigo_modular', 8)->primary();
            $table->string('nombre_ie');
            $table->string('ugel');
            $table->string('distrito');
            $table->string('provincia');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('instituciones');
    }
};