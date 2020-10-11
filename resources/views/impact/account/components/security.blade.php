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
            <strong><i class="far fa-lock-alt"></i> {{ __('Update Password') }}</strong>
<hr>
{{ __('Ensure your account is using a long, random password to stay secure.') }}
<br><br>
            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Current Password</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">New Password</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>

            <button type="button" class="btn btn-primary float-right" disabled>Save Changes</button><br>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
            <strong><i class="fal fa-mobile-alt"></i> {{ __('Two Factor Authentication') }}</strong>
<hr>
{{ __('Add additional security to your account using two factor authentication.') }}<br>
{{ __('When two factor authentication is enabled, you will be prompted for a secure, random token during authentication. You may retrieve this token from your phone\'s Google Authenticator application.') }}<br>
<br>

@if (Auth::user()->two_factor_secret)
<!--<strong>{{ __('You have enabled two factor authentication.') }}</strong>-->
<div class="row">
        <div class="col-sm-6">
        <strong style="font-size:22px;">{{ __('QR Code & Auth Code') }}</strong><br>
        <img src="data:image/png;base64,{!! $render !!}" alt="userprofile" class="img-responsive" style="width:150px;margin-top:15px;">
        <hr>
        <div>Auth Key : {{ decrypt(Auth::user()->two_factor_secret) }}</div>
        </div>
        <div class="col-sm-6">
        <strong style="font-size:22px;">{{ __('Recovery Codes') }}</strong>
        <div style="margin-top:15px;">
        @foreach (json_decode(decrypt(Auth::user()->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
        @endforeach
        </div>
        </div>
</div>



@else
<strong>{{ __('You have not enabled two factor authentication.') }}</strong>
@endif

<br><br>
@if (Auth::user()->two_factor_secret)
<form wire:submit.prevent="submit(true)">
<button type="submit" class="btn btn-danger float-right">Disable Two Factor Authentication</button>
</form>
@else
<form wire:submit.prevent="submit(false)">
<button type="submit" class="btn btn-primary float-right">Enable Two Factor Authentication</button>
</form>
@endif


            </div>
         </div>

         <br>
</div>
