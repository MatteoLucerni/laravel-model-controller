<!DOCTYPE html>
<html lang="en">

@extends('includes.head')
@section('title', 'Home')

<body>
    <div class="container pt-5">
        <h1 class="mb-5 text-center">LARAVEL MOVIES</h1>
        <a href="{{ route('index') }}">
            <h3>Lista film</h3>
        </a>
    </div>
</body>

</html>
