@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fas fa-cog"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Account Settings</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Name</label>
               <input disabled type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->name}}">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Tag</label>
               <input disabled type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->tag}}">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Email address</label>
               <input disabled type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->email}}">
               <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Favorite Trail</label>
               <input disabled type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Malakoff Rd (Teal Trail)">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Favorite Vehicle Type</label>
               <select id="disabledSelect" class="form-select" disabled>
               <option>Dirtbike</option>
                     <option>ATV</option>
                     <option>4 Wheeler</option>
                     <option>Truck</option>
                     <option>Rock Crawler</option>
                     <option>Side By Side</option>
               </select>
            </div>

               <button type="button" class="btn btn-primary float-right" disabled>Save Changes</button><br>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fas fa-smile-beam"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Account Profile Picture</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
            <center>
            <p class="text-secondary">Current Profile Picture</p>
            <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&color=7F9CF5&background=EBF4FF" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;">
            <br><br><button type="button" class="btn btn-sm btn-outline-primary" style="margin-right:10px;">Revert to Default</button><button type="button" class="btn btn-sm btn-outline-danger">Remove Picture</button>
            <br><br>
            </center>
            <div class="form-file">
            <input type="file" class="form-file-input" id="customFile">
            <label class="form-file-label" for="customFile">
               <span class="form-file-text">Choose file...</span>
               <span class="form-file-button">Browse</span>
            </label>
            </div><br>

               <button type="button" class="btn btn-primary float-right">Save Changes</button><br>
            </div>
         </div>
         <br>


         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fas fa-fingerprint"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Security & Authentication</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Current Password</label>
               <input disabled type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">New Password</label>
               <input disabled type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
               <input disabled type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>

            <button type="button" class="btn btn-primary float-right" disabled>Save Changes</button><br>
            </div>
         </div>

         <br>
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fas fa-cloud"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Download Your Data</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
            <strong>{{ __('Download your account data.') }}</strong>
<hr>
Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.
<br><br><button type="button" class="btn btn-primary float-right" disabled>Download Data</button>
            </div>
         </div>

         <br>
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fas fa-trash"></i></h2>
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