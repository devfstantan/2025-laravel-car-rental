<?php

namespace App\View\Components\Rentals;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CarChooser extends Component
{
    public $duration = 0;
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $dateStart, 
        public string $dateTo, 
        public string $clientId,
        public $car

    )
    {
       
        $this->duration = (new Carbon($dateStart))->diffInDays(new Carbon($dateTo));
        if ($this->duration < 1) {
            $this->duration = 1;
        }
       
        

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.rentals.car-chooser');
    }
}
