<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>My Blog</title>

        <style>
            body {
                font-family: Arial, sans-serif;
                line-height: 1.6;
                margin: 0;
                padding: 20px;
                background-color: #f4f4f4;
            }
            h1 {
                color: #333;
                text-align: center;
            }
            article {
                background-color: #fff;
                padding: 15px;
                margin: 20px auto;
                border-radius: 5px;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
                max-width: 800px;
            }
            h2 {
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
        </style>

    </head>
    <body>
        <h1>Welcome to My Blog</h1>

        @foreach ($posts as $index => $post)
            <article>
                <h2>{{ $post['title'] }}</h2>
                <p class="post-date">Posted on: {{ $post['date'] }}</p>
                <p>{{ $post['content'] }}</p>
                <a href="{{ route('posts.show', $index) }}">Read more</a>
            </article>
        @endforeach

    </body>
</html>
