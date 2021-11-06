
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
                                         <a class="dropdown-item" href="<?php echo base_url('Admin_C/Help')?>"><i class="fa fa-user"></i>Help</a>
                                         
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
               
              </div>
               <div class="row col-lg-12" style="background-color: grey;">
                    <p><h3><strong>
                      Admin Dashboard</strong></h3>
                    </p>
                  </div>
                  <hr>
    <div class="row col-lg-12">
        <div class="card text-white bg-primary col-lg-12">
            <div class="card-header"><h3><strong>List of Acronomy</strong></h3></div>
            <div class="card-body">
               <p>

The problem: Uneven tyre wear.
Recognise it: It may not be obvious when driving that your car’s tyres are unevenly worn, but worn tyres can be dangerous due to their reduced grip on the road. A quick check will tell you if your tyres are worn unevenly. The easiest way is to jack up your car and inspect each tyre individually, noting whether there are any bald spots on the inside or outside of the tyre, or whether there are any dips and dents in the tyre tread.
Fix it: Rotating your tyres and having your wheels aligned regularly.
In terms of how often you should get your tyres rotated, it’s different for every vehicle and type of tyre, but having them rotated at every oil change is a good rule of thumb. Check with the tyre manufacturer for a more specific time frame. Remember that the more often you rotate your tyres, the more evenly they’ll wear, and when you have the tyres rotated, you should also get them checked for balance and alignment.
 
 
The problem: Problems starting the engine.
Recognise it: Your car either takes a long time to start, or the car simply won’t start at all.
Fix it: There are a number of reasons which can cause a car engine not to start, the most common, of course, being a dead battery. Pay special attention to the noise it makes when you turn the key. Is the car completely silent? If so, there may be a problem with your battery terminal cable connections. Does your car crank over but not start? Then it may be your spark plugs or fuel supply to your engine. In any case, if you’re out on the road, try jumpstarting your car then investigating the cause further when you’re safely back at home.
 
The problem: Air conditioner not working.
Recognise it: Your air con will switch on, but you notice it’s just blowing room-temperature air around rather than cold air.
Fix it: The most likely cause of this is that there is no refrigerant left in your system. This could be caused by a leak in your system somewhere, which will have to be fixed before refilling the refrigerant. If you’re car-savvy and you own a set of air conditioning gauges, refilling the refrigerant is usually easy to do yourself. However, if you’re not so confident, enlist the help of a knowledgeable friend or take a quick trip to the mechanic.
 
The problem: Engine overheating.
Recognise it: You may notice steam or smoke coming from your bonnet, or the needle on your engine temperature gauge may be through the roof.
Fix it: Overheating can be caused by a few different factors. The simplest cause may be that your car needs more coolant. Yet depleted coolant can be caused by bigger problem, like leaks or faulty hoses, so always check for the underlying cause before simply filling it up with more. Another common reason for overheating may be that the radiator fan which keeps your engine cool is faulty, so check your fan motor connection and fan thermostat.
 
The problem: Noisy brakes.
Recognise it: You’ll know it when you hear it!
Fix it: There could be a number of reasons for noisy brakes. It could be that your brake pads are loose, worn out, or you may have brake dust inside the drum. If you can’t see anything wrong with your brake pads, and you suspect it may be brake dust, it may be best to leave this to a professional – brake dust can be extremely dangerous if accidentally inhaled.

Electrical problems 
Typical Problems
Most of the examples assume that you do not have anything other than a basic understanding of the circuit and your DMM. A few of the examples have been recreated based on problems I’ve had to troubleshoot in real time. I hope you find them enlightening!
• Circuit inoperable
• Circuit works, but blows fuses
• Wiring burned up
• Battery is drained overnight

</p>
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
