<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $book['title'] }}</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                text-align: center;
                margin: 0;
                padding: 20px;
            }
            .book-details {
                max-width: 400px;
                margin: 0 auto;
                background-color: white;
                padding: 20px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            a {
                display: block;
                margin-top: 20px;
                color: #3498db;
                text-decoration: none;
            }
            a:hover {
                color: #2c3e50;
            }
        </style>
    </head>
    <body>
        <div class="book-details">
            <h1>{{ $book->titlebook }}</h1>
            <p><strong>Author:</strong> {{ $book->authorbook }}</p>
            <a href="{{ route('books.index') }}">Back to Book List</a>
        </div>
    </body>
</html>
