<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
     // Display a listing of the resource.
    public function index()
    {
        $cars = car::all();
        return view('cars.index', compact('cars'));
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

        // $validatedData = request()->validate([
        //     'name' => 'required',
        //     'color' => ['required', 'regex:/[a-zA-Z]+%+$/'],
        //     'company' => 'required',
        // ]);

        // $car->create($validatedData);

       return redirect('/create');
    }

     // Display the specified resource.
    public function show(Car $car)
    {
        return view('cars.show', compact('car'));
    }

     // Show the form for editing the specified resource.
    public function edit(Car $car)
    {
        return view('cars.edit', compact('car'));
    }

     // Update the specified resource in storage.
    public function update(Request $request, Car $car)
    {
        $car->name = request('name');
        $car->color = request('color');
        $car->company = request('company');

        $car->save();

       return redirect('/cars');
    }

     // Remove the specified resource from storage.
    public function destroy(Car $car)
    {
        $car->delete();
        return redirect('/cars');
    }
}
