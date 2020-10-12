@extends('layouts.nl-app')

@section('content')
<div class="container py-4">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">

                    <form method="POST" action="{{ route('password.request') }}">
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

                                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


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
                                    {{ __('Login') }}
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
</div>
@endsection
