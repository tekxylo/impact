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

    public function add_discord()
    {
        $user = Auth::user();
        $user->avatar_url = 'discord';
        $this->discord_connection = DiscordConnection::where('oaccount', Auth::user()->id)->first();
        $user->save();
    }

    public function remove_discord()
    {
        $user = Auth::user();
        $user->avatar_url = null;
        $this->discord_connection = DiscordConnection::where('oaccount', Auth::user()->id)->first();
        $user->save();
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
