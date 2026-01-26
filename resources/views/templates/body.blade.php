<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- font-awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>@yield('titulo') | SGV - CadÚnico</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-neutral-100">
    @yield('conteudo')

    {{-- Menu DropDown Header --}}
    <script>
        function menuDropDown() {

            const menuDropDown = document.getElementById('menuDropDown');
            const isOpen = !menuDropDown.classList.contains('hidden');

            if (isOpen) {
                menuDropDown.classList.add(
                    'hidden'
                );

            } else {
                menuDropDown.classList.remove(
                    'hidden'
                );
            }
        }
    </script>
</body>

</html>
