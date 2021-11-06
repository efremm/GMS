
<?php 
$system_name = $this->db->get_where('gms_global_data', array('type' => 'SystemName'))->row()->remark;
$system_title = $this->db->get_where('gms_global_data', array('type' => 'SystemTitle'))->row()->remark;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- <title>Login CodeIgniter</title> -->
  <script type="text/javascript" src="<?php echo base_url('assets/bootstrap4/js/bootstrap.js');?>"></script>
   <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.3.1.js');?>"></script>
   
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap4/css/bootstrap.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap4/css/bootstrap-grid.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/custom_file/float_lib.css'); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/fontawesome5.6.3/css/all.css'?>">
      <link rel="icon" href="<?php echo base_url(); ?>images/logo2.png" type="image/x-icon"/>
        <title><?php echo $system_name; ?></title>
  </head>
   <body>
    <style type="text/css">
          .bgimg {
            background-image: url('../images/bg1.jpg');
        }
     </style>
     <style type="text/css">
                ticks: {
          precision:0
        }
      </style>

<div class="container bgimg" style="">
 
  <div class="row">
      <div class="d-flex  container justify-content-center align-items-center pad">
          <h1><span class="fa fa-key text-warning">Login Form for AAPC GMS</span></h1>
      </div>

     <div class="card  bg-light"  >
        <div class="" id="loginform">
         <?php
        if ($this->session->flashdata('notcreated'))
        {
            echo "<div class='alert alert-success'>".$this->session->flashdata('notcreated')."</div>";
        }
        ?>
        </div>
     </div>
     <div class="col-lg-4 container justify-content-center align-items-center" >
     <div class="px-0 ">
         
            <img src="<?php echo base_url('/images/logo2.png'); ?>" class="img-fluid rounded-circle" style="padding-bottom:0.5rem;padding-left: 5rem;padding-right: 5rem;" >
        </div>
    </div>
  </div>
    <div class="row">
    <div class="container d-flex  justify-content-center align-items-center" >

     <form method="post" action="<?php echo site_url('Authentication/login');?>">

      <div class="form-row col-lg-12">
         <!-- <?php echo $this->session->set_userdata('KEY',' $username');?> -->

        <div class="form-label-group col-lg-12">
      <!-- <?php $value= $this->session->userdata('username'); ?> -->
          <input type="text" class="form-control" id="username" name="username" placeholder="user name" required autofocus >

              <label for="username"  class="fa fa-user">User Name</label>

        </div>
        <div class=" form-label-group col-lg-12">
             <input type="password" class="form-control" id="password"  name="password" placeholder="Password" required autofocus>
             <label for="password" class="fa fa-key">Password</label>
        </div>
      </div>
       <div class="row">
        <div class="col-lg-6">
          <button type="submit" class="btn btn-success mb-2"><span class="fa fa-user">Login</span></button>
        </div>
         <div class="col-lg-6">
            <!-- <li><span class=" text-danger"><i class="fas fa-circle-notch fa-spin"></i></span> 
                    <a  class="nav-link active" href="<?php echo base_url('Authentication/LoginIndex')?>"><i class="fa fa-user"></i>Forgot Password</a>
            </li>  -->
            <!-- value="<?php echo $this->session->userdata('username');?>" -->
          <button type="submit"  class="btn btn-warning mb-2">
          <a  class="nav-link active"  value="<?php echo $this->session->userdata('username');?>"  href="<?php echo base_url('Authentication/ForgotPasswordLink')?>"><i class="fa fa-plus"></i>Forgot Password</a>
        </button>
        </div>
         <!-- <li><a href="<?php echo base_url('Admin_C/AdminDashboard')?>"> 
          <i class="fa fa-home"></i>Forgot Password  </a></li> -->

        </div>
         <?php echo validation_errors('<p class="text-danger">','</p>')?>
        </form>
    </div>

    </div>
  </div>
  <script> 
        setTimeout(function() {
            $('#loginform').hide('fast');
        }, 2000);
    </script>


