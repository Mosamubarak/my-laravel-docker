@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST" class="bg-white p-6 rounded shadow max-w-lg mx-auto">
        @csrf
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Title</label>
            <input type="text" name="title" class="w-full border rounded px-3 py-2" placeholder="Title" required>
        </div>
        <div class="mb-4">
            <label class="block mb-1 font-semibold">Body</label>
            <textarea name="body" class="w-full border rounded px-3 py-2" placeholder="Body" required></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Save</button>
    </form>
@endsection
