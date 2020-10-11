@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row justify-content-center">
        <div class="col-md-10">
                        <center>
                        <br>
                        <i class="fad fa-sign-in-alt text-primary" style="font-size:40px;margin-bottom:15px;"></i>
                        <h5>Login</h5>
                        <br>
                        </center>
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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

                        <br>
                        <div class="form-check">
  <input name="remember" id="remember" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="" {{ old('remember') ? 'checked' : '' }}>
  <label class="form-check-label" for="flexCheckDefault">
  {{ __('Remember Me') }}
  </label>
</div>
<br>
                                <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                                    {{ __('Login') }}
                                </button>

                                <center>
                                <i class="fab fa-google" style="font-size:25px;padding:15px;color:#4285F4;"></i>
                                <i class="fab fa-discord" style="font-size:25px;padding:15px;color:#7289DA;"></i>
                                <i class="fab fa-facebook" style="font-size:25px;padding:15px;color:#3b78f2;"></i>
                                </center>
                                <br>

                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" style="text-decoration:none;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <br><br>
                                </div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
