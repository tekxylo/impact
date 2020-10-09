@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;color: #e8253b;"><i class="fas fa-truck-monster"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Create A New Ride</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Ride Name</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->name}}">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Ride Type</label>
               <select id="disabledSelect" class="form-select">
               <option>Dirtbike</option>
                     <option>ATV</option>
                     <option>4 Wheeler</option>
                     <option>Truck</option>
                     <option>Rock Crawler</option>
                     <option>Side By Side</option>
               </select>
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Location</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{Auth::user()->tag}}">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Trail</label>
               <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Malakoff Rd (Teal Trail)">
            </div>

            <div class="mb-3">
               <label for="exampleInputEmail1" class="form-label">Invited Members</label>
               <input type="email" class="form-control disabled" id="exampleInputEmail1" aria-describedby="emailHelp" value="" disabled>
               <div id="emailHelp" class="form-text">Due to Covid-19 we are disabling this feature.</div>
            </div>

               <button type="button" class="btn btn-primary float-right">Create Ride</button><br>
            </div>
         </div>
         


      </div>
   </div>
</div>
@endsection