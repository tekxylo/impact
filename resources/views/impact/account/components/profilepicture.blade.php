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
                    <div class="user-avatar" style="background-image: url('https://www.gravatar.com/avatar/{{ md5( strtolower( trim( Auth::user()->email ) ) )}}&s=100');width:75px;height:75px;"></div>
                        <br>
                       <p>Avatar is provided by Gravatar.</p>
                       <a href="https://en.gravatar.com/" class="btn btn-sm btn-primary">Set Gravatar</a>
                       <button type="button" class="btn btn-sm btn-primary"
                       @if(!$discord_connection)

                       disabled
                       @endif

                       >Set Discord Avatar</button>
                    <br><br>
                    </center>
                </div>
             </div>
    </div>
