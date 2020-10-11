
<div>
<div class="card">
            <div class="card-body">
               <center>
                  <h2 style="margin-top:5px;" class="text-primary"><i class="fad fa-truck-monster"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>Your Vehicles</strong></p>
               </center>
            </div>
         </div>
         <br>
         <div class="input-group">
        <input wire:model="v_name" type="text" class="form-control" placeholder="Search For Vehicles" style="height: 20px;">
        <!--<button type="submit" class="btn btn-primary mb-3">Search</button>-->
        </div>
        <br>

         @foreach($vehicles as $vehicle)
         <div class="card">
            <div class="card-body">
            @if($vehicle->type == 'quad')
            <h2 style="margin-top:5px;" class="text-primary"><i class="far fa-truck-monster"></i> <strong style="color: #fff;font-size:18px;">Quad - {{$vehicle->vehicle_name}}</strong></h2>
            @endif

            @if($vehicle->type == '4wheeler')
            <h2 style="margin-top:5px;" class="text-primary"><i class="far fa-truck-monster"></i> <strong style="color: #fff;font-size:18px;">4 Wheeler - {{$vehicle->vehicle_name}}</strong></h2>
            @endif

            @if($vehicle->type == 'side by side')
            <h2 style="margin-top:5px;" class="text-primary"><i class="far fa-truck-monster"></i> <strong style="color: #fff;font-size:18px;">Side By Side - {{$vehicle->vehicle_name}}</strong></h2>
            @endif

            @if($vehicle->type == 'dirtbike')
            <h2 style="margin-top:5px;" class="text-primary"><i class="far fa-motorcycle"></i> <strong style="color: #fff;font-size:18px;">Dirt Bike - {{$vehicle->vehicle_name}}</strong></h2>
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
         {{$vehicles->links('impact/pagination')}}
</div>