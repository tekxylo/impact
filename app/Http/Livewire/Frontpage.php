<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Frontpage extends Component
{
    public $active;

    public function mount() {
        $this->active = 'general';
    }

    public function render()
    {
        return view('impact.frontpage');
    }

    public function setPage($page) {
        $this->active = $page;
    }
}
