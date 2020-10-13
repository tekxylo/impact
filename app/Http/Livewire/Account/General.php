<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;
use Auth;

class General extends Component
{
    public $name;
    public $tag;
    public $email;
    public $fav_trail;
    public $fav_vehicle;

    public $status;

    public function updateprofileinformation()
    {
        $user = Auth::user();
        $user->name = $this->name;
        $user->tag = $this->tag;
        $user->fav_trail = $this->fav_trail;
        $user->fav_vehicle = $this->fav_vehicle;

        if($this->email != $user->email) {
            $user->email_verified_at = null;
            $user->email = $this->email;
        }

        $user->save();

        $this->status = 'success';
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->tag = Auth::user()->tag;
        $this->email = Auth::user()->email;
        $this->fav_trail = Auth::user()->fav_trail;
        $this->fav_vehicle = Auth::user()->fav_vehicle;
    }

    public function render()
    {
        return view('impact.account.components.general', ['status' => $this->status]);
    }
}
