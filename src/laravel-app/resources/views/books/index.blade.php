@extends('layout')

@section('content')
<div class="container mt-4">
    <h1>Boekenoverzicht</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Nieuw boek toevoegen</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titel</th>
                <th>Auteur</th>
                <th>Jaar</th>
                <th>Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td>{{ $book->published_year }}</td>
                    <td>
                        <a href="{{ route('books.show', $book) }}" class="btn btn-info btn-sm">Bekijk</a>
                        <a href="{{ route('books.edit', $book) }}" class="btn btn-warning btn-sm">Bewerk</a>
                        <form action="{{ route('books.destroy', $book) }}" method="POST" style="display:inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Weet je het zeker?')">Verwijder</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
