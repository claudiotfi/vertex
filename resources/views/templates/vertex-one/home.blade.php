@extends('layouts.vertex-one')

@section('content')
    <section class="w-full flex flex-col pt-20">
        <x-title size="lg" main="Transformando ideias em" emphasis="soluções digitais" :template="$template"></x-title>
        <div class="w-full grid grid-cols-2 items-center px-4 md:px-20 lg:px-52">
            <div>
                <p class="paragraph-light">
                    Na Vertex, desenvolvemos sistemas personalizados que atendem às suas necessidades específicas e levam
                    seu projeto ao próximo nível.
                </p>
                <a href="{{ url('/') }}#services"
                    class="bg-vertexBlue hover:bg-vertexDarkBlue font-semibold text-xl text-white py-3 px-6 rounded-md transition">
                    Conheça nossos serviços
                </a>
            </div>
            <div class="self-start h-[76%]">
                <img src="{{ asset('assets/templates/' . $template . '/svg/icon_pc.svg') }}"
                    class="w-full h-full object-contain object-top
                    pointer-events-none select-none"
                    alt="">
            </div>
        </div>
    </section>

    <section class="w-full flex flex-col pt-20 scroll-mt-12" id="about-us">
        <x-title main="Sobre" emphasis="nós" :template="$template"></x-title>
        <div class="w-full h-full px-4 md:px-20 lg:px-52">
            <p class="paragraph-light">
                Grandes empresas de software costumam atender vários projetos ao mesmo tempo, muitas vezes com o mesmo time
                dividido entre eles. Embora esse modelo seja eficiente, projetos menores que precisam de suporte direto e
                descomplicado acabam ficando de lado, presos em processos burocráticos como abertura de tickets, envio de
                e-mails e longas esperas por resposta.
            </p>
            <p class="paragraph-light">
                Pensando nisso, criamos a Vertex com o objetivo de prestar atendimento personalizado para projetos que
                exigem cuidado e atenção mais direcionados. Aqui, você conta com um time qualificado e comprometido, com
                atendimento ágil, direto e sem burocracia. Basta entrar em contato por celular ou WhatsApp para que seu
                projeto receba a atenção que merece.
            </p>
            <p class="paragraph-light">
                Conheça o time da Vertex:
            </p>
            <div class="w-full grid grid-cols-2 gap-12">
                <div>
                    <p class="paragraph-bold text-vertexBlue font-bold">Claudio Tosetto</p>
                    <div class="grid grid-cols-[14rem_1fr] gap-4">
                        <img src="{{ asset('assets/templates/' . $template . '/img/claudio.png') }}"
                            class="w-full rounded-full border-4 border-vertexBlue pointer-events-none select-none"
                            alt="">
                        <p class="paragraph-light">
                            Com mais de 20 anos de experiência, atua no desenvolvimento de soluções digitais para os
                            mais diversos segmentos da indústria e comércio, participando de todas as etapas — do
                            planejamento à entrega e integração do projeto.
                        </p>
                    </div>
                </div>
                <div>
                    <p class="paragraph-bold text-vertexBlue font-bold">Eduardo Luz</p>
                    <div class="grid grid-cols-[14rem_1fr] gap-4">
                        <img src="{{ asset('assets/templates/' . $template . '/img/eu.png') }}"
                            class="w-full rounded-full border-4 border-vertexBlue pointer-events-none select-none"
                            alt="">
                        <p class="paragraph-light">
                            A aplicação de 4 anos de experiência em desenvolvimento e mais de 12 anos de experiência com
                            controle da qualidade e normas ISO, resultam em produtos confiáveis, muito bem documentados e
                            alinhados aos mais altos requisitos do mercado.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="w-full flex flex-col pt-20 scroll-mt-12" id="services">
        <x-title size="sm-latin" main="Nossos" emphasis="serviços" :template="$template"></x-title>
        <div class="w-full h-full flex px-4 md:px-20 lg:px-52 grid grid-cols-4">
            <x-card route="{{ route('services') }}"
                img_path="{{ asset('assets/templates/' . $template . '/img/webstrategy.jpg') }}"
                title="Desenvolvimento de Sistemas">
                Para atender a automação necessária para seu negócio.
            </x-card>
            <x-card route="{{ route('sites') }}"
                img_path="{{ asset('assets/templates/' . $template . '/img/webstrategy.jpg') }}" title="Criação de Sites">
                Quer fazer o seu site mas não sabe por onde começar? A Vertex está aqui pra te ajudar.
            </x-card>
            <x-card route="{{ route('services') }}"
                img_path="{{ asset('assets/templates/' . $template . '/img/webstrategy.jpg') }}"
                title="Performance e Segurança">
                Seu projeto seguro.
            </x-card>
            <x-card route="{{ route('services') }}"
                img_path="{{ asset('assets/templates/' . $template . '/img/webstrategy.jpg') }}"
                title="Migração de Conteúdo">
                Para quando você precisa transferir uma grande quantidade de dados entre bancos.
            </x-card>
        </div>
    </section>

    <section class="w-full flex flex-col pt-20 scroll-mt-12" id="contact">
        <x-title emphasis_first emphasis="Fale" main="com a gente" :template="$template"></x-title>
        <p class="paragraph-light px-4 md:px-20 lg:px-52">Estamos ansiosos para ouvir sua ideia ou seu projeto, novo ou
            existente. Preencha o formulário abaixo e a gente entra em contato com você.</p>
        <div
            class="self-center w-[30%] h-[40%] p-8 paragraph-bold grid grid-cols-4 gap-4 items-center bg-vertexBlue border-2 border-vertexDarkBlue
                rounded-3xl">
            <img class="col-span-1" src="{{ asset('assets/templates/' . $template . '/svg/phone.svg') }}">
            <div class="col-span-3">
                <div class="text-center text-white">
                    Ou liga pra gente:<br>
                    6464756756
                </div>
            </div>
        </div>
        <form action="{{ route('contact.send') }}" method="POST" class="space-y-4 px-4 md:px-20 lg:px-52">
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
                class="bg-vertexBlue hover:bg-vertexDarkBlue font-semibold text-xl text-white py-3 px-6 rounded-md transition">
                Enviar Mensagem
            </button>
        </form>
        </div>
    </section>
@endsection
