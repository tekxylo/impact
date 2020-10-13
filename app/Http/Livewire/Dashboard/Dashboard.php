<?php

namespace App\Http\Livewire\Dashboard;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\DiscordConnection;
use Auth;

class Dashboard extends Component
{
    use WithPagination;

    public $active = 'home';
    public $discord_connection;

    public function mount()
    {
        $this->discord_connection = DiscordConnection::where('oaccount', Auth::user()->id)->first();
    }

    public function render()
    {
        return view('impact.dashboard.dashboard');
    }

    public function setPage($page) {
        $this->active = $page;
    }
}
