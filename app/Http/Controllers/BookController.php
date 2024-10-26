<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BooksData;

class BookController extends Controller
{
    public function index()
    {
        $books = new BooksData();
        $books->getAllBooks();
        return view('books.index', ['books' => $books]);
    }

    public function show($id)
    {
        $book = new BooksData();
        $book->getBookById($id);
        if (!$book) {
            abort(404);
        }
        return view('books.show', ['book' => $book]);
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255'
        ]);

        $insert = new BooksData();
        $insert->insertBook($request->title, $request->author);

        return redirect()->route('books.index')->with('success', 'Buku berhasil ditambahkan!');
    }
    public function edit($id)
    {
        $book = (new BooksData())->getBookById($id);
        if (!$book) {
            abort(404);
        }
        return view('books.edit', ['book' => $book[0]]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255'
        ]);

        (new BooksData())->updateBook($id, $request->title, $request->author);

        return redirect()->route('books.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        (new BooksData())->deleteBook($id);

        return redirect()->route('books.index')->with('success', 'Buku berhasil dihapus!');
    }
}
