<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ride;
use App\Models\Vehicle;

class Frontpage extends Component
{
    public $active;

    public $total_rides;
    public $total_events;
    public $total_vehicles;

    public function mount() {
        $this->active = 'general';
        $this->total_rides = Ride::all()->count();
        $this->total_vehicles = Vehicle::all()->count();
    }

    public function render()
    {
        return view('impact.frontpage');
    }

    public function setPage($page) {
        $this->active = $page;
    }
}
