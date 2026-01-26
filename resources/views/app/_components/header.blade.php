<div class="shadow-lg bg-white">
    <header class="w-7xl mx-auto flex items-center justify-between py-2">
        <a href="{{ route('home') }}"><img src="/assets/img/logo.png" alt="Logo SGV CadÚnico" class="w-20"></a>
        <nav>
            <ul class="flex items-center gap-5 text-sky-950 font-semibold">
                <li><a href="{{ route('home') }}" class="hover:underline">Home</a></li>
                <li><a href="#" class="hover:underline">Familías</a></li>
                <li><a href="#" class="hover:underline">Visitas</a></li>
                
            </ul>
        </nav>
        <div class="text-sky-950 font-semibold flex flex-col items-end">
            <p onclick="menuDropDown()" class="cursor-pointer hover:underline"><i class="fa-solid fa-user"></i> {{ auth()->user()->name }}</p>
            <form id="menuDropDown" action="logout" method="post" class="absolute hidden shadow-lg rounded-md bg-white border border-neutral-500/50 py-2 px-5 mt-8">
                <a href="#" class="  hover:underline"><i class="fa-solid fa-gear"></i> Ajustes</a>
                @csrf
                <div class="mt-2">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <input type="submit" value="Logout" class="hover:underline cursor-pointer">
                </div>
            </form>
        </div>
    </header>
</div>
