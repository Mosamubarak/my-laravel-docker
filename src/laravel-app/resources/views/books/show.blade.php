@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>{{ $book->title }}</h1>
    <p><strong>Auteur:</strong> {{ $book->author }}</p>
    <p><strong>Jaar van publicatie:</strong> {{ $book->published_year }}</p>
    <p><strong>Beschrijving:</strong> {{ $book->description }}</p>
    <a href="{{ route('books.index') }}" class="btn btn-primary">Terug naar overzicht</a>
    <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Bewerk</a>
</div>
@endsection
