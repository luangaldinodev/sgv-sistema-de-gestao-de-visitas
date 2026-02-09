@extends('templates.body')

@section('titulo', 'Pessoas/Familías')

@section('conteudo')

    @include('app._components.header')

    <div class="">
        <section class="w-7xl mx-auto">

            <div class="mt-10 flex items-center justify-between">
                <div>
                    <h2 class="text-sky-950 font-bold text-4xl">Detalhes do Cadastro</h2>
                    <p class="text-neutral-600 font-semibold">Código Familiar / NIS: 132154354
                    </p>
                </div>

                <div class="flex items-center gap-6">
                    <a href="{{ route('visita.create') }}"
                        class="py-3 px-5 font-semibold text-white rounded-sm cursor-pointer bg-emerald-500 shadow-lg shadow-emerald-200"><i
                            class="fa-solid fa-user-plus mr-2"></i> Nova Pessoa</a>

                    <a href="{{ route('pessoa.create') }}"
                        class="py-3 px-5 font-semibold border border-neutral-500/30 text-sky-950 rounded-sm cursor-pointer bg-white"><i
                            class="fa-solid fa-print mr-2"></i> Imprimir Ficha</a>
                </div>
            </div>

            <div class="grid grid-cols-5 gap-6 my-10 ">

                <div class="col-span-3">
                    <div class="shadow-lg mb-6 rounded-lg">
                        <h3
                            class="font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                            <i class="fa-solid fa-user text-sky-500"></i> Dados Pessoais
                        </h3>

                        <div
                            class="col-start-1 col-end-4 grid grid-cols-4 gap-6 p-6 bg-neutral-50 border-x border-b border-neutral-500/30 rounded-b-lg">

                            <div class="col-span-4">
                                <p class="uppercase text-sm mb-1 text-neutral-600 font-semibold">Responsável pela unidade
                                    familíar
                                </p>
                                <h2 class="text-sky-500 font-bold text-4xl">{{ $pessoa->nome_completo }}</h2>
                            </div>

                            <div class="col-start-1 col-end-3">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">CPF</p>
                                <h2 class=" font-bold">{{ $pessoa->cpf }}</h2>
                            </div>

                            <div class="col-span-2">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Telefone de Contato</p>
                                <h2 class=" font-bold">{{ $pessoa->telefone }}</h2>
                            </div>

                            <div class="col-span-4">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Endereço completo</p>
                                <h2 class=" font-bold">{{ $pessoa->endereço }}</h2>
                            </div>

                        </div>
                    </div>

                    <div class="shadow-lg mb-6 rounded-lg">

                        <h3
                            class="font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                            <i class="fa-solid fa-circle-info text-sky-500"></i> Informações do Cadastro
                        </h3>

                        <div
                            class="col-start-1 col-end-4 grid grid-cols-4 gap-6 p-6 bg-white border-x border-b border-neutral-500/30 rounded-b-lg">

                            <div class="col-span-2 bg-neutral-100 px-6 py-4 rounded-lg border border-neutral-500/30">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Tipo de familía</p>
                                <h2 class=" font-bold">{{ $pessoa->tipo_familia }}</h2>
                            </div>

                            <div class="col-span-2 bg-neutral-100 px-6 py-4 rounded-lg border border-neutral-500/30">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Tipo de Cadastro</p>
                                <h2 class=" font-bold">{{ $pessoa->tipo_cadastro }}</h2>
                            </div>

                            <div class="col-span-2 bg-neutral-100 px-6 py-4 rounded-lg border border-neutral-500/30">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Data e hora de Registro</p>
                                <h2 class=" font-bold">{{ $pessoa->created_at->format('d/m/Y - H:i') }}</h2>
                            </div>

                            <div class="col-span-2 bg-neutral-100 px-6 py-4 rounded-lg border border-neutral-500/30">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Endereço completo</p>
                                <h2 class=" font-bold">{{ $pessoa->endereço }}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="shadow-lg mb-6 rounded-lg">

                        <h3
                            class="font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                            <i class="fa-solid fa-file-lines text-sky-500"></i> Observações
                        </h3>

                        <div
                            class="grid grid-cols-4 gap-6 p-6 bg-white border-x border-b border-neutral-500/30 rounded-b-lg">

                            <div class="col-span-4 bg-neutral-100 px-6 py-4 rounded-lg border-2 border-dashed border-neutral-500/30">
                                <p class=" font-bold">{{ $pessoa->observacoes }}</p>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-span-2 shadow-lg rounded-lg self-start">
                    <h3
                        class="font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                        <i class="fa-solid fa-door-open text-sky-500"></i> Histórico de Visitas
                    </h3>

                    <div
                        class="col-start-1 col-end-4 grid grid-cols-4 gap-6 p-6 bg-neutral-50 border-x border-b border-neutral-500/30 rounded-b-lg">
                        
                        @foreach ($pessoa->visita as $visitas)
                            <div class="col-span-4 border-b border-neutral-500/30 pb-3">
                                <div class="flex items-center justify-between mb-1">
                                    <p class="uppercase text-sm text-neutral-600 font-semibold">Status da visita</p>
                                    <p class="text-neutral-600 text-sm font-semibold">
                                        {{ \Carbon\Carbon::parse($visitas->data_prevista)->format('d/m/Y') }}</p>
                                </div>
                                <p
                                    class="mb-1 font-bold text-lg flex items-center gap-1 rounded-full uppercase {{ $visitas->status_visita == 'Pendente' ? 'text-amber-500' : ($visitas->status_visita == 'Realizada' ? 'text-green-600' : ($visitas->status_visita == 'Reagendar' ? 'text-purple-700' : ($visitas->status_visita == 'Não localizado' ? 'text-red-700' : ''))) }}">
                                    {!! $visitas->status_visita == 'Pendente'
                                        ? '<i class="fa-solid fa-clock-rotate-left"></i>'
                                        : ($visitas->status_visita == 'Realizada'
                                            ? '<i class="fa-solid fa-circle-check"></i>'
                                            : ($visitas->status_visita == 'Reagendar'
                                                ? '<i class="fa-solid fa-calendar-days"></i>'
                                                : ($visitas->status_visita == 'Não localizado'
                                                    ? '<i class="fa-solid fa-circle-xmark"></i>'
                                                    : ''))) !!} {{ $visitas->status_visita }}</p>

                                <p class="text-neutral-600 text-sm font-semibold">Responsável pela Visita:
                                    {{ $visitas->entrevistador->name }}</p>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>


        </section>

    </div>
@endsection
