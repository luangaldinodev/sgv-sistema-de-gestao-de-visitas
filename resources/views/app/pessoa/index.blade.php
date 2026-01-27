@extends('templates.body')

@section('titulo', 'Pessoas/Familías')

@section('conteudo')

@include('app._components.header')

<div class="">
    <section class="w-7xl mx-auto">
        @foreach ($pessoas as $pessoa)
            {{ $pessoa->nome_completo }} <br>
            {{ $pessoa->cpf }} <br>
            {{ $pessoa->telefone }} <br>
            {{ $pessoa->endereço }} <br>
            {{ $pessoa->tipo_familia }} <br>
            {{ $pessoa->data_cadastro }} <br>
            {{ $pessoa->observacoes }} <br>
        @endforeach
    </section>
    
</div>
@endsection