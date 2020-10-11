<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\TwoFactorAuthenticationProvider;
use Laravel\Fortify\Actions\DisableTwoFactorAuthentication;
use Laravel\Fortify\Actions\EnableTwoFactorAuthentication;
use Auth;
use App\Models\DiscordConnection;

class Connections extends Component
{
    public $discord_connection;

    public function render(Request $request)
    {

        $this->discord_connection = DiscordConnection::where('oaccount', Auth::user()->id)->get()->first();

        return view('impact.account.components.connections');
    }

    public function destroydc() 
    {
        DiscordConnection::where('oaccount', Auth::user()->id)->delete();
        $this->discord_connection = null;
    }
}
