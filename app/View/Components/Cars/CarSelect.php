<?php

namespace App\View\Components\Cars;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarSelect extends Component
{
    public $choices = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
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
        foreach ($cars as $car) {
            $this->choices[] = [
                'value' => $car->id,
                'label' => $car->name,
            ];
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {   
        return view('components.cars.car-select');
    }
}
