<?php

namespace App\Http\Livewire\Dashboard\Components;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Vehicle;
use Auth;

class Vehicles extends Component
{
    use WithPagination;

    public $v_name;

    public $newveh_name;
    public $newveh_model;
    public $newveh_type;
    public $newveh_distance;
    public $newveh_alert;

    public function render()
    {
        $v_name = '%' . $this->v_name . '%';
        $vehicles = Vehicle::where('vehicle_name', 'LIKE', $v_name)->where('oid', Auth::user()->id)->paginate(15);

        return view('impact.dashboard.components.vehicles', [
            'vehicles' => $vehicles
        ]);
    }

    public function newveh() {
        $veh_component = new Vehicle;
        $veh_component->oid = Auth::user()->id;
        $veh_component->vehicle_name = $this->newveh_name;
        $veh_component->model = $this->newveh_model;
        $veh_component->type = $this->newveh_type;
        $veh_component->distance = $this->newveh_distance;
        $veh_component->mainteance = $this->newveh_alert;
        $veh_component->save();
        return redirect('/dashboard');
    }
}
