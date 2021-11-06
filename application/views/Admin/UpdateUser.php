
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
            <h2 class="h5">GMS</h2>@<span>AAPC</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
              <li><a href="<?php echo base_url('Admin_C/AdminDashboard')?>"> <i class="fa fa-home"></i>Home                             </a></li>

          <li> <a class="fa fa-user" href="<?php echo base_url('Admin_C/ManageUsers')?>"><i class=""></i>Mange User</a></li>
        
       <!-- encoder managment -->
              <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Encoder Part</a>
              <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
              <li> <a class="fa fa-user" href="<?php echo base_url('Admin_C/MemberRegManage')?>"><i class=""></i>Employee Mgmt</a></li>
           
              <li> <a class="fa fa-user" href="<?php echo base_url('Admin_C/DriverManage')?>"><i class=""></i>Driver Mgmt</a></li>
              <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/VehicleDashboard')?>"><i class=""></i>Vihicle Mgmt</a></li>
               
              </ul>
            </li>
          <!-- driver part -->
           <li><a href="#exampledropdownDropdown2" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Driver Part</a>
              <ul id="exampledropdownDropdown2" class="collapse list-unstyled ">
              <li> <a class="fa fa-user" href="<?php echo base_url('Admin_C/RequestRegManage')?>"><i class=""></i>Request Help</a></li>
               <li> <a class="fa fa-user" href="<?php echo base_url('Admin_C/ViewStatus')?>"><i class=""></i>View vehicle Status</a></li>
               
              </ul>
            </li>
              
             <!-- storekeeper part -->
           <li><a href="#exampledropdownDropdown3" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>StoreKeeper Part</a>
              <ul id="exampledropdownDropdown3" class="collapse list-unstyled ">
           <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/AccessoryManage')?>"><i class=""></i>Accessory Registration</a></li>
            <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/VehicleAssignment')?>"><i class=""></i>Vehicle Assignment</a></li>
          <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/AccessoryConfirmManage')?>"><i class=""></i>Approve Accessory </a></li>
               
              </ul>
            </li>  
             <!-- reception part -->
            <li><a href="#exampledropdownDropdown4" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Reception Part</a>
              <ul id="exampledropdownDropdown4" class="collapse list-unstyled ">
            <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/ServiceAssignDashboard')?>"><i class=""></i>Assign Technician</a></li>

          <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/ServiceRequestDashboard')?>"><i class=""></i>View Detail Service</a></li>
               
              </ul>
            </li>

             <!-- technician part -->
             <li><a href="#exampledropdownDropdown5" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Technician Part</a>
              <ul id="exampledropdownDropdown5" class="collapse list-unstyled ">
            <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/ServiceDetailRegManage')?>"><i class=""></i>Reg Detail</a></li>
          <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/AccessoryRequestManage')?>"><i class=""></i>Request Accessory </a></li>
               
              </ul>
            </li>

               
               <!-- manager part -->
               <li><a href="#exampledropdownDropdown6" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Manager Part</a>
                 <ul id="exampledropdownDropdown6" class="collapse list-unstyled ">
            <li> <a class="fa fa-bus" href="<?php echo base_url('Admin_C/RequestApproveManage')?>"><i class=""></i>Help Request Approval</a></li>
          </ul>
            <!-- help managment -->
         <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list"></i>Help Part</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="<?php echo base_url('Admin_C/TechHelpDashboard')?>"> <i class="fas fa-angle-right"></i>Technical Help</a></li>
                <li><a href="<?php echo base_url('Admin_C/SystemHelpDashboard')?>"> <i class="fas fa-chevron-circle-right"></i>  System Help</a></li>
               
              </ul>
            </li>
            
          </ul>
        </div>
        <div class="admin-menu">
         <hr>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
                  <li><a class="" href="<?php echo base_url('Authentication/logout')?>"><i class="fa fa-power-off"></i>Logout</a></li>
     
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
                  <div class="brand-text d-none d-md-inline-block "><span class="text-primary"><strong> Garage&nbsp;</strong></span><strong class="text-primary">Managment&nbsp;System  </strong></div></a></div>
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
        <div class="container-fluid">
          <div class="row">
            <!-- body-->
                 <form   method="post" action="<?php echo base_url()?>Admin_C/update_user">
    <h2 class="">Edit User Registration</h2>
    <hr>
     <?php 
                   if(isset($fetch_data))
                       {
                         foreach ($fetch_data as $row) 
                         {
                             
                            ?> 
          <div class="form-group">
            <!-- <lable>user id</lable> -->
        <i class="fa fa-user icon"></i>
        <input  type="text" placeholder="userid" name="userid" value="<?php echo $row->user_id; ?>" required>
         <span class="text-danger"><?php echo form_error("userid"); ?></span>
    </div>

    

    <div class="form-group">
      <!-- <lable>user name</lable> -->
        <i class="fa fa-user icon"></i>
        <input  type="text" placeholder="Username" name="username" value="<?php echo $row->user_name; ?>" >
         <span class="text-danger"><?php echo form_error("username"); ?></span>
    </div>

    <div class="form-group">
      <!-- <lable>email</lable> -->
        <i class="fa fa-envelope icon"></i>
        <input  type="text" placeholder="Email" name="email" value="<?php echo $row->email; ?>" required >
         <span class="text-danger"><?php echo form_error("email"); ?></span> 
    </div>

    <div class="form-group">
      <!-- <lable>password</lable> -->
        <i class="fa fa-key icon"></i>
        <input type="password" placeholder="Password" name="password" value="<?php echo $row->user_password; ?>" required>
         <span class="text-danger"><?php echo form_error("password"); ?></span> 
    </div>

     
     <div class="form-group ">
                   <!-- <lable>user status</lable> -->
                        <i class="fa 2xfa fa-user icon"></i>
                        <select class="form-group col-lg-6" id="usertype" name="usertype">
                           <option value="<?php echo $row->user_type; ?>"><?php echo $row->user_type; ?></option>
                            <option value="">-select usertype-</option>
                            <option value="admin">admin</option>
                            <option value="librarian">librarian</option>
                             <option value="encoder">encoder</option>
                            <option value="oprational">oprational</option>
                        </select>
                         <span class="text-danger"><?php echo form_error("repassword"); ?></span> 
                  </div>
                   <div class="form-group">
                    <!-- <lable>user id</lable> -->
                                <i class="fa 2xfa fa-user icon"></i>
                                <select class="form-group col-lg-6" id="userstatus" name="userstatus">
                                   <option value="<?php echo $row->user_status; ?>"><?php echo $row->user_status; ?></option>
                                    <option value="">-select userstatus-</option>
                                    <option value="active">active</option>
                                    <option value="inactive">inactive</option>
                                    
                                </select>
                                 <span class="text-danger"><?php echo form_error("repassword"); ?></span> 
                    </div>
                          <div class="form-label-group col-lg-4">
                           <label for="uploadimage">Upload Vehicle Image</label>
                           <!-- <input type="file" name="userfile" size="20" /> -->
                         <input type="file" id="uploadimage" name="uploadimage" size="33" />
                         </div>
     
                            <div class="form-group col-lg-12">
                         <input type="hidden" name="hidden_id" value="<?php  echo $row->user_id;?>" required>
                        <input type="submit" value="Update" class="btn btn-info" name="update"/>

                            <?php echo anchor('Admin_C/ManageUsers','Back',['class'=>'btn btn-defualt']);?>
                               
                          </div>
                     <?php }
                       }
                        ?> 
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