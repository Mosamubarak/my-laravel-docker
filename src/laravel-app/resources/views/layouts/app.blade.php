<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen">
    <nav class="bg-blue-600 p-4 shadow">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ route('posts.index') }}" class="text-orange font-bold text-xl">Home</a>
            <a href="{{ route('posts.create') }}" class="bg-white text-blue-600 px-4 py-2 rounded shadow hover:bg-blue-100">Create Post</a>
        </div>
    </nav>
    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>
