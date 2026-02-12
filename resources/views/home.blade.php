@extends('templates.body')

@section('titulo', 'Home')

@section('conteudo')

    @include('app._components.header')

    <div class="">
        <section class="w-7xl mx-auto">
            <div class="grid grid-cols-2 grid-rows-2 gap-3 mt-10">

                <div class="col-span-1 bg-white p-6 rounded-lg flex flex-col gap-2 shadow-md">
                    <i class="fa-solid fa-clock text-xl text-amber-500"></i>
                    <h2 class="text-lg font-semibold uppercase text-neutral-500">Visitas Pendetes</h2>
                    <p class="text-sky-950 font-bold text-4xl">{{ $visitasPendentes }}</p>
                </div>

                <div class="col-span-1 bg-white p-6 rounded-lg flex flex-col gap-2 shadow-md">
                    <i class="fa-regular fa-calendar-check text-green-600"></i>
                    <h2 class="text-lg font-semibold uppercase text-neutral-500">Realizadas</h2>
                    <p class="text-sky-950 font-bold text-4xl">{{ $visitasRealizadas }}</p>
                </div>

                <div class="col-span-1 bg-white p-6 rounded-lg flex flex-col gap-2 shadow-md">
                    <i class="fa-solid fa-calendar-days text-red-600"></i>
                    <h2 class="text-lg font-semibold uppercase text-neutral-500">Não Localizados</h2>
                    <p class="text-sky-950 font-bold text-4xl">{{ $visitasNaoLocalizados }}</p>
                </div>

                <div class="col-span-1 bg-white p-6 rounded-lg flex flex-col gap-2 shadow-md">
                    <i class="fa-solid fa-user text-sky-500"></i>
                    <h2 class="text-lg font-semibold uppercase text-neutral-500">Total de Pessoas Cadastradas</h2>
                    <p class="text-sky-950 font-bold text-4xl">{{ $totalPessoas }}</p>
                </div>

            </div>

            <div class="grid grid-cols-2 grid-rows-2 gap-3 my-10">

                <a href="{{ route('pessoa.create') }}"
                    class="col-span-2 p-3 text-white font-semibold rounded-lg text-center bg-sky-500"><i
                        class="fa-solid fa-user-plus"></i> Novo Cadastro</a>
                <a href="{{ route('visita.index') }}"
                    class="col-span-1 p-3 text-sky-950 font-bold rounded-lg text-center bg-neutral-200 border border-neutral-500/20"><i
                        class="fa-solid fa-list"></i> Ver Todas Visitas</a>

                @if (auth()->user()?->perfil == 2)
                    <a href="{{ route('visita.create') }}"
                        class="col-span-1 p-3 text-sky-950 font-bold rounded-lg text-center bg-neutral-200 border border-neutral-500/20"><i
                            class="fa-solid fa-calendar-days"></i> Agendar Visita</a>
                @endif

            </div>
        </section>

    </div>

    @include('app._components.footer')

@endsection
