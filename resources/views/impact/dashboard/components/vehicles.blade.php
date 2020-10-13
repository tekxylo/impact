
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

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="far fa-truck-monster"></i> New Vehicle</button><br><br>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <form wire:submit.prevent="newveh">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel" >Register New Vehicle</h5>
            <!--<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
            <!-- Begin Form-->
                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Vehicle Name</label>
                   <input required wire:model.defer="newveh_name" type="text" class="form-control" style="background-color:#2a3340 !important;">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Model</label>
                    <input required wire:model.defer="newveh_model" type="text" class="form-control" style="background-color:#2a3340 !important;">
                 </div>

                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Vehicle Type</label>
                   <input required wire:model.defer="newveh_type" type="text" class="form-control" value="{{Auth::user()->tag}}" style="background-color:#2a3340 !important;">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Total Milage</label>
                    <input required wire:model.defer="newveh_distance" type="text" class="form-control" value="{{Auth::user()->fav_trail}}" style="background-color:#2a3340 !important;">
                </div>
                           <div class="form-check">
                              <input wire:model.defer="newveh_alert" name="remember" id="remember" class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="" {{ old('remember') ? 'checked' : '' }}>
                              <label class="form-check-label" for="flexCheckDefault">
                              {{ __('Requires Mainteance') }}
                              </label>
                           </div>


            <!-- End Form-->
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary float-right">Save Changes</button>
            </div>
        </form>
        </div>
        </div>
    </div>

         @foreach($vehicles as $vehicle)
         <div class="card">
            <div class="card-body">
            <h2 style="margin-top:5px;" class="text-primary"><i class="far fa-truck-monster"></i> <strong style="color: #fff;font-size:18px;">{{$vehicle->type}} - {{$vehicle->vehicle_name}}</strong></h2>


            <hr>
            <p style="margin-bottom:0px;padding-bottom:0px;"><i class="far fa-pencil-alt"></i> <strong>{{$vehicle->model}}</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="far fa-truck-monster"></i> <strong>Ridden 0 Times</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="far fa-map-marker-alt"></i> <strong>{{$vehicle->distance}}</strong></p>
               @if($vehicle->mainteance)
               <p style="margin-bottom:0px;padding-bottom:0px;" class="text-danger"><i class="far fa-times"></i> <strong>Vehicle has needs maintenance!</strong></p>
               @else
               <p style="margin-bottom:0px;padding-bottom:0px;" class="text-success"><i class="far fa-check"></i> <strong>Vehicle has no warnings!</strong></p>
               @endif
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;font-size:10px;" class="text-secondary">{{$vehicle->id}}</p>
            </div>

         </div>
         <br>
         @endforeach
         {{$vehicles->links('impact/pagination')}}
</div>
