<div>
    <div class="card">
                <div class="card-body">
                   <center>
                      <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fad fa-cog"></i></h2>
                      <p style="padding:0px;margin:0px;"><strong>Profile Picture</strong></p>
                   </center>
                </div>
             </div>
             <br>
    <div class="card">
                <div class="card-body">

                   <center>
                    <p class="text-secondary">Current Profile Picture</p>
                    @if(Auth::user()->avatar_url)
                    <div class="user-avatar" style="background-image: url('https://cdn.discordapp.com/avatars/{{$discord_connection->discord_id}}/{{$discord_connection->avatar}}.jpg');width:75px;height:75px;"></div>
                    @else
                    <div class="user-avatar" style="background-image: url('https://www.gravatar.com/avatar/{{ md5( strtolower( trim( Auth::user()->email ) ) )}}&s=100');width:75px;height:75px;"></div>
                    @endif
                    <br>

                    @if(!Auth::user()->avatar_url)
                       <p>Avatar is provided by Gravatar.</p>
                    @else
                        <p>Avatar is provided by Discord.</p>
                    @endif
                       <a href="https://en.gravatar.com/" class="btn btn-sm btn-primary">Set Gravatar</a>

                       @if(Auth::user()->avatar_url)
                       <button wire:click="remove_discord" type="button" class="btn btn-sm btn-danger" @if(!$discord_connection) disabled @endif >Remove Discord Avatar</button>
                       @else
                       <button wire:click="add_discord" type="button" class="btn btn-sm btn-primary" @if(!$discord_connection) disabled @endif >Set Discord Avatar</button>
                       @endif
                    <br><br>
                    </center>
                </div>
             </div>
    </div>
