@extends("layouts.app")

@section("content")
    <h1>Toutes nos voitures</h1>
    {{-- On créé notre liste --}}
    <ul>
        {{-- On boucle chacun des résultats de la variable $cars --}}
        @foreach($cars as $car)
            {{-- on affiche les données d'une $car --}}
            <li>
                <a href={{ route("cars.show", $car) }}>
                    {{ $car->id }} {{ $car->brand }} {{ $car->type }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
