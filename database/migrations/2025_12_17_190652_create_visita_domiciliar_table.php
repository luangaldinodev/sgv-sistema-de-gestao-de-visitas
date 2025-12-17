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
        Schema::create('visita_domiciliar', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('pessoa_familia_id');
            $table->foreign('pessoa_familia_id')->references('id')->on('pessoa_familia');
            
            $table->unsignedBigInteger('entrevistador_id');
            $table->foreign('entrevistador_id')->references('id')->on('users');
            
            $table->date('data_prevista')->nullable();
            $table->date('data_realizada')->nullable();

            $table->enum('status_visita', ['Pendente', 'Realizada', 'Não localizado', 'Reagendar']);

            $table->text('observacoes')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visita_domiciliar');
    }
};
