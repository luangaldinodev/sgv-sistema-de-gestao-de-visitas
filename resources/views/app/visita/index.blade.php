@extends('templates.body')

@section('titulo', 'Pessoas/Familías')

@section('conteudo')

    @include('app._components.header')

    <div class="">
        <section class="w-7xl mx-auto">

            <div class="mt-10 flex items-center justify-between">
                <div>
                    <h2 class="text-sky-950 font-bold text-4xl">Visitas Cadastradas</h2>
                    <p class="text-neutral-600 font-semibold">Listagem de visitas registradas para atendimento do CadÚnico
                    </p>
                </div>

                <a href="{{ route('visita.create') }}"
                    class="py-3 px-5 font-semibold text-white rounded-sm cursor-pointer bg-emerald-500 shadow-lg shadow-emerald-200"><i
                        class="fa-solid fa-user-plus mr-2"></i> Nova Visita</a>

            </div>

            <div class="bg-white my-10 rounded-lg border border-neutral-500/30 shadow-xl">
                <table class="w-full text-left">
                    <tr class="rounded-lg ">
                        <th
                            class="pl-8 py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100 rounded-tl-lg">
                            Entrevistador</th>
                        <th class="py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            Pessoa / cpf</th>
                        <th
                            class="py-4 uppercase text-sm text-center text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            Status</th>
                        <th class="py-4 uppercase text-sm text-center text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            Data prevista</th>
                        <th class="py-4 uppercase text-sm text-center text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            Data de visita</th>
                        <th
                            class="pr-4 py-4 text-center uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100 rounded-tr-lg">
                            Ações</th>
                    </tr>
                    @foreach ($visitas as $visita)
                        <tr>
                            <td class="py-4 pl-8 font-bold border-b border-neutral-500/30">
                                {{ $visita->entrevistador->name }}</td>

                            <td class="py-4 border-b border-neutral-500/30"><a
                                    href="{{ route('pessoa.show', [$visita->pessoaFamilia->id]) }}"
                                    class="hover:underline hover:text-sky-500 inline-block">
                                    <div class="flex flex-col">
                                        <span class="font-semibold">
                                            {{ $visita->pessoaFamilia->nome_completo }}
                                        </span>
                                        <span class="text-neutral-600">
                                            {{ $visita->pessoaFamilia->cpf }}
                                        </span>
                                    </div>
                                </a>
                            </td>

                            <td class="py-4 font-semibold text-center border-b border-neutral-500/30">
                                <p
                                    class="text-center inline text-sm py-1 px-3 rounded-full {{ $visita->status_visita == 'Pendente' ? 'text-amber-500 bg-amber-300/30' : ($visita->status_visita == 'Realizada' ? 'text-green-600 bg-green-300/30' : ($visita->status_visita == 'Reagendar' ? 'text-purple-700 bg-purple-300/30' : ($visita->status_visita == 'Não localizado' ? 'text-red-700 bg-red-300/30' : ''))) }}">
                                    {{ $visita->status_visita }} </p>
                            </td>

                            <td class="py-4 text-center border-b border-neutral-500/30">
                                {{ \Carbon\Carbon::parse($visita->data_prevista)->format('d/m/Y') }}</td>

                            <td class="py-4 text-center border-b border-neutral-500/30">
                                {{ \Carbon\Carbon::parse($visita->data_realizada)->format('d/m/Y') }}</td>

                            <td class="text-center font-semibold border-b border-neutral-500/30">
                                <div class="flex items-center gap-3 justify-center">
                                    {{-- <a href="{{ route('pessoa.show', ['']) }}" class="text-sky-950 hover:text-sky-500"><i class="fa-solid fa-eye"></i></a> --}}
                                    <a href="#" class="text-sky-950 hover:text-sky-500"><i
                                            class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="text-sky-950 hover:text-sky-500"><i
                                            class="fa-solid fa-trash"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    <tr class="rounded-lg ">
                        <th
                            class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100 rounded-bl-lg">
                        </th>
                        <th
                            class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100">
                        </th>
                        <th
                            class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100">
                        </th>
                        <th
                            class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100">
                        </th>
                        <th
                            class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100">
                        </th>
                        <th
                            class="px-8 py-4 uppercase text-sm text-neutral-600/0 border-t border-neutral-500/30 bg-neutral-100 rounded-br-lg">
                            Ações</th>
                    </tr>
                </table>
            </div>

        </section>

    </div>
@endsection
