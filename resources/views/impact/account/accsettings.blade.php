<div class="container">
   <div class="row justify-content-center">
      <div class="col-md-3">
            <div class="list-group">
            <button wire:click="setPage('general')" class="list-group-item list-group-item-action @if($active == 'general') active @endif" aria-current="true"><i class="fas fa-cog"></i> General Settings</button>
            <button disabled wire:click="setPage('profilepicture')" class="list-group-item list-group-item-action @if($active == 'profilepicture') active @endif"><i class="far fa-smile-beam"></i> Profile Picture</button>
            <button wire:click="setPage('security')" class="list-group-item list-group-item-action @if($active == 'security') active @endif"><i class="far fa-fingerprint"></i> Security</button>
            <button wire:click="setPage('connections')" class="list-group-item list-group-item-action @if($active == 'connections') active @endif"><i class="far fa-plug"></i> Connections</button>
            <button href="#" class="list-group-item list-group-item-action" disabled><i class="far fa-credit-card"></i> Payment Methods</button>
            <button href="#" class="list-group-item list-group-item-action" disabled><i class="far fa-user-secret"></i> Privacy</button>
            <button href="#" class="list-group-item list-group-item-action" disabled><i class="far fa-laptop"></i> Connected Devices</button>
            <button href="#" class="list-group-item list-group-item-action" disabled><i class="far fa-cogs"></i> Advanced Settings</button>
            </div>
            <br>
            <!--<div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"><i class="fab fa-youtube"></i> Youtube Channel Manager</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-trophy"></i> Partnership Program</a>
            </div>
            <br>-->
            @if(Auth::user()->role == "adminsgfsdf")
            <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-cog"></i> General Admin Settings</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-users"></i> Users</a>
            <a href="#" class="list-group-item list-group-item-action"><i class="far fa-cloud"></i> Storage Monitoring</a>
            </div>
            <br>
            @endif
            <div class="list-group">
            <button class="list-group-item list-group-item-action" disabled><i class="far fa-book"></i> Policies</button>
            <button disabled href="#" class="list-group-item list-group-item-action"><i class="far fa-info-circle"></i> About Impact</button>
            </div>
      </div>
      <div class="col-md-8">
            @if($active == 'general') 
            <livewire:account.general/>
            @endif

            @if($active == 'profilepicture') 
            Profile Picture
            @endif

            @if($active == 'security') 
            <livewire:account.security/>
            @endif

            @if($active == 'connections') 
            <livewire:account.connections/>
            @endif

            @if($active == 'about') 
            About
            @endif
      </div>
   </div>
</div>