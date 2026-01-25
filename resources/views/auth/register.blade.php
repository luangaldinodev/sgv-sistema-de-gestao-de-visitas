@extends('templates.body')

@section('titulo', 'Login')

@section('conteudo')
    <section class="min-h-screen flex items-center justify-center">
        <div class="w-md p-10 rounded-lg shadow-xl flex flex-col items-center bg-white">
            <img src="/assets/img/logo.png" alt="Logo SGV CadÚnico" class="w-50 mb-5">
            <h2 class="mb-10 text-3xl font-bold text-sky-950">Acesso ao Sistema</h2>
            <form action="{{ route('register.store') }}" method="post" class="w-full">
                @csrf
                <div class="flex items-center gap-3 mb-1">
                    <label for="name" class="text-sky-950 font-semibold"><i class="fa-solid fa-user"></i>
                        Usuário</label>
                    {!! $errors->has('name') ? "<p class='text-sm text-red-700'>" . $errors->first('name') . '</p>' : '' !!}
                </div>
                <input type="text" name="name" id="name"
                    class="mb-6 w-full p-2 text-sky-950 font-semibold bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">

                <div class="flex items-center gap-3 mb-1">
                    <label for="password" class="text-sky-950 font-semibold"><i class="pr-1 fa-solid fa-key"></i>
                        Senha</label>
                    {!! $errors->has('password') ? "<p class='text-sm text-red-700'>" . $errors->first('password') . '</p>' : '' !!}
                </div>
                <input type="password" name="password" id="password"
                    class="mb-6 w-full p-2 text-sky-950 font-semibold bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">

                <div class="flex items-center gap-3 mb-1">
                    <label for="password_confirmation" class="text-sky-950 font-semibold"><i class="pr-1 fa-solid fa-key"></i>
                        Confirmar Senha</label>
                    {!! $errors->has('password_confirmation') ? "<p class='text-sm text-red-700'>" . $errors->first('password_confirmation') . '</p>' : '' !!}
                </div>
                <input type="password" name="password_confirmation" id="password_confirmation"
                    class="mb-6 w-full p-2 text-sky-950 font-semibold bg-neutral-100 rounded-sm outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500">
                
                    <input type="submit" value="Entrar"
                    class="w-full py-3 mb-6 font-semibold text-white rounded-sm cursor-pointer bg-sky-950">
            </form>
            <p class="text-sm font-semibold text-gray-400">Acesso restrito a usuários autorizados.</p>
        </div>

    </section>
@endsection
