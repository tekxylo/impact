<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;
use App\Models\DiscordConnection;
use Auth;
use League\OAuth2\Client\Provider\Discord;

class Profilepicture extends Component
{
    public $avatar;
    public $status;
    public $discord_connection;

    public function updateprofileinformation()
    {
        $user = Auth::user();
        $user->avatar_url = $this->avatar;
        $user->save();

        $this->status = 'success';
    }

    public function mount()
    {
        $this->discord_connection = DiscordConnection::where('oaccount', Auth::user()->id)->first();
        $this->name = Auth::user()->name;
        $this->avatar = Auth::user()->avatar_url;
    }

    public function render()
    {
        return view('impact.account.components.profilepicture', ['status' => $this->status]);
    }
}
