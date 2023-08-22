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
    <div class="container">
        <h1 class="mb-5">LARAVEL MOVIES</h1>
        <div class="row row-cols-2">
            @forelse ($movies as $movie)
                <div class="col mb-4">
                    <div class="card h-100 p-4">
                        <h1 class="fw-bold">
                            {{ $movie->title }}
                        </h1>
                        <h3>
                            Titolo originale: {{ $movie->original_title }}
                        </h3>
                        <a href="#">Più dettagli</a>
                    </div>
                </div>
            @empty
                <h1>NOT FOUND</h1>
            @endforelse
        </div>
    </div>
</body>

</html>
