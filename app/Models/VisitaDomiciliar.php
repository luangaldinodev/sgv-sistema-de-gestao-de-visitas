<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VisitaDomiciliar extends Model
{
    protected $table = 'visita_domiciliar';

    protected $fillable = [
        'pessoa_familia_id',
        'entrevistador_id',
        'data_prevista',
        'data_realizada',
        'status_visita',
        'observacoes'
    ];

    public function pessoaFamilia(){
        return $this->belongsTo(Pessoa::class);
    }

    public function entrevistador(){
        return $this->hasOne(User::class);
    }
}
