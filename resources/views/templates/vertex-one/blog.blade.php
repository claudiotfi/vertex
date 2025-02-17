@extends('layouts.vertex-one')

@section('content')
    <div class="blog">
        <h1>Our Blog</h1>
        @foreach($posts as $post)
            <div class="post">
                <h2>{{ $post->title }}</h2>
                <p>{{ Str::limit($post->content, 150) }}</p>
                <a href="{{ route('blog.show', $post->id) }}">Read more</a>
            </div>
        @endforeach
        <!-- Paginação -->
        { { $posts->links() }}
    </div>
@endsection
