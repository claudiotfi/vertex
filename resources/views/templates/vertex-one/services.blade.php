@extends('layouts.vertex-one')

@section('content')
    <section class="w-full flex flex-col pt-20">
        <x-title size="sm-latin" emphasis_first emphasis="Construção" main="de Sites"></x-title>
        <div class="py-8">
            <div class="grid gap-8 md:grid-cols-2 items-center px-4 md:px-20 lg:px-52">
                <p class="paragraph-light">
                    Hoje em dia, construir um site se tornou algo simples. A ampla oferta de ferramentas disponíveis permite
                    que, mesmo com pouca experiência, qualquer pessoa consiga criar um. Mas construir um site que realmente
                    atenda às necessidades do seu projeto, do seu negócio ou dos seus usuários exige uma estratégia sólida.
                </p>
                <img src="{{ asset('assets/templates/' . $template . '/img/webdesign_tools.jpg') }}" alt="">
            </div>
            <div class="grid gap-8 md:grid-cols-2 items-center bg-vertexBlue text-white px-4 md:px-20 lg:px-52">
                <img src="{{ asset('assets/templates/' . $template . '/svg/question_mark.svg') }}" alt="">
                <p class="paragraph-light">
                    Construir pode ser mais fácil, mas responder perguntas essenciais para definir a estratégia correta, nem
                    tanto.<br><br>
                    Por exemplo: quais são seus objetivos? Seu site será institucional, e-commerce, portal de conteúdo ou
                    algo diferente? Você quer gerar leads, vender ou apenas informar? Quais KPIs (indicadores-chave de
                    performance) serão usados? Quem é seu público-alvo? Em quais dispositivos eles acessam?<br><br>
                    Essas são apenas algumas das muitas perguntas que precisam de resposta antes mesmo de começar a
                    construção.
                </p>
            </div>
            <div class="grid gap-8 md:grid-cols-2 items-center">
                <img src="{{ asset('assets/templates/' . $template . '/img/webdesign_tools.jpg') }}" alt="">
                <p class="paragraph-light">
                    Com a experiência da Vertex, você terá apoio para definir uma estratégia clara para seu
                    projeto. Com a estratétgia definida, se quiser, pode até construir o site por conta própria. Ou então
                    pode deixar tudo com a gente. Seja como for, o contato com você será constante, da maneira que for mais
                    confortável. Não gosta de videoconferências? Fazemos reuniões presenciais. Prefere receber um resumo
                    diário do andamento? Enviamos
                    no ritmo que você preferir, pelo meio que você mais usa (e-mail, WhatsApp, etc.). Tudo isso para que
                    você esteja sempre por dentro de tudo o que está acontecendo com seu projeto.
                </p>
            </div>
        </div>
    </section>
@endsection
