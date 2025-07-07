@extends('layouts.vertex-one')

@section('content')
    <section class="w-full flex flex-col pt-20">
        <x-title size="md-latin" emphasis_first emphasis="Performance e Segurança" main=""></x-title>
        <div class="py-8">
            <x-p_img :template="$template" img_path="/svg/computer.svg">
                Texto 1.
            </x-p_img>
            <x-p_img img_side="left" :template="$template" img_path="/svg/question_mark.svg" class="bg-vertexBlue text-white">
                Texto 2.
            </x-p_img>
            <x-p_img :template="$template" img_path="/svg/computer.svg">
                Texto 3.
            </x-p_img>
        </div>
    </section>
@endsection
