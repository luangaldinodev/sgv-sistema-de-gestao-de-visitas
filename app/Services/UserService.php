<?php

namespace App\Services;

use App\Models\Pessoa;

class UserService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function UserQueryIndex($request)
    {
        $nomeCompleto = $request->get('nome_completo');
        $cpf = $request->get('cpf');

        if ($nomeCompleto || $cpf) {
            $query = Pessoa::query();

            if (!empty($cpf)) {
                $query->where('cpf', $cpf);
            }

            if (!empty($nomeCompleto)) {
                $query->orWhere('nome_completo', 'like', "%{$nomeCompleto}%");
            }

            $pessoas = $query->get();
            return view('app.pessoa.index', ['pessoas' => $pessoas]);
        }

        $pessoas = Pessoa::orderBy('nome_completo', 'asc')->get();
        return view('app.pessoa.index', ['pessoas' => $pessoas]);
    }
}
