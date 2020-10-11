<div>
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
</div>
