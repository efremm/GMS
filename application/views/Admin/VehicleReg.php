<?php 
$system_name = $this->db->get_where('gms_global_data', array('type' => 'SystemName'))->row()->remark;
$system_title = $this->db->get_where('gms_global_data', array('type' => 'SystemTitle'))->row()->remark;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GMS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
     
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sidemenu/bootstrap/css/bootstrap.css'?>">


        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
       
          <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sidemenu/bootstrap/css/bootstrap.css'?>">

           <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sidemenu/bootstrap/css/bootstrap.css'?>">

        
           <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sidemenu/css/style.blue.css'?>">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sidemenu/css/style.default.css'?>">
             <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap4/css/bootstrap.min.css'?>">
            <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sidemenu/css/style.green.css'?>">
             <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sidemenu/css/fontastic.css'?>">
              <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap4/css/bootstrap-grid.css'?>">
       
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
       
         <div class="sidenav-header-inner text-center"><img src="<?php echo base_url('/images/icon.PNG'); ?> "  alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">GMS</h2><span>@EFPC</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"><strong class="text-primary">GMS</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
         <li> <a class="fa fa-home" href="<?php echo base_url('Encoder_C/home')?>"><i class=""></i>Home</a></li>

          <li> <a class="fa fa-user" href="<?php echo base_url('Encoder_C/MemberRegManage')?>"><i class=""></i>Employee Management</a></li>
           
          <li> <a class="fa fa-user" href="<?php echo base_url('Encoder_C/DriverDashboard')?>"><i class=""></i>Driver Management</a></li>
          <li> <a class="fa fa-bus" href="<?php echo base_url('Encoder_C/VehicleDashboard')?>"><i class=""></i>Vihicle Management</a></li>
             </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Garage</span><strong class="text-primary">Managment System</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              
                   <div class="float-right">
                         <nav class="navbar navbar-expand-lg ">
                          <a class="navbar-brand" href="#">Welcome</a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                          </button>
                       
                          <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                            <ul class="navbar-nav mr-auto">

                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                     <?php echo $this->session->userdata('username');?>
                                  </a>
                                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                         <a class="dropdown-item" href="<?php echo base_url('Admin_C/Help')?>"><i class="fa fa-user"></i>Help</a>
                                         
                                          <a class="dropdown-item" href="<?php echo base_url('Authentication/logout')?>"><i class="fa fa-power-off"></i>Logout</a>
                                                                                            
                                            </div>
                                </li>
                            </ul>
                          </div>
                         </nav>
                      </div>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container">
          <div class="row">
             
            <!-- body-->
               <form   method="post" action="<?php echo base_url()?>Encoder_C/AddVehicle">
                 <div class="container row">
       <div class="col-lg-12"> <h4 style="font-family: sans-serif;">Vehicle Registration</h4></div>
           <hr>
          <div class="container  " style="background-color: green;">
              <?php if($scsmsg = $this->session->flashdata('successmsg'));?>
                     <?php echo $scsmsg; ?>
                          <?php if($errmsg = $this->session->flashdata('errormsg'));?>
                     <?php echo $errmsg; ?> 
             
        </div>
             <div class="form-label-group col-lg-4">
                        <label for="plateno">Plate No</label>
                        <input type="text" class="form-control" id="plateno" name="plateno" placeholder="Insert plate no"  autofocus>
                        <span class="text-danger"><?php echo form_error("plateno"); ?></span>
                    </div>
               <div class="form-label-group col-lg-4">
                        <label for="vihiclefactory">Vehicle Factory</label>
                        <input type="text" class="form-control" id="vihiclefactory" name="vihiclefactory" placeholder="Insert vihicle factory"  autofocus>
                        <span class="text-danger"><?php echo form_error("vihiclefactory"); ?></span>
                    </div>
                 
                    <div class="form-label-group col-lg-4">
                        <label for="model">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Model"  autofocus>
                        <span class="text-danger"><?php echo form_error("model"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="yearmadein">Year Made In</label>
                        <input  data-type="date" class="form-control" id="yearmadein" name="yearmadein" placeholder="year_made_in"  autofocus>
                        <span class="text-danger"><?php echo form_error("yearmadein"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="chassinumber">Chassi Number</label>
                        <input type="text" class="form-control" id="chassinumber" name="chassinumber" placeholder="chassi_number"  autofocus>
                        <span class="text-danger"><?php echo form_error("chassinumber"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="madein">Made In</label>
                        <select class="form-control" id="madein" name="madein">
                            <option value="">-select made in-</option>
                            <option value="Afganistan">Afganistan</option>
                            <option value="Angola">Angola</option>
                             <option value="Argentina">Argentina</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("madein"); ?></span>
                    </div>
        
                    <div class="form-label-group col-lg-4">
                        <label for="fueltype">Fuel Type</label>
                        <input type="text" class="form-control" id="fueltype" name="fueltype" placeholder="fuel_type"  autofocus>
                        <span class="text-danger"><?php echo form_error("fueltype"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="motornumber">Motor Number</label>
                        <input type="text" class="form-control" id="motornumber" name="motornumber" placeholder="motor_number"  autofocus>
                        <span class="text-danger"><?php echo form_error("motornumber"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="libre">Libre</label>
                        <input type="text" class="form-control" id="libre" name="libre" placeholder="libre"  autofocus>
                        <span class="text-danger"><?php echo form_error("libre"); ?></span>
                    </div>
                   
                     <div class="form-label-group col-lg-4">
                        <label for="freeduty">Free Duty</label>
                        <select class="form-control" id="freeduty" name="freeduty">
                            <option>-select free duty-</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("freeduty"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="vehiclecondition">Condition</label>
                        <input type="text" class="form-control" id="vehiclecondition" name="vehiclecondition" placeholder="vhcl_condition"  autofocus>
                         <span class="text-danger"><?php echo form_error("vehiclecondition"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="odometer">Audometer</label>
                        <input type="text" class="form-control" id="odometer" name="odometer" placeholder="odometer"  autofocus>
                        <span class="text-danger"><?php echo form_error("odometer"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="numtyres">Number of Tyers</label>
                        <input type="text" class="form-control" id="numtyres" name="numtyres" placeholder="num_tyres"  autofocus>
                        <span class="text-danger"><?php echo form_error("numtyres"); ?></span>
                    </div>
                   
                    <div class="form-label-group col-lg-4">
                        <label for="loadingcapacity">Loading Capacity</label>
                        <input type="text" class="form-control" id="loadingcapacity" name="loadingcapacity" placeholder="loading_capacity"  autofocus>
                        <span class="text-danger"><?php echo form_error("loadingcapacity"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="insurencerenwal">Insurence Renewal Date</label>
                        <input type="text" class="form-control" id="insurencerenwal" name="insurencerenwal" placeholder="insurence_renwal"  autofocus>
                        <span class="text-danger"><?php echo form_error("insurencerenwal"); ?></span>
                    </div>
                    <!-- <div class="form-label-group col-lg-4">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                          <option value="Assigned">Assigned</option>
                            <option value="Unassign">Unassign</option>   
                        </select>
                     <span class="text-danger"><?php echo form_error("status"); ?></span>
                    </div> -->
                          <div class="form-group col-lg-12">
                      
                            <button type="submit" class="btn btn-primary mb-2" name="add" value="add">Submit</button>
                               
                          </div>
                        </div>  
                </form>
            
          </div>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>EFPC &copy; 2019-20</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="" class="external">Me</a></p>
             
            </div>
          </div>
        </div>
      </footer>
    </div>
      <script src="<?php echo base_url(); ?>assets/sidemenu/jquery/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/sidemenu/popper/popper.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/sidemenu/bootstrap/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url(); ?>assets/sidemenu/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
<script src="<?php echo base_url(); ?>assets/sidemenu/jquery.cookie/jquery.cookie.js"></script>
 <script src="<?php echo base_url(); ?>assets/sidemenu/chart.js/Chart.min.js"></script>
 <script src="<?php echo base_url(); ?>assets/sidemenu/jqueryvalidate/validate.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/sidemenu/Chart/charts-home.js"></script>
  <script src="<?php echo base_url(); ?>assets/sidemenu/js/front.js"></script>
   <script src="<?php echo base_url(); ?>assets/sidemenu/scroll/jquery.Scrollbar.min.js"></script>
<!-- <style type="text/css">
  input:not(:placeholder-shown) {
   background-color:  #96d3ec!important;
}
input:placeholder-shown {
   background-color:  #ffffff!important;
}
</style> -->
  </body>
</html>