
<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.min.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/buttons.dataTables.min.css'?>">
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
                                         <a class="dropdown-item" href="<?php echo base_url("Encoder_C/home")?>"><i class="fa fa-home"></i>Home</a>
                                         
                                          <a class="dropdown-item" href="<?php echo base_url('Authentication/logout')?>"><i class="fa fa-power-off"></i>Logout</a>
                                           <!-- <?php echo form_close() ?> -->
                                           
                                         
                                            </div>
                                </li>
                            </ul>
                          </div>
                         </nav>
                      </div>
                   
    </div>
  
      <div class="col-lg-12 " style="background-color: green;">
                      <?php if($scsmsg = $this->session->flashdata('successmsg'));?>
                     <?php echo $scsmsg; ?>
                          <?php if($errmsg = $this->session->flashdata('errormsg'));?>
                     <?php echo $errmsg; ?>
                 </div>
    <div class="row col-lg-12">
        <section class="container py-4">
        <div class="row">
            <div class="col-md-12">
             
                <ul id="tabsJustified" class="nav nav-tabs">
                    <li class="nav-item"><a href="" data-target="#home1" data-toggle="tab" class="nav-link small text-uppercase active">Reg</a></li>
                   <!--  <li class="nav-item"><a href="" data-target="#profile1" data-toggle="tab" class="nav-link small text-uppercase">Associate StakeHolders</a></li>
                    <li class="nav-item"><a href="" data-target="#messages1" data-toggle="tab" class="nav-link small text-uppercase">Committee Decison</a></li> -->
                </ul>
                <br>
                <div id="tabsJustifiedContent" class="tab-content">

                    <div id="home1" class="tab-pane fade active show">
                     
                   <?php echo anchor('Incoder_C/additemform','Add Clip',['class'=>'btn btn-primary']);?>
          
                        <!-- <table class="table table-striped" id="tblclip"> -->
                          <table id="tblclip" name="tblclip" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <th >#</th>
                                <th >FullName</th>
                                <th >Music_Type</th>
                                <th >Language</th>
                                <th >Date Racieved</th>
                                <th >Raciever Name</th>
                                <th >Org pone no</th>
                                <th>View</th>
                                <th>Update</th>
                                <th>Delete</th>
                                    </tr>
                            </thead>
                            <tbody>
                              <?php if(count($posts)):?>
                                <?php foreach($posts as $post):?>
                              <tr>
                                <?php $v_fname=$post->first_name;
                                $v_mname=$post->middle_name; 
                                $v_lname=$post->last_name; 
                                 ?>
                                <td><?php echo $post->item_clip_id;?></td>
                                <td><?php echo $v_fname." ".$v_mname." ".$v_lname ?></td>
                                <td><?php echo $post->music_type;?></td>
                                <td><?php echo $post->music_language;?></td>
                                <td><?php echo $post->date_received;?></td>
                                <td><?php echo $post->receiver_name;?></td>
                                <td><?php echo $post->org_phone_no;?></td>
                               <td><?php echo anchor("Encoder_C/view_clip_c/{$post->item_clip_id}",'<span class="fa fa-eye"></span>',['class'=>'btn btn-success ' ]);?></td>
                              <td> <?php echo anchor("Encoder_C/update_clip_fetch/{$post->item_clip_id}",'<span class="fa fa-edit"></span>',['class'=>'btn btn-info']);?></td>
                              
                              <td> <a class="delete_data btn btn-danger" href="#" id="<?php echo $post->item_clip_id; ?>"><span class="fa fa-trash"></span></a> </td>

                             <!--  <?php echo anchor("Encoder_C/delete_clip_c/{$post->item_clip_id}",'Delete',['class'=>'btn btn-danger']);?> -->
                             <!-- </td> -->
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
                   <!--  <div id="profile1" class="tab-pane fade ">
                        <div class="row pb-2">
                            <div class="col-md-7">
                                  <table class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First</th>
                                        <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                      </tr>
                                      <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </div>
                            <div class="col-md-5"><img src="//dummyimage.com/1005x559.png/5fa2dd/ffffff" class="float-right img-fluid img-rounded"></div>
                        </div>
                    </div>
                    <div id="messages1" class="tab-pane fade">
                        <div class="list-group"><a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">44</span> Message 1</a> <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">8</span> Message 2</a>                            <a href="" class="list-group-item d-inline-block"><span class="float-right badge badge-pill badge-dark">23</span> Message 3</a> <a href="" class="list-group-item d-inline-block text-muted">Message n..</a></div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
      

    </div>

  
           <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.3.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/bootstrap4/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/DataTable/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/DataTable/js/dataTables.bootstrap4.js'?>"></script>

       
       <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.buttons.min.js'?>"></script>

<script type="text/javascript" src="<?php echo base_url().'assets/js/buttons.flash.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jszip.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/pdfmake.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/vfs_fonts.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/buttons.html5.min.js'?>"></script>   
<script type="text/javascript" src="<?php echo base_url().'assets/js/buttons.print.min.js'?>"></script>  

 <script type="text/javascript">
$(document).ready(function() {
    $('#tbll').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5',
            'print'
        ]
    } );
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
                   window.location="<?php echo base_url(); ?>Incoder_C/delete_clip_c/"+clipid;
                }     
                else
                {
                  return false;
                }  
              });
             }); 

           </script>
   