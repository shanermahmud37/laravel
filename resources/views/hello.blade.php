<!DOCTYPE html>
<html>

<head>
    <title>Docker Laravel</title>
    <style>
        body {
            font-family: sans-serif;
            background: #f4f4f4;
            padding: 2rem;
        }

        img {
            max-width: 200px;
        }
    </style>
</head>

<body>
    <h1>Hello from Laravel inside Docker!</h1>
    <img src="{{ asset('test.png') }}" alt="Test Image" />
    <p><a href="{{ url('/next') }}">Go to next page</a></p>
</body>

</html>