<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::orderBy('id')->paginate(100);
        return view('/car', ['cars' => $cars]);
    }

    public function create()
    {
        return view('car.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'c_name' => 'required',
            'c_img' => 'required',
            'c_detail' => 'required',
            'c_engine_id' => 'required',
            'c_brand_id' => 'required',
        ]);
        Car::create($request->post());

        return redirect()->route('car.index');
    }

    public function show( Car $car)
    {
        return view('car.show',compact('car'));
    }

    public function edit( Car $car)
    {
        return view('car.edit',compact('car'));
    }

    public function update( Request $request, Car $car)
    {
        $request->validate([
            'c_name' => 'required',
            'c_img' => 'required',
            'c_detail' => 'required',
            'c_engine_id' => 'required',
            'c_brand_id' => 'required',
        ]);
        $car->fill($request->post())->save();

        return redirect()->route('car.index');

    }

    public function destroy(Car $car)
    {
        $car->delete();
        return redirect()->route('faculty.index');
    }
}
