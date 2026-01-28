<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        VisitaDomiciliar::create($request->all());

        return redirect()->route('visita.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
