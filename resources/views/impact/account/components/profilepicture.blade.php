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
                        <div class="user-avatar" style="background-image: url('{{Auth::user()->avatar_url}}');width:75px;height:75px;"></div>
                        <!--<img src="{{Auth::user()->avatar_url}}" alt="userprofile" class="img-responsive rounded-circle" style="width:30px;height:30px;margin-top:-1px;">-->
                       @else
                       <div class="user-avatar" style="background-image: url('/default_pfp.png');width:75px;height:75px;"></div>
                       @endif<br><button type="button" class="btn btn-sm btn-outline-danger">Remove Picture</button>
                    <br><br>
                    </center>

                <form wire:submit.prevent="updateprofileinformation">
                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Profile Picture URL</label>
                   <input type="text" class="form-control" wire:model="avatar" style="background-color:#2a3340 !important;">
                   <div id="emailHelp" class="form-text">Example : https://mycoolwebsite.com/mypicture.png</div>
                </div>


                   <button type="submit" class="btn btn-primary float-right">Save Changes</button><br><br>
                   @if($status == "success")
                   <p class="text-success float-right">
                               <i class="fad fa-check-circle"></i> Saved!
                   </p>
                   @endif
                   </form>
                </div>
             </div>
    </div>
