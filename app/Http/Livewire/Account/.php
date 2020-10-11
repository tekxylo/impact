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

class Security extends Component
{

    public function submit(Request $request, EnableTwoFactorAuthentication $two_enable, DisableTwoFactorAuthentication $two_disable, $enable) {
        if($enable == true) {
            $two_disable($request->user());
        } else {
            $two_enable($request->user());
        }
    }

    public function render(Request $request)
    {

        if(Auth::user()->two_factor_secret) {
            $renderer = new ImageRenderer(
                new RendererStyle(400),
                new ImagickImageBackEnd()
            );
            $writer = new Writer($renderer);
            $image = base64_encode($writer->writeString(app(TwoFactorAuthenticationProvider::class)->qrCodeUrl(
                config('app.name'),
                $request->user()->email,
                decrypt($request->user()->two_factor_secret)
            )));
        } else {
            $image = '';
        }
        

        return view('impact.account.components.security', ['render' => $image]);
    }
}
