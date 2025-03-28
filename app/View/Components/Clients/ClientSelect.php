<?php
namespace App\View\Components\Clients;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ClientSelect extends Component
{

    public $choices = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $clients = [
            (object) [
                'id' => 1,
                'name' => "Ahmed Ali",
            ],
            (object) [
                'id' => 2,
                'name' => "Mohamed Ali",
            ],
            (object) [
                'id' => 3,
                'name' => "Ali Ahmed",
            ],
            (object) [
                'id' => 4,
                'name' => "Ali Mohamed",
            ],
        ];
        $this->choices = array_map(function ($client) {
            return [
                'value' => $client->id,
                'label' => $client->name,
            ];
        }, $clients);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View | Closure | string
    {
        return view('components.clients.client-select');
    }
}
