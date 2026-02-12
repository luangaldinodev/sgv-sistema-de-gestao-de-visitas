<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitaRequest;
use App\Http\Requests\UpdateVisitaRequest;
use App\Models\Pessoa;
use App\Models\User;
use App\Models\VisitaDomiciliar;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitas = VisitaDomiciliar::all();

        return view('app.visita.index', [
            'visitas' => $visitas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $pessoas = Pessoa::all();

        return view('app.visita.create', [
            'users' => $users,
            'pessoas' => $pessoas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisitaRequest $request)
    {
        $visita = VisitaDomiciliar::create($request->validated());
        return redirect()->route('visita.show', ['id' => $visita]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $visita = VisitaDomiciliar::find($id);

        if ($visita == null) {
            return redirect()->route('visita.index');
        }

        return view('app.visita.show', ['visita' => $visita]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $visita = VisitaDomiciliar::find($id);
        $users = User::orderBy('name', 'asc')->get();
        $pessoas = Pessoa::orderBy('nome_completo', 'asc')->get();

        if ($visita == null) {
            return redirect()->route('visita.index');
        }

        return view('app.visita.edit', [
            'visita' => $visita,
            'users' => $users,
            'pessoas' => $pessoas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisitaRequest $request, string $id)
    {
        $visita = VisitaDomiciliar::find($id);
        
        if($visita == null){
            return redirect()->route('visita.index');
        }

        $visita->update($request->validated());

        return redirect()->route('visita.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
