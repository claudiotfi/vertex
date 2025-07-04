<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Vertex Desenvolvimento de Softwares')</title>
    @vite('resources/css/public/vertex-one.css')
</head>

<body class="flex flex-col min-h-screen bg-white">

    <header
        class="fixed top-0 left-0 h-[6rem] w-full bg-white z-50 px-4 md:px-20 lg:px-52 flex items center 
            justify-between border-b-2 border-b-vertexBlue border-solid">
        <div class="py-2">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/templates/' . $template . '/img/vertex-logo-blue.png') }}"
                    class="w-24 md:w-36 lg:w-48 h-auto">
            </a>
        </div>
        <nav class="py-4 grid grid-cols-4 gap-2 items-center">
            <a href="{{ url('/') }}"
                class="flex justify-center text-lg md:text-2xl px-2 md:px-6 py-1 md:py-2 text-gray-600 border-grow cursor-pointer font-semibold w-full">
                Início
            </a>
            <a href="{{ url('/') }}#about-us"
                class="flex justify-center text-lg md:text-2xl px-2 md:px-6 py-1 md:py-2 text-gray-600 border-grow cursor-pointer font-semibold w-full">
                Sobre nós
            </a>
            <a href="{{ url('/') }}#services"
                class="flex justify-center text-lg md:text-2xl px-2 md:px-6 py-1 md:py-2 text-gray-600 border-grow cursor-pointer font-semibold w-full">
                Nossos serviços
            </a>
            <a href="{{ url('/') }}#contact"
                class="flex justify-center text-lg md:text-2xl px-2 md:px-6 py-1 md:py-2 text-gray-600 border-grow cursor-pointer font-semibold w-full">
                Fale com a gente
            </a>
        </nav>
    </header>

    <main class="flex-grow w-full h-full py-[6rem]">
        @yield('content')
    </main>

    <footer class="w-full bg-vertexBlue">
        <div class="container mx-auto p-8 text-gray-200">
            <p class="text-center">&copy; {{ date('Y') }} Vertex. Todos os direitos reservados.</p>
            <p class="text-center">Icons by SVGBackgrounds.com</p>
        </div>
    </footer>

</body>

</html>
