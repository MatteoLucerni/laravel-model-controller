<!DOCTYPE html>
<html lang="en">
@extends('includes.head')
@section('title', 'Lista film')

<body>
    <div class="container py-5">
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
                        <a href="{{ route('show', $movie) }}">Più dettagli</a>
                    </div>
                </div>
            @empty
                <h1>NOT FOUND</h1>
            @endforelse
        </div>
        <a href="{{ route('home') }}">Torna alla homepage</a>
    </div>
</body>

</html>
