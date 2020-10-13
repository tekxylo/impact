<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Ride;
use Auth;
use DB;

class Rides extends Component
{
    use WithPagination;

    public $ride_name;
    public $only_public = false;
    //public $rides;
    public $currentPage = 1;

    public $newride_name;
    public $newride_type;
    public $newride_location;
    public $newride_trail;
    public $newride_distance;

    public function render()
    {
        $ride_name = '%' . $this->ride_name . '%';

        $rides = Ride::where('name', 'LIKE', $ride_name)->where('oid', Auth::user()->id)->paginate(3);

        return view('impact.dashboard.components.rides', [
            'rides' => $rides
        ]);
    }

    public function newride()
    {
        $ride_component = new Ride;
        $ride_component->oid = Auth::user()->id;
        $ride_component->name = $this->newride_name;
        $ride_component->ridetype = $this->newride_type;
        $ride_component->location = $this->newride_location;
        $ride_component->trail = $this->newride_trail;
        $ride_component->distance = $this->newride_distance;
        $ride_component->save();
        return redirect('/dashboard');
    }
}
