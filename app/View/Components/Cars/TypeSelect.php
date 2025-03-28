<?php

namespace App\View\Components\Cars;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TypeSelect extends Component
{
    public $choices = [
        ['value' => 'sedan', 'label' => 'Berline'],
        ['value' => 'suv', 'label' => 'SUV'],
        ['value' => 'compact', 'label' => 'Compact'],
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
        return view('components.cars.type-select');
    }
}
