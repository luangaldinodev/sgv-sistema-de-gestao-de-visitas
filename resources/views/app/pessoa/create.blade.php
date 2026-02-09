@extends('templates.body')

@section('titulo', 'Cadastrar Pessoas/Familías')

@section('conteudo')

    @include('app._components.header')
    <div class="">
        <section class="w-5xl mx-auto bg-white mt-10 py-6 px-8 rounded-lg">
            <h2 class="text-sky-950 font-bold text-4xl">Cadastrar Pessoa</h2>

            <form action="{{ route('pessoa.store') }}" method="post"
                class="grid grid-cols-4 gap-3 p-6 border border-neutral-500/20 rounded-lg mt-10">
                @csrf

                <h3 class="text-sky-950 font-bold text-2xl col-start-1 col-end-4"><i
                        class="fa-solid fa-user text-sky-500"></i> Dados da Pessoa</h3>

                <div class="col-start-1 col-end-4">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="nome_completo" class="text-sky-950 font-semibold">
                            Nome Completo</label>
                        {!! $errors->has('nome_completo')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('nome_completo') . '</p>'
                            : '' !!}
                    </div>
                    <input type="text" name="nome_completo" id="nome_completo" placeholder="Nome completo do cidadão"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                </div>

                <div class="col-start-4">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="cpf" class="text-sky-950 font-semibold">
                            CPF</label>
                        {!! $errors->has('cpf') ? "<p class='text-sm text-red-700'>*" . $errors->first('cpf') . '</p>' : '' !!}
                    </div>
                    <input type="text" name="cpf" id="cpf" placeholder="000.000.000-00"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                </div>

                <div class="col-start-1 col-end-2">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="telefone" class="text-sky-950 font-semibold">
                            Telefone</label>
                        {!! $errors->has('telefone') ? "<p class='text-sm text-red-700'>*" . $errors->first('telefone') . '</p>' : '' !!}
                    </div>
                    <input type="text" name="telefone" id="telefone" placeholder="(00) 00000-0000"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                </div>

                <div class="col-start-2 col-end-3">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="data_cadastro" class="text-sky-950 font-semibold">
                            Data de Vencimento</label>
                        {!! $errors->has('data_cadastro')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('data_cadastro') . '</p>'
                            : '' !!}
                    </div>
                    <input type="date" name="data_cadastro" id="data_cadastro" placeholder="(00) 00000-0000"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                </div>

                <div class="col-span-2">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="endereço" class="text-sky-950 font-semibold">
                            Endereço Completo</label>
                        {!! $errors->has('endereço') ? "<p class='text-sm text-red-700'>*" . $errors->first('endereço') . '</p>' : '' !!}
                    </div>
                    <input type="text" name="endereço" id="endereço" placeholder="Rua, número, bairro"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                </div>

                <h3 class="text-sky-950 font-bold text-2xl col-start-1 col-end-3 mt-5"><i
                        class="fa-solid fa-gear text-sky-500"></i> Configuração do Cadastro</h3>

                <div class="col-start-1 col-end-3">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="" class="text-sky-950 font-semibold">
                            Tipo de familía</label>
                        {!! $errors->has('tipo_familia')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('tipo_familia') . '</p>'
                            : '' !!}
                    </div>
                    <div class="flex gap-4">
                        <label for="familia_unipessoal" class="flex-1 cursor-pointer">
                            <input type="radio" name="tipo_familia" id="familia_unipessoal" value="Unipessoal"
                                class="hidden peer" checked>
                            <div
                                class="flex items-center justify-center h-12 border-2 border-neutral-300 rounded-lg
                   peer-checked:border-sky-500 peer-checked:bg-sky-50
                   text-sm font-medium transition-all">
                                Unipessoal
                            </div>
                        </label>

                        <label for="familia_familiar" class="flex-1 cursor-pointer">
                            <input type="radio" name="tipo_familia" id="familia_familiar" value="Familiar"
                                class="hidden peer">
                            <div
                                class="flex items-center justify-center h-12 border-2 border-neutral-300 rounded-lg
                   peer-checked:border-sky-500 peer-checked:bg-sky-50
                   text-sm font-medium transition-all">
                                Familiar
                            </div>
                        </label>
                    </div>
                </div>

                <div class="col-span-2">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="" class="text-sky-950 font-semibold">
                            Tipo de Cadastro</label>
                        {!! $errors->has('tipo_cadastro')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('tipo_cadastro') . '</p>'
                            : '' !!}
                    </div>
                    <div class="flex gap-4">
                        <label for="cadastro_novo" class="flex-1 cursor-pointer">
                            <input type="radio" name="tipo_cadastro" id="cadastro_novo" value="Novo" class="hidden peer"
                                checked>
                            <div
                                class="flex items-center justify-center h-12 border-2 border-neutral-300 rounded-lg
                   peer-checked:border-sky-500 peer-checked:bg-sky-50
                   text-sm font-medium transition-all">
                                Novo
                            </div>
                        </label>

                        <label for="cadastro_atualizacao" class="flex-1 cursor-pointer">
                            <input type="radio" name="tipo_cadastro" id="cadastro_atualizacao" value="Atualização"
                                class="hidden peer">
                            <div
                                class="flex items-center justify-center h-12 border-2 border-neutral-300 rounded-lg
                   peer-checked:border-sky-500 peer-checked:bg-sky-50
                   text-sm font-medium transition-all">
                                Atualização
                            </div>
                        </label>
                    </div>
                </div>

                <h3 class="text-sky-950 font-bold text-2xl col-start-1 col-end-3 mt-5"><i
                        class="fa-solid fa-bars-staggered text-sky-500"></i> Observações Adicionas</h3>

                <div class="col-span-4">
                    <div class="flex items-center gap-3 mb-1">
                        {!! $errors->has('observacoes')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('observacoes') . '</p>'
                            : '' !!}
                    </div>
                    <textarea name="observacoes" id="observacoes"
                        placeholder="Descreva informações relevantes sobre a visita domiciliar ou situação da familía..." cols="30"
                        rows="5"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500"></textarea>
                </div>

                <div class="col-start-3 col-end-3 flex items-end justify-end w-full">
                    <button type="reset"
                        class="py-3 text-right mr-5 font-semibold text-sky-950  cursor-pointer"></i>Cancelar</button>
                </div>

                <div class="col-start-4 col-end-4">
                    <button type="submit"
                        class="w-full py-3  font-semibold text-white rounded-sm cursor-pointer bg-emerald-500"><i
                            class="fa-solid fa-floppy-disk mr-3"></i>Salvar cadastro</button>
                </div>

            </form>
        </section>
    </div>

    @include('app._components.footer')

@endsection
