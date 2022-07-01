<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function view(Request $request, $id)
    {
        dd($request);

        $books = $this->booksList();

        if(!$book = $books[$id] ?? null){
            abort(404);
        }

        return $book['title'] . ' ' . $book['author'] . PHP_EOL;
    }

    public function books()
    {
        $booksList = $this->booksList();

        $books = '<ul>';

        foreach($booksList as $id=>$book){
            $books .= '<li><a href="'. route('book', ['id' => $id] ) .'">' . $book['title'] . '</a></li>';
        }

        $books .= '</ul>';

        return $books;
    }

    private function booksList()
    {
        return [
            1 => ['title' => 'Title 1', 'author' => 'Author 1'],
            2 => ['title' => 'Title 2', 'author' => 'Author 2'],
            3 => ['title' => 'Title 3', 'author' => 'Author 3'],
        ];
    }
}
