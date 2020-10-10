

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

    @foreach($rides as $ride)
         <div class="card">
            <div class="card-body">
               <h4 class="text-primary" style="color: #e8253b;">{{$ride->name}}</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker-alt"></i> <strong>{{$ride->location}}</strong></p>
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-crown"></i> <strong>{{Auth::user()->name}}</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-users"></i> <strong>{{Auth::user()->name}}</strong> </p>
               
               
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-motorcycle"></i> <strong>Dirtbike Ride</strong></p>
               
               
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker"></i> <strong>0.00KM</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>{{$ride->created_at}}</strong></p>
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
