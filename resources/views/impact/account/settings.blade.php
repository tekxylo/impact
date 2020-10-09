@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 style="margin-top:5px;color: #e8253b;"><i class="fas fa-cog"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Account Settings</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Name</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->name}}">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Tag</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->tag}}">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->email}}">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Favorite Trail</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Malakoff Rd (Teal Trail)">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Favorite Vehicle Type</label>
               <select id="disabledSelect" class="form-select">
               <option>Dirtbike</option>
                     <option>ATV</option>
                     <option>4 Wheeler</option>
                     <option>Truck</option>
                     <option>Rock Crawler</option>
                     <option>Side By Side</option>
               </select>
            </div>

               <button type="button" class="btn btn-primary float-right">Save Changes</button><br>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 style="margin-top:5px;color: #e8253b;"><i class="fas fa-fingerprint"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Security & Authentication</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
            <div class="form-group">
    <label for="exampleInputPassword1">Current Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">New Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" >
  </div>

            <button type="button" class="btn btn-primary float-right">Save Changes</button><br>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 style="margin-top:5px;color: #e8253b;"><i class="fas fa-trash"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Delete Account</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
            <strong>{{ __('Permanently delete your account.') }}</strong>
<hr>
Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
<br><br><button type="button" class="btn btn-danger float-right">Delete Account</button>
            </div>
         </div>


      </div>
   </div>
</div>
@endsection