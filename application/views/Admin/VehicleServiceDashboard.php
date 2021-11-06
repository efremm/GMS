
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
     
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/bootstrap4/css/bootstrap.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTable/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTable/css/dataTables.bootstrap4.css'?>">
    
      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/sidemenu/bootstrap/css/bootstrap.css'?>">


        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
       
        
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
            <h2 class="h5">GMS</h2><span class="text-info">@AAPC</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong class="text-primary">GMS</strong></a></div>
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
           <!--  <li> <a class="fa fa-bus" href="<?php echo base_url('Encoder_C/VehicleDashboard')?>"><i class=""></i>View System Help</a></li> -->
        
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
                     <div class="col-lg-12" style="background-color: green">
                <?php if($scsmsg = $this->session->flashdata('successmsg'));?>
                     <?php echo $scsmsg; ?>
                          <?php if($errmsg = $this->session->flashdata('errormsg'));?>
                     <?php echo $errmsg; ?>
                   </div>
                   <div class="col-lg-12" style="background-color: grey">  
                  Service Request Managment
                  </div>
     
            <div class="container">
       
                  
                     <hr>
                     <div class="container">
                         <table id="tbluser"  name="tbluser" class="table table-responsive table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th >request id</th>
                                <th >requester name</th>
                                <th >plate no</th>
                                <th >location</th>
                                 <th>issue</th>
                                 <th class="text-primary">Assigned To</th>
                                 <th class="text-primary">Service Status</th>
                                <th class="text-danger">Issue Status</th>
                               <th class="text-danger">Approval Description</th>
                                 <!-- <th class="text-warning">Confirm</th> -->
                                    </tr>
                            </thead>
                            <tbody>
                              <?php if(count($posts)):?>
                                <?php foreach($posts as $post):?>
                              <tr>
                                  
                                 <td><?php echo $post->request_id;?></td>
                                <td><?php echo $post->requester_name;?></td>
                                <td><?php echo $post->plate_no; ?></td>
                                <td><?php echo $post->location;?></td>
                                <td><?php echo $post->issue;?></td>
                                <td class="text-primary"><?php echo $post->assigned_to;?></td>
                                <td class="text-primary"><?php echo $post->service_status;?></td>
                                <td class="text-danger"><?php echo $post->issue_status;?></td>
                                 <td class="text-danger"><?php echo $post->approval_description;?>
                                    <!-- <td> <?php echo anchor("Reception_C/service_assignment_fetch/{$post->request_id}",'<span class="fa fa-edit"></span>',['class'=>'btn btn-warning']);?></td>   -->       
                              </tr>
                            <?php endforeach;?>
                            <?php else: ?>
                              <tr>
                                <td>No Records Found!</td>
                              </tr>
                            <?php endif;?>
                            </tbody>
                          </table> 
                     </div>
                   </div>

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

    <!-- <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script> -->
<script type="text/javascript" src="<?php echo base_url().'assets/bootstrap4/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/DataTable/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/DataTable/js/dataTables.bootstrap4.js'?>"></script>

        <script>
            $('input[data-type="date"]').datetimepicker({
                format: 'YYYY-MM-DD'
            });

        </script>

        <script type="text/javascript">
            $(document).ready(function() {
           $('#tbluser').DataTable();
               } );
             </script>
  <script type="text/javascript">
       $(document).ready(function() {
          $('.delete_data').click(function()
           {
            var vehicledata=$(this).attr("id");
            if(confirm("Are you sure you want to delete this"))
                {
                   window.location="<?php echo base_url(); ?>Encoder_C/delete_vehicle_c/"+vehicledata;
                }     
                else
                {
                  return false;
                }  
              });
             }); 

           </script>
       
 

  </body>
</html>