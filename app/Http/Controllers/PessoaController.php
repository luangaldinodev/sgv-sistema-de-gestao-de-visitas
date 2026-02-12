<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePessoaRequest;
use App\Http\Requests\UpdatePessoaRequest;
use App\Models\Pessoa;
use App\Services\UserService;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, UserService $user)
    {
        return $user->UserQueryIndex($request);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.pessoa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePessoaRequest $request)
    {
        Pessoa::create($request->validated());
        return redirect()->route('pessoa.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pessoa = Pessoa::find($id);

        if ($pessoa == null) {
            return redirect()->route('pessoa.index');
        }

        return view('app.pessoa.show', ['pessoa' => $pessoa]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pessoa = Pessoa::find($id);

        if ($pessoa == null) {
            return redirect()->route('pessoa.index');
        }

        return view('app.pessoa.edit', ['pessoa' => $pessoa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePessoaRequest $request, string $id)
    {
        $pessoa = Pessoa::find($id);

        if ($pessoa == null) {
            return redirect()->route('pessoa.index');
        }

        // dd($request);

        $pessoa->update($request->validated());

        return redirect()->route('pessoa.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
