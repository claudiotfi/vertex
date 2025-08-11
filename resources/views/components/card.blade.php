@props(['route', 'img_path', 'title'])

<div class="bg-white bg-opacity-90 p-6 shadow hover:shadow-lg transition flex flex-col items-center">
    <a href="{{ $route }}">
        <img src="{{ $img_path }}" class="w-full h-auto md:h-64 object-cover rounded-xl" alt="{{ $title }}">
    </a>
    <h2 class="text-blue-900 text-2xl font-bold mt-4 mb-2 text-center">{{ $title }}</h2>
    <p class="text-gray-700 text-center">{{ $slot }}</p>
</div>
