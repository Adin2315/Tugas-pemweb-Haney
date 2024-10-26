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
    public function getAllBooks()
    {
        return DB::select("select * from booksdata");
    }
    public function getBookById($id)
    {
        return DB::select("select * from booksdata where id = ?", [$id]);
    }
    public function updateBook($id, $title, $author)
    {
        return DB::update("update booksdata set titlebook = ?, authorbook = ? where id = ?", [$title, $author, $id]);
    }

    public function deleteBook($id)
    {
        return DB::delete("delete from booksdata where id = ?", [$id]);
    }
}
