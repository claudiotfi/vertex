@props(['route', 'link_text'])

<div class="w-full md:w-1/2 p-8">
    <p class="text-lg md:text-xl mb-8">
        {{ $slot }}
    </p>
    <a href="{{ $route }}"
        class="bg-blue-500 hover:bg-blue-600 text-white py-3 px-6 rounded-full transition">
        {{ $link_text }}
    </a>
</div>