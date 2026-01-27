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
        'status_atentimento',
        'observacoes',
        'data_cadastro'
    ];


    public function visitaDomiciliar(){
        return $this->hasMany(VisitaDomiciliar::class);
    }
}
