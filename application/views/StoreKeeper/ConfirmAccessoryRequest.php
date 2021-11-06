
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
            <h2 class="h5">EFPC</h2><span class="text-info">@AAPC</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center"> <strong>B</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
           <li><a  href="<?php echo base_url('StoreKeeper_C/StoreKeeperDashboard')?>"> <i class="fa fa-home"></i>Home  </a></li>

          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/AccessoryManage')?>"><i class=""></i>Accessory Registration</a></li>
           
          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/VehicleAssignment')?>"><i class=""></i>Vehicle Assignment</a></li>
          <li> <a class="fa fa-bus" href="<?php echo base_url('StoreKeeper_C/AccessoryConfirmManage')?>"><i class=""></i>Approve Accessory </a></li>  
            
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
              <form   method="post" action="<?php echo base_url()?>StoreKeeper_C/update_accessory_confirm">
                 <div class="container row">
                  <div class="col-lg-12"> <h4 style="font-family: sans-serif;">Edit Accessory Data</h4></div>
                        <hr>
                          <div class="col-lg-12" style="background-color: green">
                      <?php if($scsmsg = $this->session->flashdata('successmsg'));?>
                     <?php echo $scsmsg; ?></div>
                        <div class="col-lg-12" style="background-color: red">
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
                        <label for="item_id">Item ID</label>
                        <input  type="text" class="form-control text-danger bg-success" id="item_id" name="item_id" placeholder="item_id"  autofocus readonly value="<?php echo $row->item_id; ?>"  readonly>
                        <span class="text-danger"><?php echo form_error("itemid"); ?></span>
                    </div>
                  <div class="form-label-group col-lg-4">
                        <label for="receivevoucno">Receive Vouc No</label>
                        <input  type="text" class="form-control" id="receivevoucno" name="receivevoucno" placeholder="receivevoucno"  autofocus readonly value="<?php echo $row->receive_vouc_no; ?>" >
                        <span class="text-danger"><?php echo form_error("receivevoucno"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="supplier">Supplier</label>
                        <input  type="text" class="form-control  text-danger" id="supplier" name="supplier" placeholder="supplier"  value="<?php echo $row->supplier; ?>" autofocus readonly >
                        <span class="text-danger"><?php echo form_error("supplier"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="store_receiver">Store Receiver</label>
                        <input  type="text" class="form-control bg-success" id="storereceiver" name="storereceiver" placeholder="storereceiver"  style="colour:blue" autofocus readonly
                         value="<?php echo $row->store_receiver; ?>"
                          >
                        <span class="text-danger"><?php echo form_error("storereceiver"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="partno">part no</label>
                        <input  type="text" class="form-control" id="partno" name="partno" placeholder="partno"  style="colour:blue" autofocus readonly value="<?php echo $row->unit_price; ?>"  >
                        <span class="text-danger"><?php echo form_error("partno"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="unitprice">Unit Price</label>
                        <input  type="text" class="form-control" id="unitprice" name="unitprice" placeholder="unitprice"  autofocus readonly  value="<?php echo $row->unit_price; ?>" >
                        <span class="text-danger"><?php echo form_error("unitprice"); ?></span>
                    </div>
                      <div class="form-label-group col-lg-4">
                        <label for="availablequantity">Available Quantity</label>
                        <input  type="text" class="form-control" id="availablequantity" name="availablequantity" placeholder="availablequantity"  autofocus readonly value="<?php echo $row->available_quantity; ?>" >
                        <span class="text-danger"><?php echo form_error("availablequantity"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="receiveddate">Received Date</label>
                        <input  type="text" class="form-control" id="receiveddate" name="receiveddate" placeholder="receiveddate"  autofocus readonly readonly value="<?php echo $row->received_date; ?>" >
                        <span class="text-danger"><?php echo form_error("receiveddate"); ?></span>
                    </div>

                      <div class="col-lg-12"><h2 class="text-warning bg-danger">Requester Part</h2></div>
                  
                    <div class="form-label-group col-lg-4">
                        <label for="requestername">Requester Name</label>
                        <input  type="text" class="form-control text-danger bg-success" id="requestername" name="requestername" placeholder="requestername"  style="colour:blue" autofocus readonly  
                        value="<?php echo $row->requester_name; ?>">
                        <span class="text-danger"><?php echo form_error("requestername"); ?></span>
                    </div>
                      
                   
                     <div class="form-label-group col-lg-4">
                        <label for="requiredquantity">Required quantity</label>
                        <input  type="text" class="form-control" id="requiredquantity" name="requiredquantity" placeholder="requiredquantity"  style="colour:blue" autofocus readonly value="<?php echo $row->required_quantity; ?>">
                        <span class="text-danger"><?php echo form_error("requiredquantity"); ?></span>
                    </div>

                    <div class="form-label-group col-lg-4">
                        <label for="requesteddate">Requested Date</label>
                        <input  type="text" class="form-control" id="requesteddate" name="requesteddate" placeholder="requesteddate"  autofocus  readonly value="<?php echo $row->requested_date; ?>">
                        <span class="text-danger"><?php echo form_error("requesteddate"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="serviceno">Service_NO</label>
                        <input  type="text" class="form-control" id="serviceno" name="serviceno" placeholder="serviceno"  readonly autofocus  value="<?php echo $row->service_no; ?>">
                        <span class="text-danger"><?php echo form_error("serviceno"); ?></span>
                    </div>

                     <div class="col-lg-12"><h2 class="text-warning bg-info">Approver Part</h2></div>

                     <div class="form-label-group col-lg-4" >
                        <label for="approval_status">approval_status</label>
                        <select class="form-control text-success"  id="approval_status" name="approval_status" >
                             <option >-select approval_status-</option>
                            <option value="Confirm">Confirm</option>
                            <option value="Suspend">Suspend</option>
                            <option value="Unseen">Unseen</option>
                             <option value="Unconfirmed">Unconfirmed</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("approval_status"); ?></span>
                    </div>
                      
                     <div class="form-label-group col-lg-4">
                        <label for="approver_name">approver_name</label>
                        <input  type="text" class="form-control text-danger" id="approver_name" 
                        name="approver_name" placeholder="approver_name" 
                         style="colour:blue" autofocus readonly  
                            value="<?php echo $this->session->userdata('username');?>" >
                        <span class="text-danger"><?php echo form_error("approver_name"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="approved_date">approved_date</label>
                        <input  type="date" class="form-control" id="approved_date" name="approved_date" placeholder="approved_date"  autofocus value="<?php echo $row->requested_date; ?>">
                        <span class="text-danger"><?php echo form_error("approved_date"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="approvedquantity">approved_quantity</label>
                        <input  type="text" class="form-control" id="approvedquantity" name="approvedquantity" placeholder="approvedquantity"  autofocus value="<?php echo $row->approved_quantity; ?>">
                        <span class="text-danger"><?php echo form_error("approvedquantity"); ?></span>
                    </div>
     
                    <div class="form-group col-lg-12">
                         <input type="hidden" name="hidden_id" value="<?php  echo $row->item_id;?>" required>
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