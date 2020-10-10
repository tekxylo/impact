@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-3">
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
            <i class="fas fa-cog"></i> General Settings
            </a>
            <button href="#" class="list-group-item list-group-item-action"><i class="far fa-smile-beam"></i> Profile Picture</button>
            <button href="#" class="list-group-item list-group-item-action"><i class="far fa-fingerprint"></i> Security</button>
            <button href="#" class="list-group-item list-group-item-action"><i class="far fa-credit-card"></i> Payment Methods</button>
            <button href="#" class="list-group-item list-group-item-action"><i class="far fa-user-secret"></i> Privacy</button>
            <button href="#" class="list-group-item list-group-item-action"><i class="far fa-laptop"></i> Connected Devices</button>
            <button href="#" class="list-group-item list-group-item-action"><i class="far fa-cogs"></i> Advanced Settings</button>
            </div>
            <br>
            <!--<div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-youtube"></i> Youtube Channel Manager</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-trophy"></i> Partnership Program</a>
            </div>
            <br>-->
            @if(Auth::user()->role == "admin")
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-cog"></i> General Admin Settings</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-users"></i> Users</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-cloud"></i> Storage Monitoring</a>
            </div>
            <br>
            @endif
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-book"></i> Policies</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-info-circle"></i> About Impact</a>
            </div>
      </div>
      <div class="col-md-8">
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fad fa-cog"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>General Settings</strong></p>
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
         <!--<div class="card">
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
            <img src="https://media.discordapp.net/attachments/756086069275131945/764507706127548466/20200923_202220.png" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;">
            <br><br><button type="button" class="btn btn-sm btn-outline-primary" style="margin-right:10px;">Revert to Default</button><button type="button" class="btn btn-sm btn-outline-danger">Remove Picture</button>
            <br><br>
            </center>
            <div class="form-file">
            <input type="file" class="form-file-input" id="customFile">
            <label class="form-file-label" for="customFile">
               <span class="form-file-text" style="border-radius: 4px;">Choose file...</span>
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
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">New Password</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
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


      </div>-->
   </div>
</div>
@endsection