@extends('layouts.vertex-one')

@section('content')
    <section class="w-full flex flex-col pt-20">
        <x-title size="md" emphasis_first emphasis="Desenvolvimento" main="de Sistemas"></x-title>
        <div class="py-8">
            <x-p_only :template="$template">
                Desenvolvimento de sistemas web é bem diferente da criação de um site. Por exemplo, em sites, a ideia é
                chamar a atenção de novos clientes e, para isso, podem ser usadas diversas técnicas de layout chamativas. Já
                em um software web, onde o usuário passa muito mais tempo do que em um site, a última coisa que você quer
                são flashes e luzes piscando toda hora na página.
            </x-p_only>
            <x-p_img img_side="left" :template="$template" img_path="/img/puzzle.jpg"
                class="bg-[hsl(218,17%,9%,1)] text-white p-8">
                Outra grande diferença está na complexidade. Sites podem ter alguma lógica, mas nada comparado a um
                software
                completo, que geralmente possui diversas lógicas diferentes para cada tipo de funcionalidade.<br><br>
                Por exemplo, ao emitir uma nota fiscal, é necessário um sistema dinâmico que busque os produtos
                corretos,
                atualize automaticamente as quantidades, calcule impostos e gere os valores totais com precisão.<br><br>
                Já uma tela de conciliação bancária exige acesso integrado a extratos bancários, cadastro detalhado de
                contas e bancos, cálculo de saldos atualizados e tratamento de diversas regras para garantir que todas
                as
                transações sejam conferidas corretamente.<br><br>
                O bom desenvolvimento considera onde todas essas peças se encaixam.
            </x-p_img>
            <x-p_only :template="$template">
                Parece complexo? De fato é, mas na Vertex você deixa tudo isso por nossa conta. Todas as lógicas seguem
                exatamente o que você precisa para automatizar as atividades de sua empresa ou negócio.
                E se pensarmos em alguma ideia interessante para melhorar o projeto, nós compartilhamos com você.
                Ao contratar a Vertex, você tem acesso não só às nossas habilidades técnicas, mas também às nossas
                sugestões
                e insights, para que seu projeto evolua sempre que fizer sentido para você!
            </x-p_only>
        </div>
    </section>
@endsection
