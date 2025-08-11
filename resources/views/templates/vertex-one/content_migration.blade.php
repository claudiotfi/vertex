@extends('layouts.vertex-one')

@section('content')
    <section class="w-full flex flex-col pt-20">
        <x-title size="sm-latin" emphasis_first emphasis="Migração" main="de Conteúdo"></x-title>
        <div class="py-8">
            <x-p_img img_side="right" :template="$template" img_path="/img/migration2.jpg" class="rounded-xl">
                Novas tecnologias surgem quase diariamente, tornando essencial uma atualização constante para acompanhar as
                demandas de seu negócio ou dos seus clientes. Mas você acha difícil fazer isso só de pensar no trabalho que
                dá migrar todo o seu conteúdo para uma nova ferramenta, banco de dados ou sistema?<br><br><br>
                Se a resposta for sim, fique tranquilo. A Vertex assume essa tarefa pesada para você, cuidando de todo o
                processo de migração com segurança e eficiência. Transferimos o conteúdo do seu site, banco de dados ou
                sistema atual para o novo ambiente ou para a nuvem, garantindo que nada seja perdido no caminho. Além disso,
                se houver dúvidas sobre a integridade dos dados ou o formato adequado para o novo sistema, verificamos os
                dados e fazemos todos os ajustes necessários para que tudo funcione sem complicações para você.
            </x-p_img>
        </div>
    </section>
@endsection
