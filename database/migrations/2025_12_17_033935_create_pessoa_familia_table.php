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
        Schema::create('pessoa_familia', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo', 150);
            $table->string('cpf', 14)->unique();
            $table->string('telefone', 14)->nullable();
            $table->string('endereço', 14)->nullable();
            $table->enum('tipo_familia', ['Unipessoal', 'Familiar']);
            $table->enum('tipo_cadastro', ['Novo', 'Atualização']);
            $table->string('status_atendimento')->nullable();
            $table->text('observacoes')->nullable();
            $table->date('data_cadastro')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pessoa_familia');
    }
};
