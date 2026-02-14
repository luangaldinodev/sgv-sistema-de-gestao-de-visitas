<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use App\Models\VisitaDomiciliar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $visitasPendentes = VisitaDomiciliar::where('status_visita', 'Pendente')->count();
        $visitasRealizadas = VisitaDomiciliar::where('status_visita', 'Realizada')->count();
        $visitasNaoLocalizados = VisitaDomiciliar::where('status_visita', 'Não Localizado')->count();
        $totalPessoas = Pessoa::count();
    
        return view('home', [
            'visitasPendentes' => $visitasPendentes,
            'visitasRealizadas' => $visitasRealizadas,
            'visitasNaoLocalizados' => $visitasNaoLocalizados,
            'totalPessoas' => $totalPessoas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
