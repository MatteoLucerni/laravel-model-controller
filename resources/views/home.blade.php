<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movies</title>

    @vite('resources/js/app.js')
</head>

<body>
    <h1>TEST</h1>
    @forelse ($movies as $movie)
        <h1>{{ $movie->title }}</h1>
    @empty
        <h1>NOT FOUND</h1>
    @endforelse
</body>

</html>
