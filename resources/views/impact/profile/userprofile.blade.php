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
                  <!--<center>
                  <img src="https://media.discordapp.net/attachments/669301137861640205/763033677411516416/20200923_202220.png" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;">
                     <br><br><h4 style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;">{{Auth::user()->name}}</h4>
                     <p style="margin-bottom:0px;padding-bottom:0px;color:dark-gray"><strong>Administrator</strong></p>
                     </center>-->
                     <h4 style="margin-bottom:0px;padding-bottom:0px;">About Me</h4>
                     <p style="margin-bottom:0px;padding-bottom:0px;color:dark-gray">No Bio</p>
               <hr>
               <h4 style="color: #e8253b;font-size:18px;"><i class="fas fa-level-up-alt"></i> Level</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>0 | 0/10000 OXP</strong></p>
               <div class="progress" style="    height: 5px;">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 1%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
               </div>
               <br>
               <h4 style="color: #e8253b;font-size:18px;"><i class="fas fa-map-marker"></i> Distance</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>0km</strong></p>
               <br>
               <h4 style="color: #e8253b;font-size:18px;"><i class="fas fa-stopwatch"></i> Ride Time</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>0hrs</strong></p>
               <br>
               <h4 style="color: #e8253b;font-size:18px;"><i class="fas fa-map-marker-alt"></i> Favorite Trail</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>Malakoff Rd (Teal Trail)</strong></p>
               <br>
               <h4 style="color: #e8253b;font-size:18px;"><i class="fas fa-truck-monster"></i> Favorite Vehicle</h4>
               <p style="margin-bottom:0px;padding-bottom:0px;"><strong>Dirt Bike</strong></p>
               
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
         <!--<<div class="alert alert-danger" role="alert" style="background-color: #257ce8;border-color:
Ea mel exerci electram. Ut per inani efficiendi, et duo euismod posidonium. Ut nec nulla accusamus, id tritani argumentum intellegam usu. Ut magna discere vituperata cum, ad per scripta necessitatibus, pri ne odio tamquam nusquam. Purto definiebas id est.#257ce8;color: #fff;">
            <strong><h1 style="font-size:20px;margin-top:8px;"><i class="fas fa-truck-monster"></i> New Vehicles Compatibility</h1>
            <p>Trucks, Monster Trucks & Jeeps have been added to offroading types.</p></strong>
            </div>-->



         <div class="card">
            <div class="card-body">
               <center>
                  <img src="https://media.discordapp.net/attachments/669301137861640205/763033677411516416/20200923_202220.png" alt="userprofile" class="img-responsive rounded-circle" style="width:75px;height:75px;"/>
                  <h2 style="margin-top:10px;margin-bottom:0px;padding-bottom:0px;">{{Auth::user()->name}}</h2>
                  <strong>{{Auth::user()->tag}}</strong>
               </center>
            </div>
         </div>
         <br>

         <!--<h4 style="font-size:18px;margin-left: 2px;"><i class="fas fa-flag-checkered"></i> Unleashed Team</h4>
         <div class="card">
            <div class="card-body">
               <p style="margin-bottom:0px;padding-bottom:0px;color: #e8253b;"><i class="fas fa-times"></i> <strong>You are temporarily banned from UNLEASHED until January 3rd 2021.</strong></p>
            </div>
         </div>
         <br>-->
         <div class="card">
            <div class="card-body">
                  <center>
                  <br>
                  <p>Ea mel exerci electram. Ut per inani efficiendi, et duo euismod posidonium. Ut nec nulla accusamus, id tritani argumentum intellegam usu. Ut magna discere vituperata cum, ad per scripta necessitatibus, pri ne odio tamquam nusquam. Purto definiebas id est.</p>
                  </center>                  
            </div>
            <div class="card-footer">
            <p style="margin-bottom:0px;padding-bottom:0px;"><strong><i class="fas fa-clock"></i> Wed 11:21 PM</strong></p>
            </div>
         </div>
         <br>
         
   </div>
</div>
@endsection