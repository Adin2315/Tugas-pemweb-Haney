<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $post['title'] }}</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 20px;
                background-color: #f4f4f4;
            }
            article {
                background-color: #fff;
                padding: 20px;
                margin: 20px auto;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                max-width: 800px;
            }
            h1 {
                color: #333;
            }
            p {
                color: #555;
            }
            .post-date {
                font-size: 0.9em;
                color: #888;
                margin-bottom: 10px;
            }
            a {
                color: #3490dc;
                text-decoration: none;
            }
            a:hover {
                text-decoration: underline;
            }
        </style>
    </head>
    <body>
        <article>
            <h1>{{ $post['title'] }}</h1>
            <p class="post-date">Posted on: {{ $post['date'] }}</p>
            <p>{{ $post['content'] }}</p>
        </article>

        <a href="{{ url('/') }}">Back to Blog</a>
    </body>
</html>
