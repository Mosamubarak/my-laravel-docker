@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>Nieuw boek toevoegen</h1>
    <form method="POST" action="{{ route('books.store') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titel</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Auteur</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <div class="mb-3">
            <label for="published_year" class="form-label">Jaar van publicatie</label>
            <input type="number" class="form-control" id="published_year" name="published_year">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Beschrijving</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Opslaan</button>
        <a href="{{ route('books.index') }}" class="btn btn-secondary">Annuleren</a>
    </form>
</div>
@endsection
