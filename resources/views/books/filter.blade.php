
@extends('layouts.app')

@section('title', 'Filter')

@section('content')
    {{-- D4: state which filter is active --}}
    @if ($genre)
        <h1>Showing genre: {{ $genre }}</h1>
    @else
        <h1>Showing all books</h1>
    @endif
    <p class="sub">{{ count($books) }} result(s)</p>

    <nav class="pills">
        <a class="pill {{ $genre ? '' : 'active' }}" href="/books/filter">All</a>
        @foreach (['Sci-Fi', 'Fantasy', 'Romance', 'Thriller'] as $g)
            <a class="pill {{ strcasecmp((string) $genre, $g) === 0 ? 'active' : '' }}"
               href="/books/filter/{{ $g }}">{{ $g }}</a>
        @endforeach
    </nav>

    @if (count($books) > 0)
        <div class="grid">
            @foreach ($books as $book)
               <div class="card genre-{{ strtolower($book['genre']) }}">
    <span class="badge">{{ $book['genre'] }}</span>
    <h3><a href="/books/{{ $book['id'] }}">{{ $book['title'] }}</a></h3>
    <p class="meta">{{ $book['author'] }} · {{ $book['year'] }}</p>
</div>
            @endforeach
        </div>
    @else
        <div class="empty">No books match that genre.</div>
    @endif

    <a class="back" href="/books">← Back to the list</a>
@endsection