
<div class="row">
<nav class="navbar navbar-expand-lg navbar-light bg-light " style="width: 100%; margin-top: 0.2rem">
  <a class="navbar-brand" href="<?php echo base_url("Admin_C/AdminDashboard")?>">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <!-- Admin Part -->
        <li> <a class="fa fa-home" href="<?php echo base_url('SuperAdmin_C/home')?>"><i class=""></i>Home</a></li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url("Admin_C/ManageUsers")?>">Manage Users</a>
      </li>
         
          <!-- encoder part-->
           <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Encoder Managment</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                
          <li> <a class="fa fa-user" href="<?php echo base_url('Encoder_C/MemberRegManage')?>"><i class=""></i>Employee Management</a></li>
           
          <li> <a class="fa fa-user" href="<?php echo base_url('Encoder_C/DriverDashboard')?>"><i class=""></i>Driver Management</a></li>
          <li> <a class="fa fa-bus" href="<?php echo base_url('Encoder_C/VehicleDashboard')?>"><i class=""></i>Vihicle Management</a></li>

              </ul>
            </li>
    
            <!-- accesory managment part -->
      <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Accessory Managment</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                
           <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/AccessoryManage')?>"><i class=""></i>Accessory Registration</a></li>
           
          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/VehicleAssignment')?>"><i class=""></i>Vehicle Assignment</a></li>
          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/AccessoryConfirmManage')?>"><i class=""></i>Approve Accessory </a></li>

              </ul>
            </li>
           <!-- driver managment -->
             <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Driver Managment</a>

              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li> <a class="fa fa-user" href="<?php echo base_url('Driver_C/ViewTechHelp')?>"><i class=""></i>View Help </a></li>
              <li> <a class="fa fa-user" href="<?php echo base_url('Driver_C/RequestRegManage')?>"><i class=""></i>Request Help</a></li>
               <li> <a class="fa fa-user" href="<?php echo base_url('Driver_C/ViewStatus')?>"><i class=""></i>View vehicle Status</a></li>

              </ul>
            </li>
        </ul>
   
  </div>
</nav>
</div>



