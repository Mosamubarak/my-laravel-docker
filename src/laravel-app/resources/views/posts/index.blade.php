@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Test123</h1>
    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="grid gap-4">
        @foreach($posts as $post)
            <div class="bg-white p-4 rounded shadow flex justify-between items-center">
                <div>
                    <a href="{{ route('posts.show', $post) }}" class="text-lg font-semibold text-blue-700 hover:underline">{{ $post->title }}</a>
                </div>
                <div class="flex gap-2">
                    <a href="{{ route('posts.edit', $post) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
