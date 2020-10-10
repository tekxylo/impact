@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 style="margin-top:5px;" class="text-primary"><i class="fas fa-truck-monster"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Your Vehicles</strong></p>
                  <hr>
                  <button type="button" class="btn btn-sm btn-outline-primary">Register New Vehicle</button>
               </center>
            </div>
         </div>
         <br>

         @if($vehicle_count < 1)
         <strong>You have no vehicles.</strong><br>
         @endif

         @foreach($vehicles as $vehicle)
         <div class="card">
            <div class="card-body">
            @if($vehicle->type == 'quad')
            <h2 style="margin-top:5px;" class="text-primary"><i class="fas fa-truck-monster"></i> <strong style="font-size:18px;">Quad - {{$vehicle->vehicle_name}}</strong></h2>
            @endif

            @if($vehicle->type == '4wheeler')
            <h2 style="margin-top:5px;" class="text-primary"><i class="fas fa-truck-monster"></i> <strong style="font-size:18px;">4 Wheeler - {{$vehicle->vehicle_name}}</strong></h2>
            @endif

            @if($vehicle->type == 'side by side')
            <h2 style="margin-top:5px;" class="text-primary"><i class="fas fa-truck-monster"></i> <strong style="font-size:18px;">Side By Side - {{$vehicle->vehicle_name}}</strong></h2>
            @endif

            @if($vehicle->type == 'dirtbike')
            <h2 style="margin-top:5px;" class="text-primary"><i class="fas fa-motorcycle"></i> <strong style="font-size:18px;">Dirt Bike - {{$vehicle->vehicle_name}}</strong></h2>
            @endif


            <hr>
            <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-pencil-alt"></i> <strong>{{$vehicle->model}}</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-truck-monster"></i> <strong>Ridden 0 Times</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker"></i> <strong>0.00KM</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;" class="text-success"><i class="fas fa-check"></i> <strong>Vehicle has no warnings!</strong></p>
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;font-size:10px;" class="text-secondary">{{$vehicle->id}}</p>
            </div>
            
         </div>
         <br>
         @endforeach
         


      </div>
   </div>
</div>
@endsection