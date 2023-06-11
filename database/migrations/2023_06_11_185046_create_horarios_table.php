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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->enum("dia_de_la_semana", ['Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo']);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->foreignId('materia_id')->constrained('materias')->onDelete('cascade');
            $table->foreignId('docente_id')->constrained('docentes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};