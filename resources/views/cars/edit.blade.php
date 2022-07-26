@extends("layouts.app")

@section("content")
    <h1>Ajouter une voiture</h1>
    <form action={{ route("cars.store") }} method="POST">
        @csrf
        <div>
            <label for="brand">Marque</label>
            <input type="text" id="brand" name="brand" required value="{{ $car->brand }}" />
            @error("brand")
                Remplis mieux que ça !
            @enderror
        </div>
        <div>
            <label for="type">Modele</label>
            <input type="text" id="type" name="type" required value="{{ $car->type }}" />
            @error("type")
                Remplis mieux que ça !
            @enderror
        </div>
        <div>
            <label for="price">Prix</label>
            <input type="number" step="0.01" id="price" name="price" required value="{{ $car->price }}" />
            @error("price")
                Remplis mieux que ça !
            @enderror
        </div>
        <div>
            <label for="weight">Poids</label>
            <input type="number" id="weight" name="weight" required value="{{ $car->weight }}" />
            @error("weight")
                Remplis mieux que ça !
            @enderror
        </div>
        <div>
            <label for="energy">Énergie</label>
            <input type="text" id="energy" name="energy" required value="{{ $car->energy }}" />
            @error("energy")
                Remplis mieux que ça !
            @enderror
        </div>
        <div>
            <label for="power">Puissance</label>
            <input type="number" id="power" name="power" required value="{{ $car->power }}"/>
            @error("power")
                Remplis mieux que ça !
            @enderror
        </div>
        <div>
            <label for="release_date">Date de sortie</label>
            <input type="date" id="release_date" name="release_date"  value="{{ $car->release_date }}" required />
            @error("release_date")
                Remplis mieux que ça !
            @enderror
        </div>
        <div>
            <label for="thumbnail">Image URL</label>
            <input type="url" id="thumbnail" name="thumbnail" required value="{{ $car->thumbnail }}"/> />
            @error("thumbnail")
                Remplis mieux que ça !
            @enderror
        </div>
        <div>
            <input type="submit" value="Créer ma voiture">
        </div>
    </form>
@endsection
