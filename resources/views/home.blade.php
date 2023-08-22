<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
    <div class="container pt-5">
        <h1 class="mb-5 text-center">LARAVEL MOVIES</h1>
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
                        <a href="{{ route('movie') }}">Più dettagli</a>
                    </div>
                </div>
            @empty
                <h1>NOT FOUND</h1>
            @endforelse
        </div>
    </div>
</body>

</html>
