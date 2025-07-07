@extends('layouts.vertex-one')

@section('content')
    <section class="w-full flex flex-col pt-20">
        <x-title size="md" emphasis_first emphasis="Desenvolvimento" main="de Sistemas"></x-title>
        <div class="py-8">
            <x-p_img :template="$template" img_path="/svg/computer.svg">

            </x-p_img>
        </div>
    </section>
@endsection
