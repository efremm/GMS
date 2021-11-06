<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GMS</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
     

      <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTable/css/twitter-bootstrap.4.1.css'?>">
       <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTable/css/dataTables.bootstrap4.min.css'?>">

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
            <h2 class="h5">EFPC</h2><span>@AAPC</span>
          </div>
          <!-- appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
           <li><a  href="<?php echo base_url('StoreKeeper_C/StoreKeeperDashboard')?>"> <i class="fa fa-home"></i>Home  </a></li>

          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/AccessoryManage')?>"><i class=""></i>Accessory Registration</a></li>
           
          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/VehicleAssignment')?>"><i class=""></i>Vehicle Assignment</a></li>
          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/VehicleAssignment')?>"><i class=""></i>Approve Accessory </a></li>
            
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Second menu</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
           
     
                  <li><a href="login.html"> <i class="icon-interface-windows"></i>Logout   
             </a></li>
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
                  <div class="brand-text d-none d-md-inline-block"><span>Vehicle Servic </span><strong class="text-primary">Managment System</strong></div></a></div>
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
            <!-- <div class="cintainer"> -->
                   <table id="tblaccessory" class="table table-striped table-bordered" style="width:100%">
                      <!-- <table id="tbl" name="tblcamera" class="table table-striped table-bordered" style="width:100%"> -->
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
         
        </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
  <!-- </div> -->
          </div>
        </div>
      </section>
      
    
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Your company &copy; 2019-20</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="" class="external">Me</a></p>
             
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="<?php echo base_url(); ?>assets/DataTable/js/jquery-3.3.1.js"></script>
      <script src="<?php echo base_url(); ?>assets/DataTable/js/jquery.dataTables.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/DataTable/js/dataTables.bootstrap4.min.js"></script>

      <!-- <script src="<?php echo base_url(); ?>assets/sidemenu/jquery/jquery.min.js"></script> -->
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
    <script type="text/javascript">
          $(document).ready(function() {
            $('#tblaccessory').DataTable();
        } );
                   
  </script>
        <script>
            $('input[data-type="date"]').datetimepicker({
                format: 'YYYY-MM-DD'
            });

        </script>

       

        <script type="text/javascript">
       $(document).ready(function() {
          $('.delete_data').click(function()
           {
            var clipid=$(this).attr("id");
            if(confirm("Are you sure you want to delete this"))
                {
                   window.location="<?php echo base_url(); ?>Encoder_C/delete_clip_c/"+clipid;
                }     
                else
                {
                  return false;
                }  
              });
             }); 

           </script>
