<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book List</title>
    </head>
    <body>
        <h1>Book List</h1>
        <ul>
            @foreach ($books as $book)
            <li><a href="{{ route('books.show', $book['id']) }}">
                {{ $book['title']}} by {{ $book['author'] }}
            </a></li>
            @endforeach
        </ul>
    </body>
</html>
