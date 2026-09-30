<?php

namespace App\Http\Controllers;

class BookController extends Controller
{
    // A1: data lives in a private helper, not in index()
    private function getBooks(): array
    {
        // A2: 8 items. A3: 5 fields each, with a unique id.
        // A4: genre is shared across items.
        // Array keys match each item's id, so a later lookup is $books[$id].
        return [
            1 => ['id' => 1, 'title' => 'Dune',                     'author' => 'Frank Herbert',    'genre' => 'Sci-Fi',  'year' => 1965],
            2 => ['id' => 2, 'title' => 'Neuromancer',              'author' => 'William Gibson',   'genre' => 'Sci-Fi',  'year' => 1984],
            3 => ['id' => 3, 'title' => 'The Hobbit',               'author' => 'J.R.R. Tolkien',   'genre' => 'Fantasy', 'year' => 1937],
            4 => ['id' => 4, 'title' => 'A Wizard of Earthsea',     'author' => 'Ursula K. Le Guin','genre' => 'Fantasy', 'year' => 1968],
            5 => ['id' => 5, 'title' => 'Pride and Prejudice',      'author' => 'Jane Austen',      'genre' => 'Romance', 'year' => 1813],
            6 => ['id' => 6, 'title' => 'Jane Eyre',                'author' => 'Charlotte Brontë', 'genre' => 'Romance', 'year' => 1847],
            7 => ['id' => 7, 'title' => 'Gone Girl',                'author' => 'Gillian Flynn',    'genre' => 'Thriller','year' => 2012],
            8 => ['id' => 8, 'title' => 'The Girl with the Dragon Tattoo', 'author' => 'Stieg Larsson', 'genre' => 'Thriller', 'year' => 2005],
        ];
    }

    public function index()
    {
        // A5: index() calls the helper instead of holding the data
        $books = $this->getBooks();

        // Same view and same variable name as LA2, so nothing changes visually (A6)
        return view('books.index', ['books' => $books]);
    }
    public function show($id)
{
    $books = $this->getBooks();

    // B3: check first, then decide. A missing id gives a clean 404.
    if (!isset($books[$id])) {
        abort(404);
    }

    // B2: keys match ids, so lookup is one expression
    return view('books.show', ['book' => $books[$id]]);
}

public function featured()
{
    $books = $this->getBooks();

    // C2: one specific item I chose (id 1 here, change it to yours)
    return view('books.show', ['book' => $books[1], 'featured' => true]);
}

// D1: "= null" in the signature is the controller half of "optional"
public function filter($genre = null)
{
    $books = $this->getBooks();
    $results = [];

    foreach ($books as $book) {
        if ($genre === null || strcasecmp($book['genre'], $genre) === 0) {
            $results[] = $book;
        }
    }

    return view('books.filter', ['books' => $results, 'genre' => $genre]);
}
}