@extends('layouts.vertex-one')

@section('content')
    <section class="w-full bg-white">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-5xl text-blue-900 mb-8">Blog</h1>
            @foreach ($posts as $post)
                <div class="post">
                    <h2>{{ $post->title }}</h2>
                    <p>{{ Str::limit($post->content, 150) }}</p>
                    <a href="{{ route('blog.show', $post->id) }}">Read more</a>
                </div>
            @endforeach
            <!-- Paginação -->
            { { $posts->links() }}
        </div>
    </section>
@endsection
