<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <!-- Tags -->
      <!-- Fonts -->
      <link rel="dns-prefetch" href="//fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
      <!-- Styles -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
      <link rel="stylesheet" href="/fontawesome/css/all.css">
      <link rel="stylesheet" href="/css/dark-mode.css">
      <link href="//db.onlinewebfonts.com/c/b6539b6d3432c623d8d4f9cc2a29589e?family=Berlin+Sans+FB+Demi" rel="stylesheet" type="text/css"/>
      <style>
         @import url(//db.onlinewebfonts.com/c/b6539b6d3432c623d8d4f9cc2a29589e?family=Berlin+Sans+FB+Demi);
         @font-face {font-family: "Berlin Sans FB Demi"; src: url("//db.onlinewebfonts.com/t/b6539b6d3432c623d8d4f9cc2a29589e.eot"); src: url("//db.onlinewebfonts.com/t/b6539b6d3432c623d8d4f9cc2a29589e.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/b6539b6d3432c623d8d4f9cc2a29589e.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/b6539b6d3432c623d8d4f9cc2a29589e.woff") format("woff"), url("//db.onlinewebfonts.com/t/b6539b6d3432c623d8d4f9cc2a29589e.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/b6539b6d3432c623d8d4f9cc2a29589e.svg#Berlin Sans FB Demi") format("svg"); }
         li::-ms-expand {
         display: none;
         }

         .card {
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important
         }

      </style>
      @livewireStyles
   </head>
   <body>
      <div id="app">
          <br><br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">

                        <center>
                        <br>
                        <img class="mb-3" src="/impact-w.png" alt="" width="272">
                        <br><hr>
                  <p style="padding:0px;margin:0px;font-size:25px;" class="text-danger"><i class="fad fa-times-hexagon"></i> <strong>Looks like you got lost!</strong></p>
                  <p>Seems you might want to call your buddys for help.<br> The page you're after no longer exists.</p>
                  <hr style="width:30%;">
                  <strong>Error 404</strong>
                  @php
                  echo "test";
                  @endphp
                </div>
            </div>
        </div>
    </div>
</div>

</div>
      <!-- Scripts -->
      @livewireScripts
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
   </body>
</html>