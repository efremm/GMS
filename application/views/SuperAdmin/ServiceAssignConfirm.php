
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
        <li><a  href="<?php echo base_url('Reception_C/ReceptionDashboard')?>"> <i class="fa fa-home"></i>Home  </a></li>
                
          <li> <a class="fa fa-bus" href="<?php echo base_url('Reception_C/ServiceAssignDashboard')?>"><i class=""></i>Assign Technician</a></li>

          <li> <a class="fa fa-bus" href="<?php echo base_url('Reception_C/ServiceRequestDashboard')?>"><i class=""></i>View Detail Service</a></li>
     
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
           <form   method="post" action="<?php echo base_url()?>Reception_C/UpdateAssignService">
               <div class="container row">
                  <div class="col-lg-12"> <h2 style="font-family: sans-serif;background-color: silver">Assign Service</h2></div>
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
                        <label for="requestid">request_id</label>
                        <input  type="text" class="form-control bg-warning text-danger"  id="requestid" name="requestid" placeholder="requestid"  value="<?php echo $row->request_id; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("requestid"); ?></span>
                    </div>
                 <div class="form-label-group col-lg-4">
                        <label for="requestername">Requester Name</label>
                        <input  type="text" class="form-control bg-success text-danger" id="requestername" name="requestername" placeholder="requestername"  autofocus value="<?php echo $row->requester_name; ?>" readonly>
                        <span class="text-danger"><?php echo form_error("requestername"); ?></span>
                    </div>
                 <div class="form-label-group col-lg-4">
                        <label for="plateno">Plate No</label>
                        <input  type="text" class="form-control bg-warning text-danger" id="plateno" name="plateno" placeholder="plateno"  value="<?php echo $row->plate_no; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("plateno"); ?></span>
                    </div>
                   
                    <div class="form-label-group col-lg-4">
                        <label for="location">Loaction</label>
                        <input  type="text" class="form-control bg-warning text-danger" id="location" name="location" placeholder="location" value="<?php echo $row->location; ?>"  autofocus readonly>
                        <span class="text-danger"><?php echo form_error("location"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="issue">Issue</label>
                        <input  type="text" class="form-control bg-warning text-danger" id="issue" name="issue" placeholder="issue" value="<?php echo $row->issue; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("issue"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="requestdate">Requested Date</label>
                        <input  type="text" class="form-control bg-warning text-danger" id="requestdate" name="requestdate" placeholder="requestdate" value="<?php echo $row->requested_date; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("requestdate"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4 hidden" >
                       <label for="uploadimage">Issu Type</label>
                     <input  class="bg-warning text-danger" type="text" id="uploadimage" name="uploadimage" size="33" value="<?php echo $row->vehicle_image; ?>" autofocus readonly>
                     <span class="text-danger"><?php echo form_error("uploadimage"); ?></span>
                     </div> 

                      <div class="form-label-group col-lg-4 hidden" >
                       <label for="issuestatus">Issu Type</label>
                     <input  class="bg-warning text-danger" type="text" id="issuestatus" name="issuestatus" size="33" value="<?php echo $row->issue_status; ?>" autofocus readonly>
                     <span class="text-danger"><?php echo form_error("issuestatus"); ?></span>
                     </div> 
                      <div class="form-label-group col-lg-4 hidden" >
                       <label for="approvaldescription">Issu Type</label>
                     <input  class="bg-warning text-danger" type="text" id="approvaldescription" name="approvaldescription" size="33" value="<?php echo $row->approval_description; ?>" autofocus readonly>
                     <span class="text-danger"><?php echo form_error("approvaldescription"); ?></span>
                     </div> 

                      </hr>
                 <div class="col-lg-12"><span class="fa fa-user">Approval Part</span><hr></hr></div>
                 
                    <div class="form-label-group col-lg-4" readonly>
                        <label for="servicestatus">Service Ststus</label>
                        <select class="form-control text-danger" id="servicestatus" name="servicestatus" >
                            
                            <option class="text-danger" value="<?php echo $row->service_status; ?>"><?php echo $row->service_status; ?></option>
                            <option class="text-success" value="Assigned">Assigned</option>
                            <option class="text-success" value="Suspend">Suspend</option>
                             <option class="text-success" value="Done">Done</option>
                            <option class="text-success" value="Onprogress">Onprogress</option>

                        </select>
                        <span class="text-danger"><?php echo form_error("servicestatus"); ?></span>
                    </div>
                      <div class="form-label-group col-lg-4" readonly>
                        <label for="assignedto">Assigned To</label>
                        <select class="form-control text-danger" id="assignedto" name="assignedto" >
                            
                            <option class="text-danger" value="<?php echo $row->issue_status; ?>"><?php echo $row->assigned_to; ?></option>
                            <option class="text-success" value="Team1">Team1</option>
                            <option class="text-success" value="Team2">Team2</option>
                             <option class="text-success" value="Team3">Team3</option>
                             <option class="text-success" value="Team4">Team4</option>
                            <option class="text-success" value="Team5">Team5</option>
                             <option class="text-success" value="Team6">Team6</option>

                        </select>
                        <span class="text-danger"><?php echo form_error("assignedto"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="assigneddate">Assigned Date</label>
                        <input  type="date" class="form-control" id="assigneddate" name="assigneddate" placeholder="assigneddate" value="<?php echo $row->assigned_date; ?>" autofocus>
                        <span class="text-danger"><?php echo form_error("assigneddate"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="approvername">Approver Name</label>
                        <input  type="text" class="form-control bg-success text-danger" id="approvername" name="approvername" placeholder="approvername"  autofocus value="<?php echo $this->session->userdata('username');?>" readonly>
                        <span class="text-danger"><?php echo form_error("approvername"); ?></span>
                    </div>
                   
                            <div class="form-group col-lg-12">
                         <input type="hidden" name="hidden_id" value="<?php  echo $row->request_id;?>" required>
                        <input type="submit" value="Update" class="btn btn-info" name="update"/>

                            <?php echo anchor('Reception_C/ReceptionDashboard','Back',['class'=>'btn btn-defualt']);?>
                               
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