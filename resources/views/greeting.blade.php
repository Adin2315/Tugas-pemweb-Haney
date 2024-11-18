<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting</title>
</head>
<body>
    <h1>{{ $greeting }}</h1>

    @if($time < 12)
        <p>Good Morning!</p>
    @elseif($time < 18)
        <p>Good Afternoon!</p>
    @else
        <p>Good Evening!</p>
    @endif

    <ul>
        @foreach($fruits as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html> 