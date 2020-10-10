@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row justify-content-center">
        <div class="col-md-10">
                        <center>
                        <br>
                        <img class="mb-3" src="impact-w.png" alt="" width="272">
                        <br><br>
                        </center>
                        <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

@error('name')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror

<br>

<input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
<br>
                                <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                                    {{ __('Register') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>-->
                                @endif
                                </div></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
