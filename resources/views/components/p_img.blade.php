@props(['img_side' => 'right', 'template', 'img_path'])

@if ($img_side == 'right')
    <div {{ $attributes->merge(['class' => 'grid gap-8 md:grid-cols-2 items-center px-4 md:px-20 lg:px-52']) }}>
        <p class="paragraph-light">
            {{ $slot }}
        </p>
        <img src="{{ asset('assets/templates/' . $template . $img_path) }}" alt="" class="rounded-xl">
    </div>
@else
    <div {{ $attributes->merge(['class' => 'grid gap-8 md:grid-cols-2 items-center px-4 md:px-20 lg:px-52']) }}>
        <img src="{{ asset('assets/templates/' . $template . $img_path) }}" alt="" class="rounded-xl">
        <p class="paragraph-light">
            {{ $slot }}
        </p>
    </div>
@endif
