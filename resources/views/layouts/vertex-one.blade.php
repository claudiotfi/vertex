<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Vertex Desenvolvimento de Softwares')</title>
  @vite('resources/css/vertex-one.css')
  </head>
<body class="bg-image" style="background-image: url('{{ asset('assets/templates/' . $template . '/background.png') }}');>
    </body>
  <!-- Header -->
  <header class="flex justify-center">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
      <div class="flex items-center">
        <!-- Logo dinâmico para cada template -->
        <img src="{{ asset('assets/templates/' . $template . '/vertex-desenvolvimento-softwares.png') }}" alt="Vertex Desenvolvimento de Softwares">
      </div>
      <ul class="flex space-x-6">
        <li><a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500">Início</a></li>
        <li><a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-500">Serviços</a></li>
        <li><a href="{{ route('portfolio') }}" class="text-gray-700 hover:text-blue-500">Portfólio</a></li>
        <li><a href="{{ route('blog') }}" class="text-gray-700 hover:text-blue-500">Blog</a></li>
        <li><a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-500">Contato</a></li>
      </ul>
    </nav>
  </header>

  <!-- Destaque Principal -->
  <section class="container mx-auto px-4 py-16 text-center text-white">
    <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Bem-vindo à Vertex</h1>
    <p class="text-lg md:text-xl mb-8">Transformando ideias em soluções digitais incríveis</p>
    <a href="{{ route('services') }}" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full transition">Conheça nossos serviços</a>
  </section>

  <!-- Destaques -->
  <section class="container mx-auto px-4 py-16 grid gap-8 md:grid-cols-3">
    <div class="bg-white bg-opacity-90 p-6 rounded shadow hover:shadow-lg transition">
      <h2 class="text-2xl font-bold mb-2">Destaque 1</h2>
      <p class="text-gray-700">Descrição do destaque 1. Informações relevantes para engajar o usuário.</p>
    </div>
    <div class="bg-white bg-opacity-90 p-6 rounded shadow hover:shadow-lg transition">
      <h2 class="text-2xl font-bold mb-2">Destaque 2</h2>
      <p class="text-gray-700">Descrição do destaque 2. Informações relevantes para engajar o usuário.</p>
    </div>
    <div class="bg-white bg-opacity-90 p-6 rounded shadow hover:shadow-lg transition">
      <h2 class="text-2xl font-bold mb-2">Destaque 3</h2>
      <p class="text-gray-700">Descrição do destaque 3. Informações relevantes para engajar o usuário.</p>
    </div>
  </section>

  <!-- Seção de Contato -->
  <section id="contact" class="container mx-auto px-4 py-16 bg-gray-100">
    <div class="max-w-2xl mx-auto text-center">
      <h2 class="text-3xl font-bold mb-4">Entre em Contato</h2>
      <p class="text-gray-600 mb-8">Tem alguma dúvida ou deseja iniciar um projeto? Estamos aqui para ajudar!</p>
      <!-- Exemplo de formulário simples -->
      <form action="{{ route('contact.send') }}" method="POST" class="space-y-4">
        @csrf
        <div>
          <input type="text" name="name" placeholder="Seu nome" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <input type="email" name="email" placeholder="Seu e-mail" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
          <textarea name="message" placeholder="Sua mensagem" rows="4" class="w-full border border-gray-300 p-3 rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full transition">Enviar Mensagem</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="container mx-auto px-6 py-6 flex justify-between items-center bg-blue-950 text-gray-200">
    <div class="container mx-auto px-4 text-center">
      <p>&copy; {{ date('Y') }} Vertex. Todos os direitos reservados.</p>
    </div>
  </footer>
</body>
</html>
