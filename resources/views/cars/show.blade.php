{{-- show.blade.php --}}
@extends("layouts.app")

@section("content")
    <a href={{ route("cars.index")}}> < Retour</a>
    <h1>{{ $car->brand }} {{ $car->type }}</h1>
    <img src="{{ $car->thumbnail }}" alt="{{ $car->type }}" width="200">
@endsection
