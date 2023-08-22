<!DOCTYPE html>
<html lang="en">

@extends('includes.head')
@section('title', 'Dettagli Film')

<body>
    <div class="container pt-5">
        <h1>Dettagli film: {{ $movie->title }}</h1>
        <div class="card p-4 my-5">
            <h1>{{ $movie->title }}</h1>
            <h3>Titolo originale: {{ $movie->original_title }}</h3>
            <p>Nazionalità: {{ $movie->nationality }}</p>
            <p>Uscita: {{ $movie->date }}</p>
            <p>Voto: {{ $movie->vote }}/10</p>
        </div>
        <a href="{{ route('index') }}">Torna alla lista film</a>
    </div>
</body>

</html>
