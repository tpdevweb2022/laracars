{{-- show.blade.php --}}
@extends("layouts.app")

@section("content")
    <a href={{ route("cars.index")}}> < Retour</a>
    <h1>{{ $car->brand->name }} {{ $car->type->name }}</h1>
    <img src="{{ $car->thumbnail }}" alt="{{ $car->type->name }}" width="200">
    <a href="{{ route("cars.edit", $car->id) }}">Edit</a>
@endsection
