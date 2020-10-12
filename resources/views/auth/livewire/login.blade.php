<div class="container py-4">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-6">
            @if($step == 1)
            <!-- Login Card -->
                  <form wire:submit.prevent="getuser">
                     @csrf
                     <div class="row justify-content-center">
                        <div class="col-md-10">
                           <center>
                              <br>
                              <i class="fad fa-sign-in-alt text-primary" style="font-size:40px;margin-bottom:15px;"></i>
                              <h4>Login</h4>
                              <p><strong>Use your Impact Account</strong></p>
                              <br>
                           </center>
                           <input wire:model="email" id="email" type="email" placeholder="Email or username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                           @error('email')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror
                           <!--<br>
                           <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                           @error('password')
                           <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                           </span>
                           @enderror-->
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
            @else
            <!-- Password Card -->
            <form wire:submit.prevent="authenticate()">
                @csrf
                <div class="row justify-content-center">
                   <div class="col-md-10">
                      <center>
                         <br>
                         <img src="https://appamatix.com/wp-content/uploads/2016/05/Anonymous-FeatPic.jpg" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;">
                         <br><br><h5>Welcome, {{$username}}!</h5>
                         <p>{{$email}}</p>
                         <br>
                      </center>
                      <!--<input id="email" type="email" placeholder="Email or username" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                      @error('email')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <br>-->
                      <input wire:model="password" id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                      @error('password')
                      <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                      </span>
                      @enderror
                      <br>
                      <!--<div class="form-check">
                         <input name="remember" id="remember" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="" {{ old('remember') ? 'checked' : '' }}>
                         <label class="form-check-label" for="flexCheckDefault">
                         {{ __('Remember Me') }}
                         </label>
                      </div>
                      <br>-->
                      <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                      {{ __('Login') }}
                      </button>
                      <br>
                      @if (Route::has('password.request'))
                      <center><a href="{{ route('password.request') }}" style="margin-top:15px;text-decoration:none;">
                      {{ __('Forgot Your Password?') }}              {{$test}}
                      </a></center>
                      @endif
                      <br><br>
                   </div>
                </div>
             </form>
             <!-- Password Card -->
             @endif
         </div>
      </div>
   </div>
</div>
