<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
         $book = [
        ['title' => 'Alpha Phi omega', 'author' => 'Frank Reed Horton',     'year' => 1925],
        ['title' => 'OneFam', 'author' => 'ellanel',   'year' => 2015],
        ['title' => 'AYS',        'author' => 'CatSU', 'year' => 2026],
        ['title' => 'Po-on',            'author' => 'F. Sionil Jose', 'year' => 1984],
        ['title' => 'Smaller and Smaller Circles', 'author' => 'F.H. Batacan', 'year' => 2002],
    ];

    return view('books.index', ['books' => $book]);
    }

}
