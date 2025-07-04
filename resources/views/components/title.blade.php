@props(['size' => 'sm', 'emphasis_first' => false, 'main', 'emphasis', 'template'])

@php
    $sizeMap = [
        'sm' => ['text' => 'text-5xl', 'translate' => 'translate-y-2'],
        'sm-latin' => ['text' => 'text-5xl', 'translate' => 'translate-y-6'],
        'lg' => ['text' => 'text-8xl', 'translate' => 'translate-y-20'],
    ];

    $textSize = $sizeMap[$size]['text'] ?? 'text-5xl';
    $translateY = $sizeMap[$size]['translate'] ?? 'translate-y-2';
@endphp

<div class="w-full mb-8 px-52">
    <p class="{{ $textSize }} font-extrabold">
        @if ($emphasis_first)
            <span class="relative inline-block text-vertexBlue">
                {{ $emphasis }}
                <img src="{{ asset('assets/templates/' . $template . '/svg/needle-underline.svg') }}"
                    class="absolute left-0 bottom-0 {{ $translateY }} w-full h-auto pointer-events-none select-none"
                    alt="">
            </span>
            {{ $main }}
        @else
            {{ $main }}
            <span class="relative inline-block text-vertexBlue">
                {{ $emphasis }}
                <img src="{{ asset('assets/templates/' . $template . '/svg/needle-underline.svg') }}"
                    class="absolute left-0 bottom-0 {{ $translateY }} w-full h-auto pointer-events-none select-none"
                    alt="">
            </span>
        @endif
    </p>
</div>
