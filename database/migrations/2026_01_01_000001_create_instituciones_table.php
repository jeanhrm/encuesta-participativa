<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('instituciones', function (Blueprint $table) {
            $table->string('codigo_modular', 10)->primary();
            $table->string('codigo_local')->nullable();
            $table->string('codigo_institucion')->nullable();
            $table->string('nombre_ie');
            $table->string('nivel_modalidad')->nullable();
            $table->string('forma')->nullable();
            $table->string('genero')->nullable();
            $table->string('tipo_gestion')->nullable();
            $table->string('dependencia')->nullable();
            $table->string('direccion_ie')->nullable();
            $table->string('localidad')->nullable();
            $table->string('centro_poblado')->nullable();
            $table->string('area_geografica')->nullable();
            $table->string('provincia')->nullable();
            $table->string('distrito')->nullable();
            $table->string('ugel')->nullable();
            $table->string('tipo_programa')->nullable();
            $table->string('turno')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('instituciones');
    }
};