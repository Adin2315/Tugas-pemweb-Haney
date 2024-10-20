<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add New Book</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f9;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .card {
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                padding: 20px;
                max-width: 400px;
                width: 100%;
            }
            h1 {
                text-align: center;
                margin-bottom: 20px;
            }
            label {
                display: block;
                margin-bottom: 5px;
                font-weight: bold;
            }
            input[type="text"] {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ddd;
                border-radius: 5px;
            }
            button {
                width: 100%;
                padding: 10px;
                background-color: #2c3e50;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            button:hover {
                background-color: #3498db;
            }
            .back-link {
                display: block;
                text-align: center;
                margin-top: 10px;
                text-decoration: none;
                color: #3498db;
            }
            .back-link:hover {
                color: #2c3e50;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>Add New Book</h1>
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                <label for="title">Book Title:</label>
                <input type="text" id="title" name="title" required>

                <label for="author">Author:</label>
                <input type="text" id="author" name="author" required>

                <button type="submit">Add Book</button>
            </form>
            <a href="{{ route('books.index') }}" class="back-link">Back to Book List</a>
        </div>
    </body>
</html>
