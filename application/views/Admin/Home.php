
<div class="container">
           
   
                  <div class="float-right">
                         <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                                         <a class="dropdown-item" href="<?php echo base_url('Encoder_C/Help')?>"><i class="fa fa-user"></i>Help</a>
                                         
                                          <a class="dropdown-item" href="<?php echo base_url('Authentication/logout')?>"><i class="fa fa-power-off"></i>Logout</a>
                                           <!-- <?php echo form_close() ?> -->
                                           
                                         
                                            </div>
                                </li>
                            </ul>
                          </div>
                         </nav>
                      </div>
                   
    </div>
    <div class="row col-lg-12" style="background-color: grey;">
                    <p><h3><strong>
                     StoreKeeper Dashboard</strong></h3>
                    </p>
                  </div>
                  <hr>
     <div class="col-lg-12 " style="background-color: green;">
                <?php if($scsmsg = $this->session->flashdata('successmsg'));?>
               <?php echo $scsmsg; ?>
                    <?php if($errmsg = $this->session->flashdata('errormsg'));?>
               <?php echo $errmsg; ?>
                 </div>
    <div class="row col-lg-12">
        <div class="card text-white bg-primary col-lg-3">
            <div class="card-header">Accessory Profile</div>
            <div class="card-body">
                <h4 class="card-title">Accessory Detail</h4>
              <!-- <input  class="text" value="<?php echo $post;?>" /> -->
              <!-- <td><?php echo $post->user_id;?></td> -->
            </div>
        </div>
        <div class="card text-white bg-primary col-lg-3">
            <div class="card-header">maintenance Information</div>
            <div class="card-body">
                <h4 class="card-title">accessory Detail</h4>
               
            </div>
        </div>
      
      <div class="card text-white bg-primary col-lg-3">
            <div class="card-header">accessory Recorded</div>
            <div class="card-body">
                <h4 class="card-title">accessory Detail</h4>
               
            </div>
        </div>
         </div>
                    
      
      

    </div>
   <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bootstrap4/js/bootstrap.min.js"></script>


   <script type="text/javascript" src="<?php echo base_url().'assets/DropDown/1.12.4.ajax/jquery-.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/DropDown/2.15.1.ajaxjs/moment.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/DropDown/4.7.14.ajaxjs/bootstrap-datetimepicker.min.js'?>"></script>
 <link rel="stylesheet" href="<?php echo base_url().'assets/DropDown/4.7.14css/bootstrap-datetimepicker.min.css'?>"> 

        <script>
            $('input[data-type="date"]').datetimepicker({
                format: 'YYYY-MM-DD'
            });

        </script>
