   <section class="dashboard-counts section-padding">
        <div class="container">
          <div class="row">
            <!--body vehicle reg-->

  

   <!--  <div class="row col-lg-12">
        <section class="container py-4">
        <div class="row"> -->
            
                <br>
                
                     
                   <?php echo anchor('Encoder_C/Vehicleregform','Add Vehicle',['class'=>'btn btn-primary']);?>
          
                        <!-- <table class="table table-striped" id="tblclip"> -->
                         <!--  <table id="tblvhcl" name="tblvhcl" class="table table-striped table-bordered" style="width:100%"> -->
                          <table id="tblvhcl" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                              <tr>
                                <!-- <th >Cam Data ID</th> -->
                                <th >Plate Number</th>
                                <th >Vehicle Factory</th>
                                 <th>Model</th>
                                <th >Year Made In</th>
                                <th >Chassi Number</th>
                                <th >Made In</th>
                                <th >Fuel Type</th>
                                <th >Motor Number</th>
                                <!-- <th>View</th> -->
                                <th>Update</th>
                                <th>Delete</th>
                                    </tr>
                            </thead>
                            <tbody>
                              <?php if(count($posts)):?>
                                <?php foreach($posts as $post):?>
                              <tr>
                                <!-- <td><?php echo $post->Cam_Data_ID;?></td> -->
                                <td><?php echo $post->Vehicle_Factory; ?></td>
                                <td><?php echo $post->Model;?></td>
                                <td><?php echo $post->Year_Made;?></td>
                                <td><?php echo $post->Chassi_Number;?></td>
                                <td><?php echo $post->Made_In;?></td>
                                <td><?php echo $post->Fuel_Type;?></td>
                                <td><?php echo $post->Motor_Number;?></td>
                                <td><?php echo $post->Libre;?></td>
                           
                              <td> <?php echo anchor("Encoder_C/update_vehicledata_fetch/{$post->Plate_No}",'<span class="fa fa-edit"></span>',['class'=>'btn btn-info']);?></td>
                              
                              <td> <a class="delete_data btn btn-danger" href="#" id="<?php echo $post->Plate_No; ?>"><span class="fa fa-trash"></span></a> </td>

                              </tr>
                            <?php endforeach;?>
                            <?php else: ?>
                              <tr>
                                <td>No Records Found!</td>
                              </tr>
                            <?php endif;?>
                            </tbody>
                          </table> 
                    
                  
            <!-- </div> -->
       <!--  </div>
    </section>
      

    </div> -->
 
      <script src="<?php echo base_url(); ?>assets/DataTable/js/jquery-3.3.1.js"></script>
      <script src="<?php echo base_url(); ?>assets/DataTable/js/jquery.dataTables.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/DataTable/js/dataTables.bootstrap4.min.js"></script>

       <script type="text/javascript">
          $(document).ready(function() {
            $('#tblvhcl').DataTable();
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
            var camdataid=$(this).attr("id");
            if(confirm("Are you sure you want to delete this"))
                {
                   window.location="<?php echo base_url(); ?>Encoder_C/delete_vehicledata_c/"+plateno;
                }     
                else
                {
                  return false;
                }  
              });
             }); 

           </script>
   

          </div>
        </div>
      </section>