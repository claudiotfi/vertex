@extends('templates.vertex-one.index')

@section('content')
    <div class="contact">
        <h1>Contact Us</h1>
        <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Message</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Send</button>
        </form>

        @if(session('success'))
            <p>{{ session('success') }}</p>
        @endif
    </div>
@endsection
