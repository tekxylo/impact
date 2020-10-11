@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card">
            <div class="card-body">
               <form method="POST" action="/email/verification-notification">
                  @csrf
                  <div class="row justify-content-center">
                     <div class="col-md-10">
                        <center>
                           <br>
                           <i class="fad fa-check-circle text-primary" style="font-size:40px;margin-bottom:15px;"></i>
                        <h5>Verify Email</h5>
                        <br>
                        </center>
                        @if(session('status'))
                           <p class="text-success">
                           <i class="fad fa-check-circle"></i> @if(session('status') == 'verification-link-sent') A email verification link has been sent to your email! @endif
                           </p>
                        @endif

                        <input id="email" type="email" placeholder="E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" required value="{{Auth::user()->email}}">
                        <br>
                        <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                        {{ __('Send Verification Link') }}
                        </button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection