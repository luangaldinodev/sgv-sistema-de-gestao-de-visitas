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

            <div class="grid grid-cols-5 gap-6 mt-10">

                <div class="col-span-3 shadow-lg">
                    <h3
                        class="font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                        <i class="fa-solid fa-user text-sky-500"></i> Dados Pessoais</h3>

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

                <div class="col-span-2 shadow-lg">
                    <h3
                        class="font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                        <i class="fa-solid fa-door-open text-sky-500"></i> Histórico de Visitas</h3>

                    <div
                        class="col-start-1 col-end-4 grid grid-cols-4 gap-6 p-6 bg-neutral-50 border-x border-b border-neutral-500/30 rounded-b-lg">

                        <div class="col-span-4">
                            <p class="uppercase text-sm mb-1 text-neutral-600 font-semibold">Responsável pela unidade
                                familíar
                            </p>

                            @foreach ($pessoa->visita as $visitas)
                                {{ $visitas->status_visita }}
                            @endforeach

                            {{-- <h2 class="font-bold text-4xl {{ $pessoa->visita->status_visita == 'Unipessoal' ? 'text-orange-700 bg-orange-300/30' : 'text-green-700 bg-green-300/30' }}">{{ $pessoa->visita->status_visita }}</h2> --}}
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

                <div class="col-span-3 shadow-lg">
                    <h3
                        class="font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                        <i class="fa-solid fa-circle-info text-sky-500"></i> Informações do Cadastro</h3>

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

            </div>


        </section>

    </div>
@endsection
