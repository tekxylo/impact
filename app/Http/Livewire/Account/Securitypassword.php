<?php

namespace App\Http\Livewire\Account;

use Livewire\Component;
use Auth;
use Hash;

class Securitypassword extends Component
{
    public $oldpassword;
    public $newpassword;
    public $confirmpassword;
    public $status;

    public function render()
    {
        return view('impact.account.components.security-pass');
    }

    public function updatepassword() 
    {
        if($this->newpassword == $this->confirmpassword)
        {
            $hashedPassword = Auth::user()->password;
            if (\Hash::check($this->oldpassword , $hashedPassword )) {
                if (!\Hash::check($this->newpassword , $hashedPassword)) {
                    $user = Auth::user();
                    $user->password = Hash::make($this->newpassword);
                    $user->save();
                    $this->status = "success";
                } else {
                    $this->status = "fail";
                }
            } else {
                $this->status = "fail";
            }

            return null;
        } else {
            $this->status = "fail";
        }
    }
}
