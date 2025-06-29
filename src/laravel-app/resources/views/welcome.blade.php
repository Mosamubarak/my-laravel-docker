@extends('layout')

@section('content')
<div class="container mt-4 text-center">
    <h1>Welkom bij het Boekenbeheer!</h1>
    <p class="lead">Beheer eenvoudig je boeken met deze moderne Laravel CRUD-applicatie.</p>
    <a href="{{ route('books.index') }}" class="btn btn-lg btn-primary mt-3">Bekijk alle boeken</a>
</div>
@endsection
