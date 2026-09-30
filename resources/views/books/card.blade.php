<div class="card genre-{{ strtolower($book['genre']) }}">
    <span class="badge">{{ $book['genre'] }}</span>
    <h3><a href="/books/{{ $book['id'] }}">{{ $book['title'] }}</a></h3>
    <p class="meta">{{ $book['author'] }} · {{ $book['year'] }}</p>
</div>