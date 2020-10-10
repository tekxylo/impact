<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ride;
use Auth;

class Rides extends Component
{
    use WithPagination;

    public $ride_name;
    public $only_public = false;
    //public $rides;
    public $currentPage = 1;

    
    public function render()
    {
        $ride_name = '%' . $this->ride_name . '%';

        return view('impact.dashboard.components.rides', [
            'rides' => Ride::where('name', 'LIKE', $ride_name)->paginate(3)
        ]);
    }
}
