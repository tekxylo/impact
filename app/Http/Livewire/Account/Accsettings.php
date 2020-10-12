<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;
use Auth;

class Accsettings extends Component
{
    public $active;

    public function mount() {
        $this->active = 'general';
    }

    public function render()
    {
        return view('impact.account.accsettings');
    }

    public function setPage($page) {
        $this->active = $page;
    }
}
