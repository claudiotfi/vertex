<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Vertex Desenvolvimento de Softwares')</title>
        @vite('resources/css/public/vertex-one.css')
    </head>

    <body class="bg-image flex flex-col min-h-screen"
        style="background-image: url('{{ asset('assets/templates/' . $template . '/background.png') }}');>
    </body>
  <!-- Header -->
 <header class="flex
        justify-center bg-white shadow">
        <nav class="container mx-auto px-6 py-8 grid grid-cols-12 items-center">
            <div class="col-span-2 flex items-center px-4">
                <!-- Logo dinâmico para cada template -->
                <a href="{{ url('/') }}">
                    <img src="{{ asset('assets/templates/' . $template . '/vertex-desenvolvimento-softwares.png') }}"
                        alt="Vertex Desenvolvimento de Softwares" title="Página Inicial" class="max-w-full h-auto">
                </a>
            </div>
            <ul class="col-span-10 flex items-center px-2 bg-white/60 h-full rounded-md">
                <li
                    class="basis-1/5 px-2 mx-2 hover:bg-white/10 rounded-xl hover:shadow-[0_0_10px_10px_rgba(255,255,255,0.1)]">
                    <a href="{{ route('home') }}" class="flex flex-col pb-1">
                        <span class="text-2xl text-blue-900">Home</span>
                        <span class="text-xs text-gray-600">Página Inicial</span>
                    </a>
                </li>
                <li
                    class="basis-1/5 px-2 mx-2 hover:bg-white/10 rounded-xl hover:shadow-[0_0_10px_10px_rgba(255,255,255,0.1)]">
                    <a href="{{ route('services') }}" class="flex flex-col pb-1">
                        <span class="text-2xl text-blue-900">Serviços</span>
                        <span class="text-xs text-gray-600">Desenvolvimento de Softwares</span>
                    </a>
                </li>
                <li
                    class="basis-1/5 px-2 mx-2 hover:bg-white/10 rounded-xl hover:shadow-[0_0_10px_10px_rgba(255,255,255,0.1)]">
                    <a href="{{ route('portfolio') }}" class="flex flex-col pb-1">
                        <span class="text-2xl text-blue-900">Portfólio</span>
                        <span class="text-xs text-gray-600">Projetos Realizados</span>
                    </a>
                </li>
                <li
                    class="basis-1/5 px-2 mx-2 hover:bg-white/10 rounded-xl hover:shadow-[0_0_10px_10px_rgba(255,255,255,0.1)]">
                    <a href="{{ route('blog') }}" class="flex flex-col pb-1">
                        <span class="text-2xl text-blue-900">Blog</span>
                        <span class="text-xs text-gray-600">Notícias e Artigos</span>
                    </a>
                </li>
                <li
                    class="basis-1/5 px-2 mx-2 hover:bg-white/10 rounded-xl hover:shadow-[0_0_10px_10px_rgba(255,255,255,0.1)]">
                    <a href="{{ route('contact') }}" class="flex flex-col pb-1">
                        <span class="text-2xl text-blue-900">Contato</span>
                        <span class="text-xs text-gray-600">Fale Conosco</span>
                    </a>
                </li>
            </ul>
        </nav>
        </header>
        <main class="flex-grow w-full">
            @yield('content')
        </main>
        <!-- Footer -->
        <footer class="w-full bg-blue-950">
            <div class="container mx-auto p-8 text-gray-200">
                <p class="text-center">&copy; {{ date('Y') }} Vertex. Todos os direitos reservados.</p>
            </div>
        </footer>
    </body>

</html>
