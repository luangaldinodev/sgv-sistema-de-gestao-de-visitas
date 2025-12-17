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
        Schema::create('historico_atendimento', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('pessoa_familia_id');
            $table->foreign('pessoa_familia_id')->references('id')->on('pessoa_familia');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->string('acao_realizada')->nullable();
            $table->text('observacoes')->nullable();
            $table->date('data_acao')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historico_atendimento');
    }
};
