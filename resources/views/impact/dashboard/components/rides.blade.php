

<div>
    <div class="card">
        <div class="card-body">
            <center>
                <h2 class="text-primary" style="margin-top:5px;"><i class="fad fa-motorcycle" aria-hidden="true"></i></h2>
                <p style="padding:0px;margin:0px;"><strong>Rides</strong></p>
            </center>
        </div>
    </div>
    <br>

    <div class="input-group">
        <input wire:model="ride_name" type="text" class="form-control" placeholder="Search For Rides" style="height: 20px;">
        <!--<button type="submit" class="btn btn-primary mb-3">Search</button>-->
    </div>
    <br>

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="far fa-motorcycle"></i> New Ride</button><br><br>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <form wire:submit.prevent="newride">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create New Ride</h5>
            <!--<button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>-->
            </div>
            <div class="modal-body">
            <!-- Begin Form-->
                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Ride Name</label>
                   <input required wire:model.defer="newride_name" type="text" class="form-control" style="background-color:#2a3340 !important;">
                </div>

                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Location</label>
                   <input required wire:model.defer="newride_location" type="text" class="form-control" value="{{Auth::user()->tag}}" style="background-color:#2a3340 !important;">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Trail</label>
                    <input required wire:model.defer="newride_trail" type="text" class="form-control" value="{{Auth::user()->fav_trail}}" style="background-color:#2a3340 !important;">
                </div>


                <div class="mb-3">
                   <label for="exampleInputEmail1" class="form-label">Ride Type</label>
                   <input required wire:model.defer="newride_type" type="text" class="form-control"value="{{Auth::user()->fav_trail}}" style="background-color:#2a3340 !important;">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Distance</label>
                    <input wire:model.defer="newride_distance" type="text" class="form-control" value="{{Auth::user()->fav_trail}}" style="background-color:#2a3340 !important;">
                    <div required id="emailHelp" class="form-text">Example : 50.0 Km or 50.0 Miles</div>
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


    @foreach($rides as $ride)
         <div class="card">
            <div class="card-body">
               <h4 class="text-primary" style="color: #e8253b;">{{$ride->name}}</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="far fa-map-marker-alt text-primary"></i> <strong>{{$ride->location}}</strong></p>
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="far fa-crown text-primary"></i> <strong>{{Auth::user()->name}}</strong> </p>

               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="far fa-truck-monster text-primary"></i> <strong>{{$ride->ridetype}} Ride</strong></p>

               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="far fa-map-marker-alt text-primary"></i> <strong>{{$ride->distance}}</strong></p>
            <p style="margin-bottom:0px;padding-bottom:0px;"><i class="far fa-calendar-alt text-primary"></i> <strong>
                {{ Carbon::parse($ride->created_at)->format('F j, Y, g:i a') }}
            </strong></p>
            </div>
         </div>
         <br>
    @endforeach

    <!--<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
        <a class="page-link" href="#">Next</a>
        </li>
    </ul>
    </nav>-->
    {{$rides->links('impact/pagination')}}
</div>
