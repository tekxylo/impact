<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;

class Accsettings extends Component
{
    public $active = 'general';

    public function render()
    {
        return view('impact.account.accsettings');
    }

    public function setPage($page) {
        $this->active = $page;
    }
}
