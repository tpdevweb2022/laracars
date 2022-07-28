@extends("layouts.app")

@section("content")
{{-- On créé notre liste --}}
<h1>Toutes nos voitures</h1>
        <div class="cars_container">
            {{-- On boucle chacun des résultats de la variable $cars --}}
            @foreach($cars as $car)
                {{-- on affiche les données d'une $car --}}
                <div class="car_detail">
                    <a href={{ route("cars.show", $car) }}>
                        <h2>{{ $car->brand }} {{ $car->type }}</h2>
                    </a>
                    <p>Ref : {{ $car->id }}</p>
                    <img src="{{ $car->thumbnail }}" alt="">
                </div>
            @endforeach
        </div>
@endsection
