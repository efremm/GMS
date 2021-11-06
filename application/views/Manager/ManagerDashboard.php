
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
         <hr>
          <ul id="side-admin-menu" class="side-menu list-unstyled"> 
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
                  <div class="brand-text d-none d-md-inline-block "><span class="text-primary"><strong>AAPC Garage&nbsp;</strong></span><strong class="text-primary">Managment&nbsp;System  </strong></div>
                </a></div>
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
                                         <a class="dropdown-item" href="<?php echo base_url('Manager_C/ViewTechnicalHelp')?>"><i class="fa fa-user"></i>Help</a>
                                         
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
      <!-- to remove barchart decimal point -->
      <style type="text/css">
                ticks: {
          precision:0
        }
      </style>
      <!-- Counts Section -->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
          <div class="row">
            <!-- body-->
            <div class="row col-lg-12 text-info" style="background-color: silver;">
                    <p><h3 class=""><strong>
                      Manager Dashboard</strong></h3>
                    </p>
                  </div>
                  <hr>
              <!--start  chart -->
                      <div class="col-md-8">
                            <div class="card ">
                                   <div class="card-body ">
                                    <div id="chart_status" style="width: 600px; height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-4">
                            <div class="card ">
                                   <div class="card-body ">
                                    <div id="chart_type" style="width: 500px; height: 300px;"></div>
                                </div>
                            </div>
                        </div>
                     <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">Total Service</strong>
                   <div class="count-number text-primary"><?php echo $cnt_service;?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Total Accessory</strong>  
                  <div class="count-number text-primary"><?php echo $cnt_accessory;?></div>
                </div>
              </div>
            </div>
           
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Total Request Accessory</strong> <div class="count-number text-primary"><?php echo $cnt_request_accessory;?></div>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">Total Employee</strong><!-- <span class="text-danger"><?php echo $cnt_employee?></span> -->
                   <!-- <td class="text-danger"><?php echo $printll;?></td> -->
                   <!-- <td class="text-danger"><?php echo $cnt_employee;?></td>  -->
                  <div class="count-number text-primary"><?php echo $cnt_employee;?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">Total Driver</strong>
                  <div class="count-number text-primary"><?php echo $cnt_driver;?></div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list"></i></div>
                <div class="name"><strong class="text-uppercase">Total Vehicle</strong><div class="count-number text-primary"><?php echo $cnt_vehicle;?></div>
                </div>
              </div>
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

  
      <!-- chart start -->
   <script src="<?php echo base_url(); ?>assets/charts/loader.js"></script>

    
              <script type="text/javascript">
                   // Load the Visualization API and the corechart package.
                        google.charts.load('current', {'packages':['corechart']});

                        // Set a callback to run when the Google Visualization API is loaded.
                        google.charts.setOnLoadCallback(drawChart);

                        // Callback that creates and populates a data table,
                        // instantiates the pie chart, passes in the data and
                        // draws it.
                        function drawChart() {
                             
                          // Create the data table.
                          var data = new google.visualization.DataTable();
                          data.addColumn('string', 'gender');
                          data.addColumn('number', 'total_gender');

                          data.addRows([
                                <?php
                                    foreach ($charttype as $v)
                                    {
                                       echo "['".$v['gender']."', ".$v['total_member']."],";
                                    }
                                    ?>
                          ]);

                          // Set chart options
                          var options = {'title':'Employee by gender',
                                         'width':300,
                                         'height':300};

                          // Instantiate and draw our chart, passing in some options.
                          var chart = new google.visualization.PieChart(document.getElementById('chart_type'));
                          chart.draw(data, options);
                        }
                        //chart  for user status
                      
                      
            </script>
            <script type="text/javascript">
                google.charts.load('current', {'packages':['corechart']});
                 google.charts.setOnLoadCallback(drawChart);
                function drawChart() {
                             
                          // Create the data table.
                          var data = new google.visualization.DataTable();
                          data.addColumn('string', 'department');
                          data.addColumn('number', 'members');
                          data.addRows([
                                <?php
                                    foreach ($chartstatus as $v)
                                    {
                                       echo "['".$v['department']."', ".$v['total_member']."],";
                                    }
                                    ?>
                          ]);

                          // Set chart options
                          var options = {'title':'All Employee by Department',
                                         'width':500,
                                         'height':300};

                          // Instantiate and draw our chart, passing in some options.
                          var chart = new google.visualization.ColumnChart(document.getElementById('chart_status'));
                          chart.draw(data, options);
                        }
            </script>  
 

  </body>
</html>