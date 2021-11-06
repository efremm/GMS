  <!--  <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row"> -->
            <!--body vehicle reg-->
             
   
   <form   method="post" action="<?php echo base_url('Encoder_C/insert')?>" >
        <div class="container row">
       <!--  -->
       <div class="col-lg-12"> <h4 style="font-family: sans-serif;">Vehicl Registration</h4></div>
             <div class="container  " style="background-color: green;">
           
                    <?php 
                    if($this->uri->segment(2) == "saved_redirect")
                    {
                    
                echo '<p class="text-success">successfully saved</p>'; 
                    }
                    ?>
                 </div>
             
                        
                  <div class="form-label-group col-lg-4">
                            <label for="plateno">Plate Number</label>
                            <input type="text" class="form-control" id="plateno" name="plateno" placeholder="Insert Plate Number"   autofocus>
                            <span class="text-danger"><?php echo form_error("plateno"); ?></span>
                        </div>
             
                    <div class="form-label-group col-lg-4">
                        <label for="vihicle_factory">Vehicle Factory</label>
                        <input type="text" class="form-control" id="vihicle_factory" name="vihicle_factory" placeholder="Insert vihicle factory"  autofocus>
                        <span class="text-danger"><?php echo form_error("vihicle_factory"); ?></span>
                    </div>
                 
                    <div class="form-label-group col-lg-4">
                        <label for="model">Model</label>
                        <input type="text" class="form-control" id="model" name="model" placeholder="Model"  autofocus>
                        <span class="text-danger"><?php echo form_error("model"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="year_made_in">Year Made In</label>
                        <input  data-type="date" class="form-control" id="year_made_in" name="year_made_in" placeholder="year_made_in"  autofocus>
                        <span class="text-danger"><?php echo form_error("year_made_in"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="chassi_number">Chassi Number</label>
                        <input type="text" class="form-control" id="chassi_number" name="chassi_number" placeholder="chassi_number"  autofocus>
                        <span class="text-danger"><?php echo form_error("chassi_number"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="madein">Made In</label>
                        <select class="form-control" id="madein" name="madein">
                            <option value="">-select made in-</option>
                            <option value="Afganistan">Afganistan</option>
                            <option value="Angola">Angola</option>
                             <option value="Argentina">Argentina</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("madein"); ?></span>
                    </div>
        
                    <div class="form-label-group col-lg-4">
                        <label for="fuil_type">Fuel Type</label>
                        <input type="text" class="form-control" id="fuil_type" name="fuil_type" placeholder="fuil_type"  autofocus>
                        <span class="text-danger"><?php echo form_error("fuil_type"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="motor_number">Motor Number</label>
                        <input type="text" class="form-control" id="motor_number" name="motor_number" placeholder="motor_number"  autofocus>
                        <span class="text-danger"><?php echo form_error("motor_number"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="libre">Libre</label>
                        <input type="text" class="form-control" id="libre" name="libre" placeholder="libre"  autofocus>
                        <span class="text-danger"><?php echo form_error("libre"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="libre_payment_year">Libre Payment Year</label>
                        <input type="text" class="form-control" id="libre_payment_year" name="libre_payment_year" placeholder="libre_payment_year"  autofocus>
                        <span class="text-danger"><?php echo form_error("libre_payment_year"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="free_duty">Free Duty</label>
                        <select class="form-control" id="free_duty" name="free_duty">
                            <option>-select free duty-</option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <span class="text-danger"><?php echo form_error("vihicle_factory"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="vhcl_condition">Condition</label>
                        <input type="text" class="form-control" id="vhcl_condition" name="vhcl_condition" placeholder="vhcl_condition"  autofocus>
                         <span class="text-danger"><?php echo form_error("vhcl_condition"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="audometer">Audometer</label>
                        <input type="text" class="form-control" id="audometer" name="audometer" placeholder="audometer"  autofocus>
                        <span class="text-danger"><?php echo form_error("audometer"); ?></span>
                    </div>
                     <div class="form-label-group col-lg-4">
                        <label for="num_tyres">Number of Tyers</label>
                        <input type="text" class="form-control" id="num_tyres" name="num_tyres" placeholder="num_tyres"  autofocus>
                        <span class="text-danger"><?php echo form_error("num_tyres"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="insur_type">Insurence of Type</label>
                        <input type="text" class="form-control" id="insur_type" name="insur_type" placeholder="insur_type"  autofocus>
                        <span class="text-danger"><?php echo form_error("insur_type"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="loading_capacity">Loading Capacity</label>
                        <input type="text" class="form-control" id="loading_capacity" name="loading_capacity" placeholder="loading_capacity"  autofocus>
                        <span class="text-danger"><?php echo form_error("loading_capacity"); ?></span>
                    </div>
                    <div class="form-label-group col-lg-4">
                        <label for="insurence_renwal">Insurence Renewal Date</label>
                        <input type="text" class="form-control" id="insurence_renwal" name="insurence_renwal" placeholder="insurence_renwal"  autofocus>
                        <span class="text-danger"><?php echo form_error("insurence_renwal"); ?></span>
                    </div>
                    
                          <div class="form-group col-lg-12">
                      
                            <button type="submit" class="btn btn-primary mb-2" name="add">Submit</button>

                             <?php echo anchor('Encoder_C/VehicleDashboard','Back',['class'=>'btn btn-defualt']);?>
                              
                          </div>
                   </div>
                 </form>
   
 <!--   </div>
</div>
</section> -->