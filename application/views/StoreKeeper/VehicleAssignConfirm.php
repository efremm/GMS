
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
            <h2 class="h5">GMS</h2><span>@AAPC</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong class="text-primary">GMS</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
         <hr>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
          <li><a  href="<?php echo base_url('StoreKeeper_C/StoreKeeperDashboard')?>"> <i class="fa fa-home"></i>Home  </a></li>

          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/AccessoryManage')?>"><i class=""></i>Accessory Registration</a></li>
           
          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/VehicleAssignment')?>"><i class=""></i>Vehicle Assignment</a></li>
          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/AccessoryConfirmManage')?>"><i class=""></i>Approve Accessory </a></li>
     
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
                  <div class="brand-text d-none d-md-inline-block"><span>Garage  </span><strong class="text-primary">Managment System</strong></div></a></div>
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
                                         <a class="dropdown-item" href="<?php echo base_url('StoreKeeper_C/StoreKeeperDashboard')?>"><i class="fa fa-user"></i>Home</a>
                                         
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
           <form   method="post" action="<?php echo base_url()?>StoreKeeper_C/update_vehicle">
               <div class="container row">
                  <div class="col-lg-12"> <h2 style="font-family: sans-serif;background-color: silver">Assign Vehicle</h2></div>
                        <hr>
                          <div class="col-lg-12" style="background-color: green">
                      <?php if($scsmsg = $this->session->flashdata('successmsg'));?>
                     <?php echo $scsmsg; ?>
                          <?php if($errmsg = $this->session->flashdata('errormsg'));?>
                     <?php echo $errmsg; ?>
                   </div>
                   <?php 
                   if(isset($fetch_data))
                       {
                         foreach ($fetch_data as $row) 
                         {
                             
                            ?> 
                    <div class="form-label-group col-lg-4">
                        <label for="vehicleid">Vehicle ID</label>
                        <input type="text" class="form-control text-danger" id="vehicleid" name="vehicleid" placeholder="Insert vehicleid" value="<?php echo $row->vehicle_id; ?>"  autofocus readonly>
                        <span class="text-danger"><?php echo form_error("vehicleid"); ?></span>
                    </div>
                      <div class="form-label-group col-lg-4">
                        <label for="plateno">plateno</label>
                        <input type="text" class="form-control text-danger" id="plateno" name="plateno" placeholder="Insert plateno"  autofocus readonly value="<?php echo $row->plate_no; ?>"  >
                        <span class="text-danger"><?php echo form_error("plateno"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="vihiclefactory">Vehicle Factory</label>
                        <input type="text" class="form-control" id="vihiclefactory" name="vihiclefactory" placeholder="Insert vihicle factory"  autofocus value="<?php echo $row->vehicle_factory; ?>"  >
                        <span class="text-danger"><?php echo form_error("vihiclefactory"); ?></span>
                    </div>
                 
                    <div class="form-label-group col-lg-4">
                        <label for="model">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Model"  autofocus  value="<?php echo $row->model; ?>"  >
                        <span class="text-danger"><?php echo form_error("model"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="yearmadein">Year Made In</label>
                        <input  data-type="date" class="form-control" id="yearmadein" name="yearmadein" placeholder="year_made_in"  autofocus value="<?php echo $row->year_made; ?>"  >
                        <span class="text-danger"><?php echo form_error("yearmadein"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="chassinumber">Chassi Number</label>
                        <input type="text" class="form-control" id="chassinumber" name="chassinumber" placeholder="chassi number"  autofocus value="<?php echo $row->chassi_number; ?>"  >
                        <span class="text-danger"><?php echo form_error("chassinumber"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="madein">Made In</label>
                        <select class="form-control" id="madein" name="madein">
                      <option  value="<?php echo $row->made_in; ?>"  >  <?php echo $row->made_in; ?> </option>    
                            <option value="">-select made in-</option>
                            <option value="Afganistan">Afganistan</option>
                            <option value="Angola">Angola</option>
                             <option value="Argentina">Argentina</option>
                             <option value="Argentina">Albania</option>
                             <option value="Argentina"> Algeria</option>
                            <option value="Argentina">Andorra</option>
                             <option value="Argentina">Angola</option>
                               <option value="Argentina">Antigua and Barbuda</option>
                              <option value="Argentina">Argentina</option>
                             <option value="Argentina"> Armenia</option>
                              <option value="Argentina">Australia</option>
                              <option value="Argentina"> Austria</option>
                              <option value="Argentina">Azerbaijan</option>
                              <option value="Argentina"> Bahamas</option>
                               <option value="Argentina"> Bahrain</option>
                               <option value="Argentina">Bangladesh</option>
                               <option value="Argentina">Barbados</option>
                                <option value="Argentina"> Belarus</option>
                                <option value="Argentina">Belgium</option>
                              <option value="Argentina">Belize</option>
                              <option value="Argentina">Benin</option>
                              <option value="Argentina">Bhutan</option>
                              <option value="Argentina">Bolivia</option>

                        </select>
                        <span class="text-danger"><?php echo form_error("madein"); ?></span>
                    </div>
        
                   
                    <div class="form-label-group col-lg-4">
                        <label for="motornumber">Motor Number</label>
                        <input type="text" class="form-control" id="motornumber" name="motornumber" placeholder="motor_number"  autofocus value="<?php echo $row->motor_number; ?>"  >
                        <span class="text-danger"><?php echo form_error("motornumber"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="libre">Libre</label>
                        <input type="text" class="form-control" id="libre" name="libre" placeholder="libre"  autofocus value="<?php echo $row->libre; ?>"  >
                        <span class="text-danger"><?php echo form_error("libre"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="fueltype">Fuel Type</label>
                        <input type="text" class="form-control" id="fueltype" name="fueltype" placeholder="fuel_type"  autofocus value="<?php echo $row->fuel_type; ?>"  >
                        <span class="text-danger"><?php echo form_error("fueltype"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="freeduty">Free Duty</label>
                        <select class="form-control" id="freeduty" name="freeduty">
                              <option value="<?php echo $row->free_duty; ?>" ><?php echo $row->free_duty; ?> </option> 
                            <option>-select free duty-</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("freeduty"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="vehiclecondition">Condition</label>
                        <input type="text" class="form-control" id="vehiclecondition" name="vehiclecondition" placeholder="vhcl_condition"  autofocus value="<?php echo $row->vehicle_condition; ?>"  >
                         <span class="text-danger"><?php echo form_error("vehiclecondition"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="odometer">Audometer</label>
                        <input type="text" class="form-control" id="odometer" name="odometer" placeholder="odometer"  autofocus value="<?php echo $row->odometer; ?>"  >
                        <span class="text-danger"><?php echo form_error("odometer"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="numtyres">Number of Tyers</label>
                        <input type="text" class="form-control" id="numtyres" name="numtyres" placeholder="num_tyres"  autofocus value="<?php echo $row->number_of_tyre; ?>"  >
                        <span class="text-danger"><?php echo form_error("numtyres"); ?></span>
                    </div>
                   
                    <div class="form-label-group col-lg-4">
                        <label for="loadingcapacity">Loading Capacity</label>
                        <input type="text" class="form-control" id="loadingcapacity" name="loadingcapacity" placeholder="loading_capacity"  autofocus value="<?php echo $row->loading_capacity; ?>"  >
                        <span class="text-danger"><?php echo form_error("loadingcapacity"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="insurencerenwal">Insurence Renewal Date</label>
                        <input type="text" class="form-control" id="insurencerenwal" name="insurencerenwal" placeholder="insurence_renwal"  autofocus value="<?php echo $row->insurance_renewal_date; ?>"  >
                        <span class="text-danger"><?php echo form_error("insurencerenwal"); ?></span>
                    </div>
                                    
                     <div class="form-label-group col-lg-4">
                        <label for="odometer">Audometer</label>
                        <input type="text" class="form-control" id="odometer" name="odometer" placeholder="odometer"  autofocus value="<?php echo $row->odometer; ?>"  >
                        <span class="text-danger"><?php echo form_error("odometer"); ?></span>
                    </div>


                     <div class="form-label-group col-lg-4">
                        <label for="registered_by">registered_by</label>
                        <input type="text" class="form-control" id="registered_by" name="registered_by" placeholder="registered_by"  autofocus value="<?php echo $row->registered_by; ?>"  >
                        <span class="text-danger"><?php echo form_error("registered_by"); ?></span>
                    </div>
                    <div class="col-lg-12  bg-info"><span class="text-danger">Approval Part</span></div>
                  </hr>
                 
                    <div class="form-label-group col-lg-4">
                        <label for="assigned_by">assigned_by</label>
                        <input type="text" class="form-control" id="assigned_by" name="assigned_by" placeholder="assigned_by"  value="<?php echo $this->session->userdata('username');?>" autofocus  readonly >
                        <span class="text-danger"><?php echo form_error("assigned_by"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="vehicle_status">vehicle_status</label>
                        <input type="text" class="form-control" id="vehicle_status" name="vehicle_status" placeholder="vehicle_status"  autofocus  value="<?php echo $row->vehicle_status; ?>"  >
                        <span class="text-danger"><?php echo form_error("vehicle_status"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="assigned_date">assigned_date</label>
                        <input type="date" class="form-control" id="assigned_date" name="assigned_date" placeholder="assigned_date"  autofocus  value="<?php echo $row->assigned_date; ?>"  >
                        <span class="text-danger"><?php echo form_error("assigned_date"); ?></span>
                    </div>
                 <!--  <div class="form-label-group col-lg-4">
                        <label for="assigned_to_driver">assigned_to_driver</label>
                        <input type="text" class="form-control" id="assigned_to_driver" name="assigned_to_driver" placeholder="assigned_to_driver"  autofocus readonly value="<?php echo $row->assigned_to_driver; ?>"  >
                        <span class="text-danger"><?php echo form_error("assigned_to_driver"); ?></span>
                    </div> -->
                     <div class="form-label-group col-lg-4" >
                        <label for="assigned_to_driver">drivername</label>
                        <select class="form-control text-success"  id="assigned_to_driver" name="assigned_to_driver">
                          <option value="">select driver</option>
                             <!--  <option value="<?php echo $row->first_name; ?>" ><?php echo $row->status; ?> </option>  -->
                    <?php
                           if(isset($fetch_data_drop))
                       {
                         foreach ($fetch_data_drop as $popdrivername) 
                         {
                             
                            ?> 
                             <option value="<?php echo $popdrivername->first_name; ?>"><?php echo $popdrivername->first_name; ?> </option>
                            <?php }
                       }
                        ?> 
                      
                            
                        </select>
                        <span class="text-danger"><?php echo form_error("assigned_to_driver"); ?></span>
                    </div>
                    
                    <div class="col-lg-12">
                   <hr>
                   </div>
                   
                            <div class="form-group col-lg-12">
                         <input type="hidden" name="hidden_id" value="<?php  echo $row->vehicle_id;?>" required>
                        <input type="submit" value="Update" class="btn btn-info" name="update"/>

                            <?php echo anchor('StoreKeeper_C/StoreKeeperDashboard','Back',['class'=>'btn btn-defualt']);?>
                               
                          </div>
                     <?php }
                       }
                        ?> 
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

          <script>
            $('input[data-type="date"]').datetimepicker({
                format: 'YYYY-MM-DD'
            });

        </script>
 

  </body>
</html>