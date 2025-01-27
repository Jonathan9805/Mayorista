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
        Schema::create('renovacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('solicitud');
            $table->string('cedula');
            $table->string('pago_patente');
            $table->string('no_adeudar');
            $table->string('carta');
            $table->string('especie');
            $table->string('ruc');
            $table->string('certificado_salud');
            $table->string('renovacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('renovacion');
    }
};
