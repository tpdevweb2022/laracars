<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Type;
use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy("id", "desc")->paginate(12);
        // $cars = Car::all();
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // On récupère $brands qui contient toutes nos marques
        $brands = Brand::all();
        $types = Type::all();
        return view("cars.create", [
            "brands" => $brands,
            "types" => $types,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCarRequest $request)
    {
        // $request->validate([
        //     "brand" => "required",
        //     "type" => "required",
        //     "price" => "required",
        //     "weight" => "required",
        //     "power" => "required",
        //     "energy" => "required",
        //     "release_date" => ["required", "date"],
        //     "thumbnail" => ["required", "url"],
        // ]);

        $car = new Car;
        $car->brand_id = $request->brand_id; // INT
        $car->type_id = $request->type_id; // INT
        $car->price = $request->price;
        $car->energy = $request->energy;
        $car->power = $request->power;
        $car->release_date = $request->release_date;
        $car->weight = $request->weight;
        $car->thumbnail = $request->thumbnail;
        $car->save();

        return redirect()->route("cars.index");


        //dd($car);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $car)
    {
        return view("cars.show", compact("car"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $car)
    {
        $data = Car::select("*")->where(['id' => $car->id])->firstOrFail();
        // dd($data);
        return view("cars.edit", ["car" => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCarRequest $request, Car $car)
    {
        // $car = new Car;
        $car = Car::select("*")->where(['id' => $car->id])->firstOrFail();
        $car->brand_id = $request->brand_id;
        $car->type_id = $request->type_id;
        $car->price = $request->price;
        $car->energy = $request->energy;
        $car->power = $request->power;
        $car->release_date = $request->release_date;
        $car->weight = $request->weight;
        $car->thumbnail = $request->thumbnail;
        $car->save();

        return redirect()->route("cars.show", $car->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Car  $car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $car)
    {
        //
    }
}
