@extends('templates.body')

@section('titulo', 'Cadastrar Pessoas/Familías')

@section('conteudo')

    @include('app._components.header')
    <div class="">
        <section class="w-5xl mx-auto bg-white mt-10 py-6 px-8 rounded-lg">
            <h2 class="text-sky-950 font-bold text-4xl">Cadastrar Visita</h2>

            <form action="{{ route('visita.store') }}" method="post"
                class="grid grid-cols-4 gap-3 p-6 border border-neutral-500/20 rounded-lg mt-10">
                @csrf

                <h3 class="text-sky-950 font-bold text-2xl col-start-1 col-end-4"><i
                        class="fa-solid fa-user text-sky-500"></i> Dados da Visita</h3>

                <div class="col-start-1 col-end-3">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="pessoa_familia_id" class="text-sky-950 font-semibold">
                            Pessoa / Familía</label>
                        {!! $errors->has('pessoa_familia_id')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('pessoa_familia_id') . '</p>'
                            : '' !!}
                    </div>
                    <select name="pessoa_familia_id" id="pessoa_familia_id"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                        <option value="">Selecione a Pessoa / Familía</option>
                        @foreach ($pessoas as $pessoa)
                            <option value="{{ $pessoa->id }}"> {{ $pessoa->nome_completo }} | CPF: {{ $pessoa->cpf }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-span-2">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="entrevistador_id" class="text-sky-950 font-semibold">
                            Entrevistador</label>
                        {!! $errors->has('entrevistador_id')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('entrevistador_id') . '</p>'
                            : '' !!}
                    </div>
                    <select name="entrevistador_id" id="entrevistador_id"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                        <option value="">Selecione a Pessoa / Familía</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}"> {{ $user->name }} </option>
                        @endforeach
                    </select>
                </div>


                <div class="col-start-1 col-end-3">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="data_prevista" class="text-sky-950 font-semibold">
                            Data Prevista</label>
                        {!! $errors->has('data_prevista')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('data_prevista') . '</p>'
                            : '' !!}
                    </div>
                    <input type="date" name="data_prevista" id="data_prevista"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                </div>

                <div class="col-span-2">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="data_realizada" class="text-sky-950 font-semibold">
                            Data da Visita</label>
                        {!! $errors->has('data_realizada')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('data_realizada') . '</p>'
                            : '' !!}
                    </div>
                    <input type="date" name="data_realizada" id="data_realizada"
                        class="mb-1 w-full p-2 text-sky-950 font-semibold border border-neutral-500/20 bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-sky-500">
                </div>

                <h3 class="text-sky-950 font-bold text-2xl col-start-1 col-end-3 mt-5"><i
                        class="fa-solid fa-gear text-sky-500"></i> Status da Visita</h3>

                <div class="col-span-4">
                    <div class="flex items-center gap-3 mb-1">
                        <label for="" class="text-sky-950 font-semibold">
                            Tipo de familía</label>
                        {!! $errors->has('tipo_familia')
                            ? "<p class='text-sm text-red-700'>*" . $errors->first('tipo_familia') . '</p>'
                            : '' !!}
                    </div>

                    <div class="flex gap-4">

                        <label for="status_pendente" class="flex-1 cursor-pointer">
                            <input type="radio" name="status_visita" id="status_pendente" value="Pendente"
                                class="hidden peer" checked>
                            <div
                                class="flex items-center justify-center h-12 border-2 border-neutral-300 rounded-lg
                   peer-checked:border-sky-500 peer-checked:bg-sky-50
                   text-sm font-medium transition-all">
                                Pendente
                            </div>
                        </label>

                        <label for="status_realizada" class="flex-1 cursor-pointer">
                            <input type="radio" name="status_visita" id="status_realizada" value="Realizada"
                                class="hidden peer">
                            <div
                                class="flex items-center justify-center h-12 border-2 border-neutral-300 rounded-lg
                   peer-checked:border-sky-500 peer-checked:bg-sky-50
                   text-sm font-medium transition-all">
                                Realizada
                            </div>
                        </label>

                        <label for="status_nao_localizado" class="flex-1 cursor-pointer">
                            <input type="radio" name="status_visita" id="status_nao_localizado" value="Não Localizado"
                                class="hidden peer">
                            <div
                                class="flex items-center justify-center h-12 border-2 border-neutral-300 rounded-lg
                   peer-checked:border-sky-500 peer-checked:bg-sky-50
                   text-sm font-medium transition-all">
                                Não Localizado
                            </div>
                        </label>

                        <label for="status_reagendar" class="flex-1 cursor-pointer">
                            <input type="radio" name="status_visita" id="status_reagendar" value="Reagendar"
                                class="hidden peer">
                            <div
                                class="flex items-center justify-center h-12 border-2 border-neutral-300 rounded-lg
                   peer-checked:border-sky-500 peer-checked:bg-sky-50
                   text-sm font-medium transition-all">
                                Reagendar
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
@endsection
