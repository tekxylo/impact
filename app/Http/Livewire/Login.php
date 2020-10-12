<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Laravel\Fortify\Fortify;
use App\Models\User;

class Login extends Component
{
    public $step;
    public $email;

    public $password;

    public $username;
    public $test;


    public function mount()
    {
        $this->step = 1;
    }

    public function render()
    {
        return view('auth.livewire.login');
    }

    public function getuser() {
        $user = User::where('email', $this->email)->first();
        $this->username = $user->name;

        if($user) {
            $this->step = 2;
        } else {
            $this->step = 1;
        }

    }

    public function authenticate(Request $request)
    {
        Log::info($request);
        Log::info("Calling Fortify");

        Log::info("================================================");
        Log::info("Email : " . $this->email);
        Log::info("Password : " . $this->password);

        $user = User::where('email', $this->email)->first();

        Fortify::authenticateUsing(function (Request $request) {
            $user = User::where('email', $this->email)->first();

            Log::info("Inside Fortify");

            if ($user &&
                Hash::check($request->password, $user->password)) {
                return $user;
            }
        });
    }
}
