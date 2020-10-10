<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Ride;
use Auth;

class Minirides extends Component
{
    public function render()
    {
        return view('livewire.minirides', [
            'rides' => Ride::where('name', 'LIKE', '%%')->paginate(3)
        ]);
    }
}
