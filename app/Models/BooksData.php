<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BooksData extends Model
{
    public function insertBook($title, $author)
    {
        return DB::insert("insert into booksdata (titlebook, authorbook) value (?, ?)", [$title, $author]);
    }

    // Method to get all books
    public function getAllBooks()
    {
        return DB::select("select * from booksdata");
    }

    // Method to get a single book by ID
    public function getBookById($id)
    {
        return DB::select("select * from booksdata where id = ?", [$id]);
    }
}
