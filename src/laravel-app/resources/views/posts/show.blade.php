@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded shadow max-w-lg mx-auto">
        <h1 class="text-2xl font-bold mb-2">{{ $post->title }}</h1>
        <p class="mb-4">{{ $post->body }}</p>
        <a href="{{ route('posts.index') }}" class="text-blue-600 hover:underline">Back to Posts</a>
    </div>
@endsection
