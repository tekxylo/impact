<div>
<div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fad fa-cog"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>General Settings</strong></p>
               </center>
            </div>
         </div>
         <br>
<div class="card">
            <div class="card-body">
            <strong><i class="far fa-cog"></i> {{ __('Profile Information') }}</strong>
<hr>
{{ __('Update your account\'s profile information and email address.') }}
<br><br>
            @if($status == "success")
               <p class="text-success">
                           <i class="fad fa-check-circle"></i> Saved!
               </p>
               @endif

            <form wire:submit.prevent="updateprofileinformation">
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Name</label>
               <input type="text" class="form-control" wire:model="name" style="background-color:#2a3340 !important;">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Tag</label>
               <input type="text" class="form-control" wire:model="tag" value="{{Auth::user()->tag}}" style="background-color:#2a3340 !important;">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" wire:model="email" value="{{Auth::user()->email}}" style="background-color:#2a3340 !important;">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
               @if(!Auth::user()->email_verified_at)
               <p class="text-danger">
                           <i class="fad fa-times-hexagon"></i> This email has not been verified!
               </p>
               @endif
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Favorite Trail</label>
               <input disabled type="text" class="form-control" wire:model="fav_trail" value="Malakoff Rd (Teal Trail)" style="background-color:#2a3340 !important;">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Favorite Vehicle</label>
               <input disabled type="text" class="form-control" style="background-color:#2a3340 !important;">
            </div>
               <button type="submit" class="btn btn-primary float-right">Save Changes</button><br>
               </form>
            </div>
         </div>
</div>
