@extends('layouts.nl-app')

@section('content')
<div class="container py-4">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-6">
            <!-- Login Card -->
                  <form method="POST" action="/login">
                     @csrf
                     <div class="row justify-content-center">
                        <div class="col-md-10">

                           @if($step == 1)
                           <center>
                              <br>
                              <i class="fad fa-sign-in-alt text-primary" style="font-size:40px;margin-bottom:15px;"></i>
                              <h4>Login</h4>
                              <p><strong>Use your Impact Account</strong></p>
                              <br>
                           </center>
                           @endif

                           <input wire:model="email" id="email" type="email" placeholder="Email or username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror

                           <br>
                           <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                           <!--<br>
                           <div class="form-check">
                              <input name="remember" id="remember" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="" {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="flexCheckDefault">
                              {{ __('Remember Me') }}
                              </label>
                           </div>-->
                           <br>
                           <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                           {{ __('Login') }}
                           </button>
                           <center><br>
                               <p>Or sign in with Google</p>
                            <img class="mb-3" src="https://media.discordapp.net/attachments/760701188030857223/765223635572621372/googlelogo_color_272x92dp.png" alt="" width="72">
                           </center>
                           <br>
                           <!--@if (Route::has('password.request'))
                           <a href="{{ route('password.request') }}" style="text-decoration:none;">
                           {{ __('Forgot Your Password?') }}
                           </a>
                           @endif-->
                           <br><br>
                        </div>
                     </div>
                  </form>
            <!-- Login Card -->
         </div>
      </div>
   </div>
</div>
@endsection
