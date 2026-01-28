<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $table = 'pessoa_familia';

    protected $fillable = [
        'nome_completo',
        'cpf',
        'telefone',
        'endereço',
        'tipo_familia',
        'tipo_cadastro',
        'status_atentimento',
        'observacoes',
        'data_cadastro'
    ];


    public function visita(){
        return $this->hasMany(VisitaDomiciliar::class, 'pessoa_familia_id');
    }
}
