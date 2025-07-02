<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vertex Desenvolvimento de Softwares')</title>
        @vite('resources/css/public/vertex-one.css')
    </head>

    <body class="flex flex-col min-h-screen bg-white">
    
        <header class="fixed top-0 left-0 h-[6rem] w-full bg-white z-50 px-4 md:px-20 lg:px-52 flex items center
        justify-between border-b-2 border-b-vertexBlue border-solid">
            <div class="py-2">
                <!-- Logo dinâmico para cada template -->
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/templates/vertex-one/vertex-logo-blue.png') }}" class="w-24 md:w-36 lg:w-48 h-auto">
                </a>
            </div>
            <nav class="py-4 grid grid-cols-3 gap-12 items-center">
                <div class="flex justify-center text-lg md:text-2xl px-2 md:px-6 py-1 md:py-2 text-gray-600 border-grow
                cursor-pointer font-semibold">
                    <a href="#about-us">Sobre nós</a>
                </div>
                <div class="flex justify-center text-lg md:text-2xl px-2 md:px-6 py-1 md:py-2 text-gray-600 border-grow
                cursor-pointer font-semibold">
                    <a href="#services">Nossos serviços</a>
                </div>
                <div class="flex justify-center text-lg md:text-2xl px-2 md:px-6 py-1 md:py-2 text-gray-600 border-grow
                cursor-pointer font-semibold">
                    <a href="#contact">Fale com a gente</a>
                </div>
            </nav>
        </header>

        <main class="flex-grow w-full h-full px-52 py-[6rem]">
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