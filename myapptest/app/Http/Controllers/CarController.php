<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
     // Display a listing of the resource.
    public function index()
    {
        $name = 'Lmaborghini';
        return view('cars.index', ['name'=> $name]);
    }

     // Show the form for creating a new resource.
    public function create()
    {
        return view('cars.create');
    }

     // Store a newly created resource in storage.
    public function store(Request $request)
    {
        // return "Saved";
        // return $request->all();
        $car = new Car();
        $car->name = request('name');
        $car->color = request('color');
        $car->company = request('company');

        $car->save();

       return redirect('/create');
    }

     // Display the specified resource.
    public function show(Car $car)
    {
        return view('cars.show');
    }

     // Show the form for editing the specified resource.
    public function edit(Car $car)
    {
        //
    }

     // Update the specified resource in storage.
    public function update(Request $request, Car $car)
    {
        //
    }

     // Remove the specified resource from storage.
    public function destroy(Car $car)
    {
        //
    }
}
