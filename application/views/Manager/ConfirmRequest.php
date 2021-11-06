
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
            <h2 class="text-info">GMS</h2><span>@AAPC</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong class="text-primary">GMS</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
           <li><a  href="<?php echo base_url('Manager_C/ManagerDashboard')?>"> <i class="fa fa-home"></i>Home  </a></li>
               
          <li> <a class="fa fa-bus" href="<?php echo base_url('Manager_C/RequestApproveManage')?>"><i class=""></i>Help Request Approval</a></li>
           <li> <a class="fa fa-bus" href="<?php echo base_url('Manager_C/ViewTechnicalHelp')?>"><i class=""></i>Help</a></li>
            
          </ul>
        </div>
        <div class="admin-menu">
          <h5 class="sidenav-heading"><hr></h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
                  <li><a  href="<?php echo base_url('Authentication/logout')?>"><i class="fa fa-power-off"></i>Logout</a></li>
     
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
                                         <a class="dropdown-item" href="<?php echo base_url('Driver_C/ViewTechHelp')?>"><i class="fa fa-user"></i>Help</a>
                                         
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
              <form   method="post" action="<?php echo base_url()?>Manager_C/update_request">
                 <div class="container row">
                  <div class="col-lg-12"> <h4 style="font-family: sans-serif;">Edit Service Data</h4></div>
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
                        <label for="requestername">Requester Name</label>
                        <input  type="text" class="form-control bg-success text-danger" id="requestername" name="requestername" placeholder="requestername"  autofocus readonly value="<?php echo $this->session->userdata('username');?>" readonly>
                        <span class="text-danger"><?php echo form_error("requestername"); ?></span>
                    </div>
                 <div class="form-label-group col-lg-4">
                        <label for="plateno">Plate No</label>
                        <input  type="text" class="form-control" id="plateno" name="plateno" placeholder="plateno"  value="<?php echo $row->plate_no; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("plateno"); ?></span>
                    </div>
                   
                    <div class="form-label-group col-lg-4">
                        <label for="location">Loaction</label>
                        <input  type="text" class="form-control" id="location" name="location" placeholder="location" value="<?php echo $row->location; ?>"  autofocus readonly>
                        <span class="text-danger"><?php echo form_error("location"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="issue">Issue</label>
                        <input  type="text" class="form-control" id="issue" name="issue" placeholder="issue" value="<?php echo $row->issue; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("issue"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="requestdate">Requested Date</label>
                        <input  type="text" class="form-control" id="requestdate" name="requestdate" placeholder="requestdate" value="<?php echo $row->requested_date; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("requestdate"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                       <label for="uploadimage"> Vehicle Image</label>
                          <input type="file" id="uploadimage" name="uploadimage" value="<?php echo $row->vehicle_image; ?>"/>
                      <span class="text-danger"><?php echo form_error("requestdate"); ?></span>
                     </div> 
                   
                    <!--  <div class="form-label-group col-lg-4">
                        <label for="uploadimage">upload image</label>
                        <input  type="text" class="form-control" id="uploadimage" name="uploadimage" placeholder="uploadimage" value="<?php echo $row->vehicle_image; ?>" autofocus>
                        <span class="text-danger"><?php echo form_error("uploadimage"); ?></span>
                    </div> -->
                   
                 <!-- approval part -->
                <!--   
                 <div class="form-label-group col-lg-4">
                        <label for="issue_status">issue_status</label>
                        <input  type="text" class="form-control text-danger" id="issue_status" name="issue_status" placeholder="issue_status"  value="<?php echo $row->issue_status; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("issue_status"); ?></span>
                    </div> -->
                     <div class="form-label-group col-lg-4" >
                        <label for="issue_status">issue_status</label>
                        <select class="form-control text-success" id="issue_status" name="issue_status" >
                             <option >-select issue_status-</option>
                            <option value="Seen">Seen</option>
                            <option value="Unseen">Unseen</option>
                            <option value="Suspend">Suspend</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("issue_status"); ?></span>
                    </div>

                    <div class="form-label-group col-lg-4">
                        <label for="approval_description">approval_description</label>
                        <textarea  type="text" class="form-control text-danger" id="approval_description" name="approval_description" placeholder="approval_description" value="<?php echo $row->approval_description; ?>"  autofocus ></textarea>
                        <span class="text-danger"><?php echo form_error("approval_description"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="service_status">service_status</label>
                        <input  type="text" class="form-control text-danger" id="service_status" name="service_status" placeholder="service_status" value="<?php echo $row->service_status; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("service_status"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="assigned_to">assigned_to</label>
                        <input  type="text" class="form-control text-danger" id="assigned_to" name="assigned_to" placeholder="assigned_to" value="<?php echo $row->assigned_to; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("assigned_to"); ?></span>
                    </div>
               
                      <div class="form-label-group col-lg-4">
                        <label for="assigned_date">assigned_date</label>
                        <input  type="text" class="form-control  text-danger" id="assigned_date" name="assigned_date" placeholder="assigned_date" value="<?php echo $row->assigned_date; ?>" autofocus readonly>
                        <span class="text-danger"><?php echo form_error("assigned_date"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="approved_by">approved_by</label>
                        <input  type="text" class="form-control text-danger" id="approved_by" name="approved_by" placeholder="approved_by" value="<?php echo $row->approved_by; ?>" autofocus readonly> 
                        <span class="text-danger"><?php echo form_error("approved_by"); ?></span>
                    </div>
     
                            <div class="form-group col-lg-12">
                         <input type="hidden" name="hidden_id" value="<?php  echo $row->request_id;?>" required>
                        <input type="submit" value="Update" class="btn btn-info" name="update"/>

                            <?php echo anchor('Manager_C/ManagerDashboard','Back',['class'=>'btn btn-defualt']);?>
                               
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