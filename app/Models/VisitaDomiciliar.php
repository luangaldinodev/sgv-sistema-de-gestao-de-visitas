<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VisitaDomiciliar extends Model
{
    use SoftDeletes;

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
        return $this->belongsTo(User::class);
    }
}
