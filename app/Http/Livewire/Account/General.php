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
    
    public $status;

    public function updateprofileinformation() 
    {
        $user = Auth::user();
        $user->name = $this->name;
        $user->tag = $this->tag; 
        
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
    }

    public function render()
    {
        return view('impact.account.components.general', ['status' => $this->status]);
    }
}
