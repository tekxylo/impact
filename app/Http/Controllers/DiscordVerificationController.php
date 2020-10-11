<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiscordConnection;
use Auth;

class DiscordVerificationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function getdata(Request $request)
    {
        $provider = new \Wohali\OAuth2\Client\Provider\Discord([
            'clientId'          => '764847614825988116',
            'clientSecret'      => 'Fttms6FtW9ENgbJTHuyEko2aoLPVoqXN',
            'redirectUri'       => env("APP_URL") . '/discorddata'
        ]);
        
        $token = $provider->getAccessToken('authorization_code', [
            'code' => $request->input('code')
        ]);

        $user = $provider->getResourceOwner($token);


        $discord_connection = new DiscordConnection;

        $discord_connection->oaccount = Auth::user()->id;
        $discord_connection->discord_id = $user->getId();
        $discord_connection->discord_username = $user->getUsername();
        $discord_connection->discord_tag = $user->getDiscriminator();
        $discord_connection->discord_email = $user->getEmail();
        $discord_connection->email_confirmed = $user->getVerified();
        $discord_connection->avatar = $user->getAvatarHash();
        $discord_connection->save();

        return redirect('/account/settings')->with(['view' => 'connections']);


        /*echo '<h2>Token details:</h2>';
        echo 'Token: ' . $token->getToken() . "<br/>";

        echo '<h2>Resource owner details:</h2>';
        printf('Hello %s#%s!<br/><br/>', $user->getUsername(), $user->getDiscriminator());
        var_export($user->toArray());*/

    }

    public function index()
    {
        session_start();
        
        echo '<a href="https://discord.com/api/oauth2/authorize?client_id=764847614825988116&redirect_uri=http%3A%2F%2Flocalhost%2Fdiscorddata&response_type=code&scope=identify%20email">Link to Discord</a>';

    }
}
