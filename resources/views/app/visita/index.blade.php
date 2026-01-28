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

                <a href="{{ route('visita.create') }}" class="py-3 px-5 font-semibold text-white rounded-sm cursor-pointer bg-emerald-500 shadow-lg shadow-emerald-200"><i class="fa-solid fa-user-plus mr-2"></i> Nova Visita</a>

            </div>

            <div class="bg-white mt-10 rounded-lg border border-neutral-500/30 shadow-xl">
                <table class="w-full text-left">
                    <tr class="rounded-lg ">
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100 rounded-tl-lg">Entrevistador</th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">Pessoa / Familía</th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">Status</th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">Data prevista</th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">Data de visita</th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100 rounded-tr-lg">Ações</th>
                    </tr>
                    @foreach ($visitas as $visita)
                        <tr>
                            <td class="px-8 py-4 font-bold border-b border-neutral-500/30">{{ $visita->entrevistador->name }}</td>
                            <td class="px-8 py-4 font-bold border-b border-neutral-500/30"><a href="{{ route('pessoa.show', [$visita->pessoaFamilia->id]) }}" class="hover:underline hover:text-sky-500">{{ $visita->pessoaFamilia->nome_completo }}</a></td>
                            <td class="px-8 py-4 font-semibold  text-yellow-700 border-b border-neutral-500/30"><p class="text-center py-1 rounded-full bg-yellow-300/30">{{ $visita->status_visita }}</p></td>
                            <td class="px-8 py-4 border-b border-neutral-500/30">{{ \Carbon\Carbon::parse($visita->data_visita)->format('d/m/Y') }}</td>
                            <td class="px-8 py-4 border-b border-neutral-500/30">{{ \Carbon\Carbon::parse($visita->data_realizada)->format('d/m/Y') }}</td>
                        </tr>
                    @endforeach

                    <tr class="rounded-lg ">
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100 rounded-bl-lg"></th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100"></th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100"></th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100"></th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600 border-t border-neutral-500/30 bg-neutral-100"></th>
                        <th class="px-8 py-4 uppercase text-sm text-neutral-600/0 border-t border-neutral-500/30 bg-neutral-100 rounded-br-lg">Ações</th>
                    </tr>
                </table>
            </div>

        </section>

    </div>
@endsection
