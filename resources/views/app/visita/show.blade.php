@extends('templates.body')

@section('titulo', 'Visita')

@section('conteudo')

    @include('app._components.header')

    <div class="">
        <section class="w-7xl mx-auto">

            <div class="mt-10 flex items-center justify-between">
                <div>
                    <h2 class="text-sky-950 font-bold text-4xl">Detalhes da Visita</h2>
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

                <div class="col-span-2">
                    <div class="shadow-lg mb-6 rounded-lg">
                        <h3
                            class="font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                            <i class="fa-solid fa-user text-sky-500"></i> Dados da Familía
                        </h3>

                        <div
                            class="col-start-1 col-end-4 grid grid-cols-4 gap-6 p-6 bg-white border-x border-b border-neutral-500/30 rounded-b-lg">

                            <div class="col-span-4">
                                <p class="uppercase text-sm mb-1 text-neutral-600 font-semibold">Responsável pela unidade
                                    familíar</p>
                                <a href="{{ route('pessoa.show', $visita->pessoaFamilia->id) }}"
                                    class="font-bold hover:underline">{{ $visita->pessoaFamilia->nome_completo }}</a>
                                </p>
                            </div>

                            <div class="col-start-1 col-end-3">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">CPF</p>
                                <h2 class=" font-bold">{{ $visita->pessoaFamilia->cpf }}
                                </h2>
                            </div>

                            <div class="col-span-2">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Telefone</p>
                                <h2 class=" font-bold">{{ $visita->pessoaFamilia->telefone }}
                                </h2>
                            </div>

                            <div class="col-span-4">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Endereço completo</p>
                                <h2 class=" font-bold">{{ $visita->pessoaFamilia->endereço }}</h2>
                            </div>

                            <div class="col-start-1 col-end-3">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Tipo de Familía</p>
                                <h2 class=" font-bold">{{ $visita->pessoaFamilia->tipo_familia }}
                                </h2>
                            </div>

                            <div class="col-span-2">
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Tipo de Cadastro</p>
                                <h2 class=" font-bold">{{ $visita->pessoaFamilia->tipo_cadastro }}
                                </h2>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-span-3 shadow-lg rounded-lg self-start bg-white">
                    <h3
                        class="flex items-center justify-between bg-neutral-100 font-bold text-lg col-span-3 px-6 py-3 text-neutral-600 border border-neutral-500/30 rounded-t-lg">
                        <div>
                            <i class="fa-solid fa-door-open text-sky-500"></i> Histórico de Visita
                        </div>

                        <p
                            class="font-bold text-sm uppercase rounded-full px-4 py-1 {{ $visita->status_visita == 'Pendente' ? 'text-amber-500 bg-amber-300/30 border' : ($visita->status_visita == 'Realizada' ? 'text-green-600 bg-green-300/30 border' : ($visita->status_visita == 'Reagendar' ? 'text-purple-700 bg-purple-300/30 border' : ($visita->status_visita == 'Não localizado' ? 'text-red-700 bg-red-300/30 border' : ''))) }}">
                            <i class="fa-solid fa-circle text-xs mr-1"></i> {{ $visita->status_visita }}
                        </p>
                    </h3>

                    <div class="grid grid-cols-4 gap-6 border-x border-b border-neutral-500/30 rounded-b-lg p-6">

                        <div class="col-start-1 col-end-3 flex items-center gap-3">
                            <div class="bg-neutral-100 text-sky-500 text-2xl p-2 rounded-lg">
                                <i class="fa-solid fa-calendar "></i>
                            </div>
                            <div>
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Data prevista</p>
                                <p class="font-bold">{{ \Carbon\Carbon::parse($visita->data_prevista)->format('d/m/Y') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-span-2 flex items-center gap-3">
                            <div class="bg-neutral-100 text-sky-500 text-2xl p-2 rounded-lg">
                                <i class="fa-solid fa-calendar "></i>
                            </div>
                            <div>
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Data da Visita</p>
                                <p class="font-bold">{{ \Carbon\Carbon::parse($visita->data_realizada)->format('d/m/Y') }}
                                </p>
                            </div>
                        </div>

                        <div class="col-span-4 flex items-center gap-3">
                            <div class="bg-neutral-100 text-sky-500 text-2xl p-2 rounded-lg">
                                <i class="fa-regular fa-id-badge"></i>
                            </div>
                            <div>
                                <p class="uppercase text-sm text-neutral-600 font-semibold">Responsável pela visita</p>
                                <p class="font-bold">{{ $visita->entrevistador->name }}
                                </p>
                            </div>
                        </div>

                        <div class="col-span-4">
                            <p class="uppercase text-sm text-neutral-600 font-semibold mb-1">Observações</p>
                            <div
                                class="bg-neutral-100 px-6 py-4 rounded-lg border-2 border-dashed border-neutral-500/30">
                                <p class=" font-bold">{{ $visita->observacoes }}</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </section>

    </div>

    @include('app._components.footer')

@endsection
