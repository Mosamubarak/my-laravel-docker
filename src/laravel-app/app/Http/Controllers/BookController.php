<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'nullable',
            'published_year' => 'nullable|integer',
        ]);
        Book::create($validated);
        return redirect()->route('books.index')->with('success', 'Boek toegevoegd!');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'nullable',
            'published_year' => 'nullable|integer',
        ]);
        $book->update($validated);
        return redirect()->route('books.index')->with('success', 'Boek bijgewerkt!');
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'Boek verwijderd!');
    }
}
