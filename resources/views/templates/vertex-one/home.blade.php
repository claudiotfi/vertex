@extends('layouts.vertex-one')

@section('content')

    <section class="w-full flex flex-col pt-20">
        <div class="w-full">
            <p class="text-8xl font-extrabold">
                Transformando ideias em
                <span class="relative inline-block text-vertexBlue">
                    soluções digitais
                    <img src="/assets/templates/vertex-one/needle-underline.svg"
                            class="absolute left-0 bottom-0 translate-y-20 w-full h-auto pointer-events-none select-none" 
                            alt="">
                </span>
                inovadoras
            </p>
        </div>
        <div class="w-full grid grid-cols-2 items-center">
            <div>
                <p class="paragraph-light">
                    Na Vertex, desenvolvemos sistemas personalizados que atendem às suas necessidades específicas e
                    levam seu projeto ao próximo nível.
                </p>
                <a href="{{ route('services') }}"
                    class="bg-vertexBlue hover:bg-vertexDarkBlue font-semibold text-xl text-white py-3 px-6 rounded-md transition">
                    Conheça nossos serviços
                </a>
            </div>
            <div class="h-[80%] flex items-center justify-center">
                <img src="/assets/templates/vertex-one/icon_pc.svg" class="w-full h-full object-contain pointer-events-none select-none" alt="">
            </div>
        </div>
    </section>
    
    <section class="w-full flex flex-col pt-20 scroll-mt-12" id="about-us">
        <div class="w-full mb-8">
            <p class="text-5xl font-extrabold">
                Sobre
                <span class="relative inline-block text-vertexBlue">
                    nós
                    <img src="/assets/templates/vertex-one/needle-underline.svg"
                            class="absolute left-0 bottom-0 translate-y-2 w-full h-auto pointer-events-none select-none" 
                            alt="">
                </span>
            </p>
        </div>
        <div class="w-full h-full">
            <p class="paragraph-light">
                A Vertex surgiu da necessidade de um atendimento realmente personalizado para projetos que exigem cuidado e atenção. 
                Grandes empresas de software costumam atender vários projetos ao mesmo tempo, muitas vezes com o mesmo time dividido entre eles. 
                Embora esse modelo seja eficiente, projetos menores que precisam de suporte direto e descomplicado acabam ficando de lado, 
                presos em processos burocráticos como abertura de tickets, envio de e-mails e longas esperas por resposta.
            </p>
            <p class="paragraph-light">
                Pensando em tudo isso, criamos a Vertex com o objetivo de atender a essa demanda tão importante. 
                Aqui, você conta com profissionais qualificados e comprometidos, com atendimento ágil, direto 
                e sem burocracia. Basta entrar em contato por celular ou WhatsApp para que seu projeto receba a atenção que merece.
            </p>
            <p class="paragraph-light">
                Conheça o time da Vertex:
            </p>
            <div class="w-full grid grid-cols-2 gap-12">
                <div>
                    <p class="paragraph-bold text-vertexBlue font-bold">Claudio Tosetto</p>
                    <div class="grid grid-cols-[14rem_1fr] gap-4">
                        <img src="/assets/templates/vertex-one/background.png"
                            class="w-full h-full rounded-xs pointer-events-none select-none" 
                            alt="">
                        <p class="paragraph-light">
                            Com 250 anos de experiência, Claudio já desenvolveu mais softwares que ele se lembra.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum labore repellendus ex autem, numquam fuga accusantium quaerat amet dolore nihil debitis consequuntur repudiandae reiciendis ducimus obcaecati officiis qui hic eius?
                        </p>
                    </div>
                </div>
                <div>
                    <p class="paragraph-bold text-vertexBlue font-bold">Eduardo Luz</p>
                    <div class="grid grid-cols-[14rem_1fr] gap-4">
                        <img src="/assets/templates/vertex-one/background.png"
                            class="w-full h-full rounded-xs pointer-events-none select-none" 
                            alt="">
                        <p class="paragraph-light">
                            Com -5 anos de experiência, esse orelha seca só tá aqui pra fazer volume
                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusamus numquam odio in cumque praesentium ducimus harum, a similique sint, repudiandae nemo exercitationem? Ipsa laborum tempore ullam iste obcaecati officiis odit!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="w-full flex flex-col pt-20 scroll-mt-12" id="services">
        <div class="w-full mb-8 flex justify-end">
            <p class="text-5xl font-extrabold">
                Nossos
                <span class="relative inline-block text-vertexBlue">
                    serviços
                    <img src="/assets/templates/vertex-one/needle-underline.svg"
                            class="absolute left-0 bottom-0 translate-y-6 w-full h-auto pointer-events-none select-none" 
                            alt="">
                </span>
            </p>
        </div>
        <div class="w-full h-full">
            <p class="paragraph-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro a fugit, blanditiis, fugiat deleniti in ducimus nostrum harum aspernatur corrupti quam excepturi laborum odit atque debitis nesciunt? Quasi, animi quia.
            </p>
            <p class="paragraph-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro a fugit, blanditiis, fugiat deleniti in ducimus nostrum harum aspernatur corrupti quam excepturi laborum odit atque debitis nesciunt? Quasi, animi quia.
            </p>
            <p class="paragraph-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro a fugit, blanditiis, fugiat deleniti in ducimus nostrum harum aspernatur corrupti quam excepturi laborum odit atque debitis nesciunt? Quasi, animi quia.
            </p>
            <p class="paragraph-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro a fugit, blanditiis, fugiat deleniti in ducimus nostrum harum aspernatur corrupti quam excepturi laborum odit atque debitis nesciunt? Quasi, animi quia.
            </p>
            <p class="paragraph-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro a fugit, blanditiis, fugiat deleniti in ducimus nostrum harum aspernatur corrupti quam excepturi laborum odit atque debitis nesciunt? Quasi, animi quia.
            </p>
            <p class="paragraph-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro a fugit, blanditiis, fugiat deleniti in ducimus nostrum harum aspernatur corrupti quam excepturi laborum odit atque debitis nesciunt? Quasi, animi quia.
            </p>
            <p class="paragraph-light">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro a fugit, blanditiis, fugiat deleniti in ducimus nostrum harum aspernatur corrupti quam excepturi laborum odit atque debitis nesciunt? Quasi, animi quia.
            </p>
        </div>
    </section>

    {{-- <section class="w-full p-16 grid">
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
    </section> --}}


    <!-- Seção de Contato -->
    <section class="w-full flex flex-col pt-20 scroll-mt-12" id="contact">
        <div class="w-full mb-8">
            <p class="text-5xl font-extrabold">
                <span class="relative inline-block text-vertexBlue">
                    Fale
                    <img src="/assets/templates/vertex-one/needle-underline.svg"
                            class="absolute left-0 bottom-0 translate-y-2 w-full h-auto pointer-events-none select-none" 
                            alt="">
                </span>
                com a gente
            </p>
        </div>
        <p class="paragraph-light">Tem alguma dúvida ou deseja iniciar um projeto? Estamos aqui para ajudar!</p>
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
                {{-- class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full transition"> --}}
                class="bg-vertexBlue hover:bg-vertexDarkBlue font-semibold text-xl text-white py-3 px-6 rounded-md transition">
                Enviar Mensagem
            </button>
        </form>
    </div>
    </section>
@endsection
