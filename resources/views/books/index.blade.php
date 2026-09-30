<!DOCTYPE html>
<html>
<head><title>Books</title></head>
<body>
    <p>Student: Danielle John T. Lopez</p>

    <h1>Books</h1>

    @foreach ($books as $book)
        <p>
            <a href="/books/{{ $book['id'] }}">{{ $book['title'] }}</a>
            by {{ $book['author'] }} ({{ $book['genre'] }}, {{ $book['year'] }})
        </p>
    @endforeach
</body>
</html>
@extends('layouts.app')

@section('title', 'Books')

@section('content')
    <h1>Books</h1>
    <p class="sub">{{ count($books) }} books to browse</p>

    <nav class="pills">
        <a class="pill active" href="/books">All</a>
        <a class="pill" href="/books/filter/Sci-Fi">Sci-Fi</a>
        <a class="pill" href="/books/filter/Fantasy">Fantasy</a>
        <a class="pill" href="/books/filter/Romance">Romance</a>
        <a class="pill" href="/books/filter/Thriller">Thriller</a>
    </nav>

    <div class="grid">
        @foreach ($books as $book)
            <div class="card genre-{{ strtolower($book['genre']) }}">
    <span class="badge">{{ $book['genre'] }}</span>
    <h3><a href="/books/{{ $book['id'] }}">{{ $book['title'] }}</a></h3>
    <p class="meta">{{ $book['author'] }} · {{ $book['year'] }}</p>
</div>
        @endforeach
    </div>
@endsection