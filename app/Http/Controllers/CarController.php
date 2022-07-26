<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy("id", "desc")->paginate(30);
        return view("cars.index", compact("cars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("cars.create");
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
        $car->brand = $request->brand;
        $car->type = $request->type;
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
    public function update(Request $request, Car $car)
    {
        //
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
