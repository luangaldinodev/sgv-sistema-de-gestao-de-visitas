@extends('templates.body')

@section('titulo', 'Home')

@section('conteudo')

@include('app._components.header')

<div class="">
    <section class="w-7xl mx-auto">
        <div class="grid grid-cols-2 grid-rows-2 gap-3 mt-10">

            <div class="col-span-1 bg-white p-6 rounded-lg flex flex-col gap-2 shadow-md">
                <i class="fa-solid fa-clock text-xl text-neutral-500"></i>
                <h2 class="text-lg font-semibold uppercase text-neutral-500">Aguardando Visita</h2>
                <p class="text-sky-950 font-bold text-4xl">152</p>
            </div>

            <div class="col-span-1 bg-white p-6 rounded-lg flex flex-col gap-2 shadow-md">
                <i class="fa-solid fa-calendar-days text-neutral-500"></i>
                <h2 class="text-lg font-semibold uppercase text-neutral-500">Agendadas</h2>
                <p class="text-sky-950 font-bold text-4xl">43</p>
            </div>

            <div class="col-span-1 bg-white p-6 rounded-lg flex flex-col gap-2 shadow-md">
                <i class="fa-regular fa-calendar-check text-neutral-500"></i>
                <h2 class="text-lg font-semibold uppercase text-neutral-500">Realizadas</h2>
                <p class="text-sky-950 font-bold text-4xl">43</p>
            </div>

            <div class="col-span-1 bg-white p-6 rounded-lg flex flex-col gap-2 shadow-md">
                <i class="fa-solid fa-circle-check text-neutral-500"></i>
                <h2 class="text-lg font-semibold uppercase text-neutral-500">Finalizadas</h2>
                <p class="text-sky-950 font-bold text-4xl">300</p>
            </div>

        </div>

        <div class="grid grid-cols-2 grid-rows-2 gap-3 mt-10">

            <a href="{{ route('pessoa.create') }}" class="col-span-2 p-3 text-white font-semibold rounded-lg text-center bg-sky-500"><i class="fa-solid fa-user-plus"></i> Novo Cadastro</a>
            <a href="#" class="col-span-1 p-3 text-sky-950 font-bold rounded-lg text-center bg-neutral-200 border border-neutral-500/20"><i class="fa-solid fa-calendar-days"></i> Agendar</a>
            <a href="#" class="col-span-1 p-3 text-sky-950 font-bold rounded-lg text-center bg-neutral-200 border border-neutral-500/20"><i class="fa-solid fa-list"></i> Ver Todas</a>

        </div>
    </section>
    
</div>
@endsection