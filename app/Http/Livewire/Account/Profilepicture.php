<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;
use Auth;

class Profilepicture extends Component
{
    public $avatar;
    public $status;

    public function updateprofileinformation()
    {
        $user = Auth::user();
        $user->avatar_url = $this->avatar;
        $user->save();

        $this->status = 'success';
    }

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->avatar = Auth::user()->avatar_url;
    }

    public function render()
    {
        return view('impact.account.components.profilepicture', ['status' => $this->status]);
    }
}
