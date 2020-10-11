@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-6">
         <div class="card">
            <div class="card-body">
               <form method="POST" action="/two-factor-challenge">
                  @csrf
                  <div class="row justify-content-center">
                     <div class="col-md-10">
                        <center>
                           <br>
                           <i class="fad fa-fingerprint text-primary" style="font-size:40px;margin-bottom:15px;"></i>
                        <h5>Two Factor Authentication</h5>
                        <br>
                        </center>

                        <input id="code" name="code" type="text" placeholder="Two Factor Code" class="form-control @error('code') is-invalid @enderror" required>
                        <br>
                        <button type="submit" class="btn btn-primary" style="width:100%;margin-bottom:10px;">
                        {{ __('Unlock') }}
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