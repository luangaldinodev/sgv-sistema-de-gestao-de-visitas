<?php

namespace App\Services;

use App\Models\Pessoa;
use Barryvdh\DomPDF\Facade\Pdf;

class PessoaService
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function pessoaQueryIndex($request)
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

    public function pessoaExportarPdf(string $id)
    {
        $pessoa = Pessoa::find($id);

        if ($pessoa == null) {
            return redirect()->route('pessoa.index');
        }

        $pdf = Pdf::loadView('app.pessoa.pdf.show', ['pessoa' => $pessoa]);

        $nomePdf = $pessoa->nome_completo . ' - ' . $pessoa->cpf;

        return $pdf->download("$nomePdf.pdf");
    }
}
