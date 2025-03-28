<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = [
            (object)[
                'id' => 1,
                'name' => 'Porsche 911-2020',
                'registration' => '23945-A-72',
                'price' => 200.00,
                'image' => 'images/cars/car1.webp',
                'status' => 'available',
                'brand' => 'Porsche',
            ],
            (object)[
                'id' => 2,
                'name' => 'Mercedes AMG GT',
                'registration' => '23946-B-73',
                'price' => 180.00,
                'image' => 'images/cars/car2.webp',
                'status' => 'available',
                'brand' => 'Mercedes',
            ],
            (object)[
                'id' => 3,
                'name' => 'BMW M4 Competition',
                'registration' => '23947-C-74',
                'price' => 150.00,
                'image' => 'images/cars/car3.webp',
                'status' => 'rented',
                "reservation" => (object)[
                    'client' => 'Ahmed Ali',
                    'date_end' => Carbon::now(),
                ],
                'brand' => 'BMW',
            ],
        ];
        return view('cars.index',compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return redirect()->route('cars.index')
        ->with('success', 'Voiture ajoutée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = (object)[
            "id" => 1,
            'name' => 'Porsche 911-2020',
            'registration' => '23945-A-72',
            'price' => 200.00,
            'image' => 'images/cars/car1.webp',
            'status' => 'available',
            'brand' => 'Porsche',
            "model" => "DEV DD",
            'type' => 'SUV',
            'fuel' => 'Diesel'
        ];
        $rentals = [
            (object)[
                'id' => 1,
                'client' => 'Ahmed Benani',
                'date_start' => Carbon::parse('2024-01-15'),
                'date_end' => Carbon::parse('2024-01-20'),
                'status' => 'new',
                'total_price' => 1000.00,
                'client' => (object)[
                    'name' => "Ahmed Ali"
                ],
                'car' => $car,
            ],
            (object)[
                'id' => 2,
                'client' => 'Sarah Alami', 
                'date_start' => Carbon::parse('2024-02-01'),
                'date_end' => Carbon::parse('2024-02-03'),
                'status' => 'started',
                'total_price' => 400.00,
                'client' => (object)[
                    'name' => "Ahmed Ali"
                ],
                'car' => $car,
            ],
            (object)[
                'id' => 3,
                'client' => 'Karim Idrissi',
                'date_start' => Carbon::parse('2024-02-10'),
                'date_end' => Carbon::parse('2024-02-15'),
                'status' => 'ended',
                'total_price' => 1000.00,
                'client' => (object)[
                    'name' => "Ahmed Ali"
                ],
                'car' => $car,
            ],
        ];
        return view('cars.show', compact('car','rentals'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = (object)[
            "id" => 1,
            'name' => 'Porsche 911-2020',
            'registration' => '23945-A-72',
            'price' => 200.00,
            'image' => 'images/cars/car1.webp',
            'status' => 'available',
            'brand' => 'toyota',
            "model" => "DEV DD",
            'type' => 'SUV',
            'fuel' => 'Diesel'
        ];

        return view('cars.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
