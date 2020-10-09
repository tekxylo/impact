@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-4">
         <!--<ul class="list-group">
            <li class="list-group-item"><a href="/newride" style="color: black;text-decoration: none;"><i class="fas fa-plus-circle" style="color: #e8253b;"></i> {{ __('Create a new ride') }}</a></li>
              <li class="list-group-item"><a href="/newride" style="color: black;text-decoration: none;"><i class="fas fa-map-marked-alt
            " style="color: #e8253b;"></i> {{ __('Create new map data') }} <span class="badge badge-secondary">New</span></a></li>
            <li class="list-group-item"><a href="/newride" style="color: black;text-decoration: none;"><i class="fas fa-map-marker-alt
            " style="color: #e8253b;"></i> {{ __('Map New Trail') }} <span class="badge badge-secondary">New</span></a></li>
            <li class="list-group-item"><a href="/account/events" style="color: black;text-decoration: none;"><i class="fas fa-calendar-alt" style="color: #e8253b;"></i> {{ __('Your Events') }}</a></li>
            <li class="list-group-item"><a href="/account/vehicles" style="color: black;text-decoration: none;"><i class="fas fa-motorcycle" style="color: #e8253b;"></i> {{ __('Your Vehicles') }}</a></li>
            <li class="list-group-item"><a href="/account/vehicles" style="color: black;text-decoration: none;"><i class="fas fa-cog" style="color: #e8253b;"></i> {{ __(' Account Settings') }} <span class="badge badge-secondary">New</span></a></li>
            
            </ul><br>-->
         <div class="card">
            <div class="card-body">
                  <center>
                  <img src="https://media.discordapp.net/attachments/669301137861640205/763033677411516416/20200923_202220.png" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;">
                     <br><br><h4 class="text-primary" style="margin-bottom:0px;padding-bottom:0px;">{{Auth::user()->name}}</h4>
                     <p style="margin-bottom:0px;padding-bottom:0px;color:dark-gray"><strong>Administrator</strong></p>
                     </center>
               <hr>
               <h4 style="font-size:18px;"><i class="fas fa-level-up-alt"></i> Level</h4>
               <p style="margin-bottom:5px;padding-bottom:0px;"><strong>1 | 3000/10000 OXP</strong></p>
               <div class="progress" style="    height: 5px;">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 15%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-map-marker"></i> Distance</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>0km</strong></p>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-stopwatch"></i> Ride Time</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>0hrs</strong></p>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-map-marker-alt"></i> Favorite Trail</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>Malakoff Rd (Teal Trail)</strong></p>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-truck-monster"></i> Favorite Vehicle</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>Dirt Bike</strong></p>
               <br>
               <h4 style="font-size:18px;"><i class="fas fa-calendar-alt"></i> Upcoming Events</h4>
               <!--<strong>You have no events.</strong>-->
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>You have no upcoming events.</strong></p>
               <!--<p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>Time to be reckless.</strong></p>-->
            </div>
         </div>
         <br>
      </div>
      <div class="col-md-8">
         <!--<div class="alert alert-danger" role="alert" style="background-color: #e85225;border-color: #e85225;color: #fff;">
            <strong>
               <h1 style="font-size:20px;margin-top:8px;"><i class="fas fa-exclamation-circle"></i> You are being rate limited.</h1>
            </strong>
            </div>-->
         <!--<div class="alert alert-danger" role="alert" style="background-color: #e85225;border-color: #e85225;color: #fff;">
            <strong><h1 style="font-size:20px;margin-top:8px;"><i class="fas fa-truck-monster"></i> Event Notice</h1>
            <p>You have a ride awaiting you november 1st from 3AM - 8:30PM! Let's Bounce Some Rocks!</p></strong>
            </div>-->
         <!--<div class="alert alert-danger" role="alert" style="background-color: #e8253b;border-color: #e8253b;color: #fff;">
            <strong><h1 style="font-size:20px;margin-top:8px;"><i class="fas fa-truck-monster"></i> Event Cancellation Notice</h1>
            <p>Event has been Cancelled! Let's Bounce Some Rocks!</p></strong>
            </div>-->
         <!--<div class="alert alert-danger" role="alert" style="background-color: #e8253b;border-color: #e8253b;color: #fff;">
            <strong><h1 style="font-size:20px;margin-top:8px;"><i class="fas fa-truck-monster"></i> Event Cancellation Notice</h1>
            <p>Event has been Cancelled until Tomorrow! Time to rock in the rocks!</p></strong>
            </div>-->
         <!--<div class="alert alert-danger" role="alert" style="background-color: #9d25e8;border-color: #9d25e8;color: #fff;">
            <strong><h1 style="font-size:20px;margin-top:8px;"><i class="fas fa-truck-monster"></i> Ride In Progress!</h1>
            <p>You are currently at this event : Let's Bounce Some Rocks! </p></strong>
            </div>-->
         <!--<<div class="alert alert-danger" role="alert" style="background-color: #257ce8;border-color: #257ce8;color: #fff;">
            <strong><h1 style="font-size:20px;margin-top:8px;"><i class="fas fa-truck-monster"></i> New Vehicles Compatibility</h1>
            <p>Trucks, Monster Trucks & Jeeps have been added to offroading types.</p></strong>
            </div>-->
         <div class="card">
            <div class="card-body">
               <center>
                  <img src="https://media.discordapp.net/attachments/669301137861640205/763033677411516416/20200923_202220.png" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;"/>
                  <h2 style="margin-top:5px;">Welcome, {{Auth::user()->name}}!</h2>
                  <button type="button" class="btn btn-sm btn-outline-primary">Create Ride</button>
            <button type="button" class="btn btn-sm btn-outline-primary">Your Team</button>
               <button type="button" class="btn btn-sm btn-outline-primary">Create Trail</button>
               </center>
            </div>
         </div>
         <br>
         <!--<h4 style="font-size:18px;margin-left: 2px;"><i class="fas fa-flag-checkered"></i> Motocross Training</h4>
         <div class="card">
            <div class="card-body">
               <p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>You did not ride today.</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #007bff;"><i class="fas fa-check"></i> <strong>You have met your sleep goal</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>You have gained 0lb/60lb (0lb today)</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #007bff;"><i class="fas fa-check"></i> <strong>You have worked out 1 hour today</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #007bff;"><i class="fas fa-check"></i> <strong>You have learnt 1 new skill</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>You are not fit for motocross</strong></p>
            </div>
         </div>
         <br>-->
         <div class="card">
            <div class="card-body">
               <h4 class="text-primary" style="color: #e8253b;">Control The Power</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker-alt"></i> <strong>Shediac, N-B</strong></p>
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-crown"></i> <strong>Colb</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-truck-monster"></i> <strong>Dirtbike Ride</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>Everyday, from 5:00PM to 7:00PM</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;" class="text-secondary"><i class="fas fa-exclamation-circle"></i> <strong>Event In Progress</strong></p>
               <!--<hr><button type="button" class="btn btn-sm btn-success">Event In Progress</button>
                  <button type="button" class="btn btn-sm  btn-danger disabled">Not Going</button>
                  <button type="button" class="btn btn-sm  btn-danger disabled">Cancel Ride</button><br>-->
               <!--<p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>This ride is not cancellable due to it being daily.</strong></p>-->
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
               <center>
                  <h2 class="text-primary" style="margin-top:5px;"><i class="fas fa-history"" aria-hidden="true"></i></h2>
                  <p style="padding:0px;margin:0px;"><strong>History</strong></p>
               </center>
            </div>
         </div>
         <br> 
         <div class="input-group">
         <input type="password" class="form-control" id="inputPassword2" placeholder="Search For Rides" style="height: 20px;">
         <button type="submit" class="btn btn-primary mb-3">Search</button>
         </div>
         <br>

         <!--<div class="card">
            <div class="card-body">
               <h4 class="text-primary" style="color: #e8253b;">Unleash The Fear</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker-alt"></i> <strong>Shediac, N-B</strong></p>
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-crown"></i> <strong>Tek Xylo</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-users"></i> <strong>Tek Xylo</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-motorcycle"></i> <strong>Dirtbike Ride</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker"></i> <strong>3.33KM</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>Tuesday, September 29, 2020 at 3:00AM</strong></p>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
               <h4 class="text-primary" style="color: #e8253b;">Unleash The Pressure</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker-alt"></i> <strong>River Glade, N-B</strong></p>
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-crown"></i> <strong>Ykodur</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-users"></i> <strong>Ykodur, MANIAC RIDER, Erikk, Janette, Guillaume</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-motorcycle"></i> <strong>Dirtbike Ride</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker"></i> <strong>92.12KM</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>Tuesday, September 29, 2020 at 3:30PM</strong></p>
            </div>
         </div>
         <br>
         <div class="card">
            <div class="card-body">
               <h4 class="text-primary" style="color: #e8253b;">Unleash The Pressure</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker-alt"></i> <strong>River Glade, N-B</strong></p>
               <hr>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-crown"></i> <strong>Ykodur</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-users"></i> <strong>Ykodur, MANIAC RIDER, Erikk, Janette, Guillaume</strong> </p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-motorcycle"></i> <strong>Dirtbike Ride</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-map-marker"></i> <strong>85.23KM</strong></p>
               <p style="margin-bottom:0px;padding-bottom:0px;"><i class="fas fa-calendar-alt"></i> <strong>Monday, September 28, 2020 at 6:00PM</strong></p>
            </div>
         </div>-->
         
         
         <strong>You have no past history.</strong><br>

         <br>
         <button type="button" class="btn btn-primary">Show Full History</button>
         <br><br>
      </div>
   </div>
</div>
@endsection