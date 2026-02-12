<div class="bg-white text-sky-950  border border-neutral-500/30">
        <footer class="max-w-7xl mx-auto ">
            <nav class="grid grid-cols-1 md:grid-cols-3 gap-8 mx-6 pt-12 pb-6 border-b border-neutral-500/30">
                <a class="text-sky-950 text-2xl font-semibold flex items-start md:justify-center gap-2"
                    href="{{ route('home') }}">
                    <img class="w-60" src="{{ asset('assets/img/logo.png') }}" alt="">
                </a>
                <ul class="flex flex-col items-start justify-between gap-6">
                    <h1 class="text-sky-950 text-2xl font-bold">Links Rápidos</h1>
                    <li><a class="hover:underline font-semibold" href="{{ route('home') }}">Home</a></li>
                    <li><a class="hover:underline font-semibold" href="{{ route('pessoa.index') }}">Pessoas / Familías</a></li>
                    <li><a class="hover:underline font-semibold" href="{{ route('visita.index') }}">Visitas</a></li>
                </ul>

                <ul class="flex flex-col items-start gap-6 text-sky-950 font-medium">
                    <h1 class="text-sky-950 text-2xl font-bold">Contato</h1>
                    <li><i class="fa-solid fa-envelope"></i> <a class="text-sky-950 font-medium hover:underline"
                            href="#">sistemagestaovisitas@gmail.com</a></li>
                    <li><i class="fa-brands fa-instagram"></i> <a class="text-sky-950 font-medium hover:underline"
                            href="#" target="_blank"
                            rel="noopener noreferrer">sistemagestaovisitas</a></li>
                </ul>
            </nav>
            <p class="text-center text-sky-950 font-semibold text-lg mb-2 mt-6">&copy; SGV - Sistema de Gestão de Visitas • Todos os
                direitos reservados.</p>
            <p class="text-center text-sky-950 text-md pb-8">Feito com ❤ por Luan Galdino | G2A Digital -
                Marketing & Software</p>
        </footer>
    </div>