<?php

namespace App\View\Components\Cars;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarburantSelect extends Component
{
    public $choices = [
        ['value' => 'Essence', 'label' => 'Essence'],
        ['value' => 'Diesel', 'label' => 'Diesel'],
        ['value' => 'Hybride', 'label' => 'Hybride'],
        ['value' => 'Electrique', 'label' => 'Electrique'],
    ];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cars.carburant-select');
    }
}
