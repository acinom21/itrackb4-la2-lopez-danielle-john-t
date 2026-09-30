@extends('layouts.app')

@section('title', $book['title'])

@section('content')
    <div class="detail genre-{{ strtolower($book['genre']) }}">
        @if (!empty($featured))
            <span class="featured-tag">⭐ Featured Pick</span>
        @endif

        <h1>{{ $book['title'] }}</h1>

        <dl>
            <dt>ID</dt>       <dd>{{ $book['id'] }}</dd>
            <dt>Author</dt>   <dd>{{ $book['author'] }}</dd>
            <dt>Genre</dt>    <dd><span class="badge">{{ $book['genre'] }}</span></dd>
            <dt>Year</dt>     <dd>{{ $book['year'] }}</dd>
        </dl>

        <a class="back" href="/books">← Back to the list</a>
    </div>
@endsection