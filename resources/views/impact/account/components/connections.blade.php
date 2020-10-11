<div>
   <div class="card">
      <div class="card-body">
         <center>
            <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fad fa-plug"></i></h2>
            <p style="padding:0px;margin:0px;"><strong>Connections</strong></p>
         </center>
      </div>
   </div>
   <br>
   <div class="card">
      <div class="card-body">
         <strong><i class="fab fa-discord"></i> {{ __('Discord') }}</strong>
         <hr>
         When you link your discord to your account you get access to special features and ability to login with your discord account! You'll also get access to our discord server!<br>
         <br>


         @if ($discord_connection)
         <strong>{{ __('You have linked your discord') }}</strong>
         <br><br>

        <img src="https://cdn.discordapp.com/avatars/{{$discord_connection->discord_id}}/{{$discord_connection->avatar}}.jpg" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;">
        <strong style="margin-left:10px;">{{$discord_connection->discord_username}}#{{$discord_connection->discord_tag}}</strong>
         @else
         <strong>{{ __('You have not linked your discord') }}</strong>
         <br><br>
         @endif

         @if ($discord_connection)
         <form wire:submit.prevent="destroydc()">
            <button type="submit" class="btn btn-danger float-right">Unlink Discord</button>
         </form>
         @else
            <a href="https://discord.com/api/oauth2/authorize?client_id=764847614825988116&redirect_uri=https%3A%2F%2Fimpactatv.com%2Fdiscorddata&response_type=code&scope=identify%20email" class="btn btn-primary float-right">Link Discord</a>
         @endif
      </div>
   </div>
   <br>
   <!--<div class="card">
      <div class="card-body">
         <strong><i class="fab fa-google"></i> {{ __('Google') }}</strong>
         <hr>
         Link your google account to gain access to login with your google account upon login.<br>
         <br>


         @if (Auth::user()->two_factor_secret)
         @else
         <strong>{{ __('You have not linked your google') }}</strong>
         @endif
         <br><br>


         @if (Auth::user()->two_factor_secret)
         <form wire:submit.prevent="destroydc()">
            <button type="submit" class="btn btn-danger float-right">Unlink Discord</button>
         </form>
         @else
         <form wire:submit.prevent="destroydc()">
            <button type="submit" class="btn btn-primary float-right" disabled>Link Google (Unavailable)</button>
         </form>
         @endif
      </div>
   </div>
   <br>
   <div class="card">
      <div class="card-body">
         <strong><i class="fab fa-facebook"></i> {{ __('Facebook') }}</strong>
         <hr>
         Link your facebook account to gain access to login with your facebook account upon login.<br>
         <br>


         @if (Auth::user()->two_factor_secret)
         @else
         <strong>{{ __('You have not linked your facebook') }}</strong>
         @endif
         <br><br>


         @if (Auth::user()->two_factor_secret)
         <form wire:submit.prevent="destroydc()">
            <button type="submit" class="btn btn-danger float-right">Unlink Discord</button>
         </form>
         @else
         <form wire:submit.prevent="destroydc()">
            <button type="submit" class="btn btn-primary float-right" disabled>Link Facebook (Unavailable)</button>
         </form>
         @endif
      </div>
   </div>
   <br>-->
</div>

