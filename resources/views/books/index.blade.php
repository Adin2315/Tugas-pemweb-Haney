<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Book List</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                text-align: center;
                margin: 0;
                padding: 20px;
            }
            h1 {
                color: #333;
                padding-bottom: 10px;
                border-bottom: 2px solid #333;
            }
            .book-list {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                padding: 0;
            }
            .book-card {
                background-color: white;
                border: 1px solid #ddd;
                border-radius: 10px;
                width: 300px;
                margin: 15px;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            a {
                text-decoration: none;
                color: #2c3e50;
                font-weight: bold;
            }
            a:hover {
                color: #3498db;
            }
            .add-book-btn {
                display: inline-block;
                padding: 10px 20px;
                background-color: #2c3e50;
                color: #fff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                text-decoration: none;
                margin-top: 20px;
            }
            .add-book-btn:hover {
                background-color: #3498db;
            }
        </style>
    </head>
    <body>
        <h1>Book List</h1>
        <div class="book-list">
            @foreach ($books as $book)
            <div class="book-card">
                <p><strong>{{ $book['title'] }}</strong></p>
                <p>by {{ $book['author'] }}</p>
                <a href="{{ route('books.show', $book->id) }}">View Details</a>
            </div>
            @endforeach
        </div>
        <a href="{{ route('books.create') }}" class="add-book-btn">Add New Book</a>
        @if (session('success'))
            <div style="color: green; margin-top: 20px;">
                {{ session('success') }}
            </div>
        @endif
    </body>
</html>
