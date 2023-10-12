<?php

use Illuminate\Database\Migrations\Migration; // Importa la clase Migration de Laravel
use Illuminate\Database\Schema\Blueprint; // Importa la clase Blueprint de Laravel
use Illuminate\Support\Facades\Schema; // Importa la clase Schema de Laravel

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tests', function (Blueprint $table) {
            // Define la estructura de la tabla 'tests'

            $table->id(); // Crea una columna 'id' autoincremental como clave primaria

            $table->string('name'); // Crea una columna 'name' de tipo string
            $table->string('lastname'); // Crea una columna 'lastname' de tipo string
            $table->string('email'); // Crea una columna 'email' de tipo string

            $table->timestamps(); // Crea columnas 'created_at' y 'updated_at' para el registro de timestamps

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tests'); // Elimina la tabla 'tests' si se revierte la migración
    }
};
