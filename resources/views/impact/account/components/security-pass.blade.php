<div>
<div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fad fa-fingerprint"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Security & Authentication</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
            <form wire:submit.prevent="updatepassword">
            <strong><i class="far fa-lock-alt"></i> {{ __('Update Password') }}</strong>
<hr>
{{ __('Ensure your account is using a long, random password to stay secure.') }}
<br><br>
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Current Password</label>
               <input type="password" class="form-control" wire:model="oldpassword" style="background-color:#2a3340 !important;">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">New Password</label>
               <input type="password" class="form-control" wire:model="newpassword" style="background-color:#2a3340 !important;">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
               <input type="password" class="form-control" wire:model="confirmpassword" style="background-color:#2a3340 !important;">
            </div>

            <button type="submit" class="btn btn-primary float-right">Save Changes</button><br>

            @if($status == "success")
               <p class="text-success">
                           <i class="fad fa-check-circle"></i> Updated Succesfully!
               </p>
            @elseif($status == "fail")
               <p class="text-danger">
                           <i class="fad fa-times-circle"></i> The current password or new password did not match.
               </p>
            @else
            @endif
            </form>
            </div>
         </div>
</div>
<br>