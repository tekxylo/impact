@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <div class="row justify-content-center">
        <div class="col-md-10">
                        <center>
                        <br>
                        <i class="fad fa-fingerprint text-primary" style="font-size:40px;margin-bottom:15px;"></i>
                        <h5>Reset Password</h5>
                        <br>
                        </center>
                        @if(session('status'))
                           <p class="text-success">
                           <i class="fad fa-check-circle"></i> {{ session('status') }}
                           </p>
                        @endif
                               

                                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{$request->email}}" required autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <br>

                                <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <br>

                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
<br>


                        <!--<div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>-->
                                <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                                    {{ __('Reset Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>-->
                                @endif
                                </div></div><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
