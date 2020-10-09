@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                
                        @csrf
                        <div class="row justify-content-center">
        <div class="col-md-10">
                        <center>
                        <br>
                        <img class="mb-3" src="impact.png" alt="" width="272">
                        <br><br>

                        <h3>You've been banned!</h3>
                        <p>Your account has been terminated due to violations of our policies we are unable to recover your account. Please note that this ban is an IP ban and will stay effective on new accounts.</p>
                        </center>


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
                                <a href="/" type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                                    {{ __('Go Home') }}
                                </a>

                                @if (Route::has('password.request'))
                                    <!--<a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>-->
                                @endif
                                </div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
