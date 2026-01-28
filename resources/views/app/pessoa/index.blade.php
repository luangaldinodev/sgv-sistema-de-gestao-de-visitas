@extends('templates.body')

@section('titulo', 'Pessoas/Familías')

@section('conteudo')

    @include('app._components.header')

    <div class="">
        <section class="w-7xl mx-auto">

            <div class="mt-10 flex items-center justify-between">
                <div>
                    <h2 class="text-sky-950 font-bold text-4xl">Pessoas / Familías Cadastradas</h2>
                    <p class="text-neutral-600 font-semibold">Listagem de pessoas/familías registradas para atendimento do CadÚnico
                    </p>
                </div>

                <a href="{{ route('pessoa.create') }}"
                    class="py-3 px-5 font-semibold text-white rounded-sm cursor-pointer bg-emerald-500 shadow-lg shadow-emerald-200"><i
                        class="fa-solid fa-user-plus mr-2"></i> Nova Pessoa</a>

            </div>

            <div class="bg-white my-10 rounded-lg border border-neutral-500/30 shadow-xl">
                <table class="w-full text-left">
                    <tr class="rounded-lg ">
                        <th
                            class="pl-8 py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100 rounded-tl-lg">
                            Nome completo</th>
                        <th
                            class="py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            cpf / tel</th>
                        <th
                            class="py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            endereço</th>
                        <th
                            class="py-4 text-center uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            tipo familia</th>
                        <th
                            class="py-4 text-center uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            tipo cadastro</th>
                        {{-- <th
                            class="py-4 text-center uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            status atendimento</th> --}}
                        <th
                            class="py-4 uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100">
                            data cadastro</th>
                        <th
                            class="pr-4 py-4 text-center uppercase text-sm text-neutral-600 border-b border-neutral-500/30 bg-neutral-100 rounded-tr-lg">
                            Ações</th>
                    </tr>

                    @foreach ($pessoas as $pessoa)
                        <tr>
                            <td class="py-4 pl-8 font-bold border-b border-neutral-500/30"><a
                                    href="{{ route('pessoa.show', [$pessoa->id]) }}"
                                    class="hover:underline">{{ $pessoa->nome_completo }}</a></td>

                            <td class="py-4 border-b border-neutral-500/30">
                                <div class="flex flex-col">
                                    <span class="font-semibold">
                                        {{ $pessoa->cpf }}
                                    </span>
                                    <span class="text-neutral-600">
                                        {{ $pessoa->telefone }}
                                    </span>
                                </div>
                            </td>

                            <td class="py-4 border-b border-neutral-500/30">
                                {{ $pessoa->endereço }}
                            </td>

                            <td class="py-4 font-semibold text-center border-b border-neutral-500/30">
                                <p class="text-center inline text-sm py-1 px-3 mx-auto rounded-full {{ $pessoa->tipo_familia == 'Unipessoal' ? 'text-orange-700 bg-orange-300/30' : 'text-green-700 bg-green-300/30' }} ">{{ $pessoa->tipo_familia }}</p>
                            </td>

                            <td class="py-4 font-semibold text-center border-b border-neutral-500/30">
                                <p class="text-center inline text-sm py-1 px-3 mx-auto rounded-full {{ $pessoa->tipo_cadastro == 'Atualização' ? 'text-purple-700 bg-purple-300/30' : 'text-sky-700 bg-sky-300/30' }} ">{{ $pessoa->tipo_cadastro }}</p>
                            </td>

                            

                            <td class="py-4 border-b border-neutral-500/30">
                                {{ \Carbon\Carbon::parse($pessoa->data_cadastro)->format('d/m/Y') }}</td>
                                
                            <td class="text-center font-semibold border-b border-neutral-500/30">
                                <div class="flex items-center gap-3 justify-center">
                                    <a href="{{ route('pessoa.show', [$pessoa->id]) }}" class="text-sky-950 hover:text-sky-500"><i class="fa-solid fa-eye"></i></a>
                                    <a href="#" class="text-sky-950 hover:text-sky-500"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" class="text-sky-950 hover:text-sky-500"><i class="fa-solid fa-trash"></i></a>
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
