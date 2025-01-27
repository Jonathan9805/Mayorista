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
        Schema::create('pdf_files', function (Blueprint $table) {
            $table->id();
            $table->string('solicitud');
            $table->string('cedula');
            $table->string('pago_patente');
            $table->string('no_adeudar');
            $table->string('especie');
            $table->string('ruc');
            $table->string('cursos');
            $table->string('certificado_salud');
            $table->string('certificado_honorabilidad1');
            $table->string('certificado_honorabilidad2');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdf_files');
    }
};
