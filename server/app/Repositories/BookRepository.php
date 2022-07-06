<?php

namespace App\Repositories;

use App\Models\Book;

class BookRepository
{
    public function list()
    {
        return Book::select('books.*', 'users.name as name')
            ->join('users', 'books.user_id', '=', 'users.id')
            ->get();
    }

    public function byId($id)
    {
        return Book::find($id);
    }
}
