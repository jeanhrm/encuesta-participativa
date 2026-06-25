<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id();
            $table->string('codigo_modular', 8);
            $table->foreign('codigo_modular')->references('codigo_modular')->on('instituciones');
            $table->tinyInteger('z1_p1')->nullable(); $table->tinyInteger('z1_p2')->nullable();
            $table->tinyInteger('z1_p3')->nullable(); $table->tinyInteger('z1_p4')->nullable();
            $table->tinyInteger('z1_p5')->nullable(); $table->tinyInteger('z1_p6')->nullable();
            $table->tinyInteger('z1_p7')->nullable();
            $table->tinyInteger('z2_p1')->nullable(); $table->tinyInteger('z2_p2')->nullable();
            $table->tinyInteger('z2_p3')->nullable(); $table->tinyInteger('z2_p4')->nullable();
            $table->tinyInteger('z2_p5')->nullable(); $table->tinyInteger('z2_p6')->nullable();
            $table->tinyInteger('z3_p1')->nullable(); $table->tinyInteger('z3_p2')->nullable();
            $table->tinyInteger('z3_p3')->nullable(); $table->tinyInteger('z3_p4')->nullable();
            $table->tinyInteger('z3_p5')->nullable(); $table->tinyInteger('z3_p6')->nullable();
            $table->tinyInteger('z3_p7')->nullable(); $table->tinyInteger('z3_p8')->nullable();
            $table->tinyInteger('z3_p9')->nullable(); $table->tinyInteger('z3_p10')->nullable();
            $table->tinyInteger('z4_p1')->nullable(); $table->tinyInteger('z4_p2')->nullable();
            $table->tinyInteger('z4_p3')->nullable(); $table->tinyInteger('z4_p4')->nullable();
            $table->tinyInteger('z4_p5')->nullable(); $table->tinyInteger('z4_p6')->nullable();
            $table->tinyInteger('z4_p7')->nullable(); $table->tinyInteger('z4_p8')->nullable();
            $table->tinyInteger('z4_p9')->nullable(); $table->tinyInteger('z4_p10')->nullable();
            $table->tinyInteger('z5_p1')->nullable(); $table->tinyInteger('z5_p2')->nullable();
            $table->tinyInteger('z5_p3')->nullable(); $table->tinyInteger('z5_p4')->nullable();
            $table->tinyInteger('z5_p5')->nullable(); $table->tinyInteger('z5_p6')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('respuestas');
    }
};