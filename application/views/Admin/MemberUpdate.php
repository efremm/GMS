
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
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
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
              <form   method="post" action="<?php echo base_url()?>Encoder_C/update_member">
                 <div class="container row">
                  <div class="col-lg-12"> <h4 style="font-family: sans-serif;">Edit Accessory Data</h4></div>
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
                        <label for="title">title</label>
                        <input  type="text" class="form-control" id="title" name="title" placeholder="title"  autofocus value="<?php echo $row->title; ?>"  >
                        <span class="text-danger"><?php echo form_error("title"); ?></span>
                    </div>
                  <div class="form-label-group col-lg-4">
                        <label for="firstname">first_name</label>
                        <input  type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname"  autofocus value="<?php echo $row->first_name; ?>" >
                        <span class="text-danger"><?php echo form_error("firstname"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="middlename">middle_name</label>
                        <input  type="text" class="form-control" id="middlename" name="middlename" placeholder="middlename"  autofocus value="<?php echo $row->middle_name; ?>" >
                        <span class="text-danger"><?php echo form_error("middlename"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="lastname">last_name</label>
                        <input  type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname"  style="colour:blue" autofocus value="<?php echo $row->last_name; ?>" >
                        <span class="text-danger"><?php echo form_error("lastname"); ?></span>
                    </div>
                  <div class="form-label-group col-lg-4" >
                        <label for="gender">Gander</label>
                        <select class="form-control text-success" id="gender" name="gender" >
                              <option value="<?php echo $row->gender; ?>" ><?php echo $row->gender; ?> </option> 
                            <option >-select gender-</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("gender"); ?></span>
                    </div>
                      <div class="form-label-group col-lg-4">
                        <label for="department">department</label>
                        <input  type="text" class="form-control" id="department" name="department" placeholder="department"  autofocus value="<?php echo $row->department; ?>" >
                        <span class="text-danger"><?php echo form_error("department"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="salary">salary</label>
                        <input  type="text" class="form-control" id="salary" name="salary" placeholder="salary"  autofocus value="<?php echo $row->salary; ?>" >
                        <span class="text-danger"><?php echo form_error("salary"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="registrationdate">registration_date</label>
                        <input  type="text" class="form-control" id="registrationdate" name="registrationdate" placeholder="registrationdate"  autofocus value="<?php echo $row->registration_date; ?>" >
                        <span class="text-danger"><?php echo form_error("registrationdate"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="hireddate">hired date</label>
                        <input  type="text" class="form-control" id="hireddate" name="hireddate" placeholder="hireddate"  autofocus value="<?php echo $row->hired_date; ?>" >
                        <span class="text-danger"><?php echo form_error("hireddate"); ?></span>
                    </div>



     
                            <div class="form-group col-lg-12">
                         <input type="hidden" name="hidden_id" value="<?php  echo $row->member_id;?>" required>
                        <input type="submit" value="Update" class="btn btn-info" name="update"/>

                            <?php echo anchor('Encoder_C/MemberRegManage','Back',['class'=>'btn btn-defualt']);?>
                               
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

  
 

  </body>
</html>