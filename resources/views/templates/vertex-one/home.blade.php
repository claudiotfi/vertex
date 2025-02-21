@extends('layouts.vertex-one')

@section('content')
    <!-- Destaque Principal -->
    <section class="w-full bg-black/50">
        <div class="container mx-auto px-4 py-16 text-white bg-no-repeat bg-cover bg-center flex items-end"
            style="background-image: url('{{ asset('assets/templates/' . $template . '/programacao-softwares-slide.png') }}');">
            <div class="flex flex-wrap items-end w-full pt-48">
                <div class="w-full md:w-1/2 p-8">
                    <h1 class="text-4xl md:text-6xl font-extrabold mb-4">
                        Transformando ideias em soluções digitais inovadoras
                    </h1>
                </div>
                <div class="w-full md:w-1/2 p-8">
                    <p class="text-lg md:text-xl mb-8">
                        Na Vertex, desenvolvemos sistemas personalizados
                        que atendem às suas necessidades específicas.
                        Nossa equipe de especialistas está pronta para levar
                        seu projeto ao próximo nível.
                    </p>
                    <a href="{{ route('services') }}"
                        class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full transition">Conheça
                        nossos
                        serviços</a>
                </div>
            </div>
        </div>
    </section>


    <!-- Destaques -->
    <section class="w-full bg-white">
        <div class="container mx-auto px-4 py-8 grid gap-8 md:grid-cols-3">
            <div class="bg-white bg-opacity-90 p-6 shadow hover:shadow-lg transition flex flex-col items-center">
                <img src="{{ asset('assets/templates/' . $template . '/destaque-1.png') }}"
                    class="w-full h-auto md:h-64 object-cover" alt="Destaque 1">

                <h2 class="text-blue-900 text-2xl font-bold mt-4 mb-2 text-center">Destaque 1</h2>
                <p class="text-gray-700 text-center">Descrição do destaque 1. Informações relevantes para engajar o
                    usuário.</p>
            </div>
            <div class="bg-white bg-opacity-90 p-6 shadow hover:shadow-lg transition flex flex-col items-center">
                <img src="{{ asset('assets/templates/' . $template . '/destaque-1.png') }}"
                    class="w-full h-auto md:h-64 object-cover" alt="Destaque 2">
                <h2 class="text-blue-900 text-2xl font-bold mt-4 mb-2 text-center">Destaque 2</h2>
                <p class="text-gray-700 text-center">Descrição do destaque 2. Informações relevantes para engajar o
                    usuário.</p>
            </div>
            <div class="bg-white bg-opacity-90 p-6 shadow hover:shadow-lg transition flex flex-col items-center">
                <img src="{{ asset('assets/templates/' . $template . '/destaque-1.png') }}"
                    class="w-full h-auto md:h-64 object-cover" alt="Destaque 3">
                <h2 class="text-blue-900 text-2xl font-bold mt-4 mb-2 text-center">Destaque 3</h2>
                <p class="text-gray-700 text-center">Descrição do destaque 3. Informações relevantes para engajar o
                    usuário.</p>
            </div>
        </div>
    </section>


    <!-- Seção de Contato -->
    <section id="contact" class="container mx-auto px-4 py-16 text-white">
        <div class="max-w-2xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-4">Entre em Contato</h2>
            <p class="mb-8">Tem alguma dúvida ou deseja iniciar um projeto? Estamos aqui para ajudar!
            </p>
            <!-- Exemplo de formulário simples -->
            <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <input type="text" name="name" placeholder="Seu nome"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <input type="email" name="email" placeholder="Seu e-mail"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div>
                    <textarea name="message" placeholder="Sua mensagem" rows="4"
                        class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>
                <button type="submit"
                    class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full transition">Enviar
                    Mensagem</button>
            </form>
        </div>
    </section>
@endsection
