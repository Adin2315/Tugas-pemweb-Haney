<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $book['title'] }}</title>
    </head>
    <>
        <h1>{{ $book['title'] }}</h1>
        <p>Author : {{ $book['author'] }}</p>
        <a href="{{ route('books.index') }}">Back To Book List</a>
    </body>
</html>
