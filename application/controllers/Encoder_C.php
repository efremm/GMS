<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Encoder_C extends CI_Controller{
  function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
          $this->load->model('Encoder_M');
    }
      
       public  function Help(){
         $this->load->Model('Encoder_M');
          $posts=$this->Encoder_M->getTechHelp();
         $this->load->view('Encoder/ViewtechnicalHelp',['posts'=>$posts]);
           
          }
        public  function SystemHelp(){
         $this->load->Model('Encoder_M');
          $posts=$this->Encoder_M->getSystemHelp();
         $this->load->view('Encoder/SystemHelp',['posts'=>$posts]);
           
          }
	    public  function home(){
            $this->load->view('header');
             $this->load->Model('Encoder_M');
              $post["cnt_employee"]=$this->Encoder_M->count_employee(); 
             $post["cnt_driver"]=$this->Encoder_M->count_driver(); 
              $post["cnt_vehicle"]=$this->Encoder_M->count_vehicle(); 
            $this->load->view('Encoder/EncodersNavbar');
            $this->load->view('Encoder/sidebar',$post);
                     }
       
       
           public  function DriverDashboard(){
                $this->load->Model('Encoder_M');
              $posts=$this->Encoder_M->getDriverData();
              $this->load->view('Encoder/DriverManage' ,['posts'=>$posts]);
               }
	     public  function DriverReg(){
              $this->load->view('Encoder/DriverReg');
               }
  
     public  function additemform(){
            $this->load->view('header');
            $this->load->view('Encoder/EncodersNavbar');
            $this->load->view('Encoder/AddItemForm');
            $this->load->view('footer'); 
          }
          public  function memberregistration(){
            $this->load->view('header');
            $this->load->view('Encoder/EncodersNavbar');
            $this->load->view('Encoder/MemberRegistration');
            $this->load->view('footer'); 
          }
          //driver form
           public  function DriverRegistration(){
            $this->load->view('header');
            $this->load->view('Encoder/EncodersNavbar');
           //  $this->load->Model('Clip_Item_Reg');
           // $posts=$this->Clip_Item_Reg->getPosts();
           //  $this->load->view('Encoders/EncodersDashboard',['posts'=>$posts]);
            $this->load->view('Encoder/Driver_Registration');
            $this->load->view('footer'); 
          }
         
           public  function VehicleDashboard(){
         
                  $this->load->Model('VehicleData_M');
              $posts=$this->Encoder_M->getVehicleData();
            // $this->load->view('Encoders/CamDashboard',['posts'=>$posts]);
              $this->load->view('Encoder/VehicleDashboard' ,['posts'=>$posts]);
              }
               public  function VehicleReg(){
                    
              $this->load->view('Encoder/VehicleReg');
           
                }
                public  function MemberRegManage()
                     {
              $this->load->Model('Encoder_M');
              $posts=$this->Encoder_M->getMember();
              $this->load->view('Encoder/MemberRegManage' ,['posts'=>$posts]);
                  }
          public  function MemberReg(){
                    
              $this->load->view('Encoder/MemberReg');
           
                }
          function update_member_fetch($id)
             {
        $this->load->model('Encoder_M');
         $post["fetch_data"]=$this->Encoder_M->fetch_member_data($id);
         $this->load->view('Encoder/MemberUpdate',$post);
       
          }
          public function add_member() 
         {
     $this->load->Library('form_validation');
       $this->form_validation->set_rules("title","title",'required|min_length[2]');
        $this->form_validation->set_rules("firstname","FirstName",'required|alpha|min_length[2]');
        $this->form_validation->set_rules('middlename','Middle Name','required|alpha|min_length[2]');
        $this->form_validation->set_rules('lastname','Last Name','required|alpha|min_length[2]');
           $this->form_validation->set_rules('gender','gender','required|min_length[1]');
            $this->form_validation->set_rules('department','department','required|min_length[2]');
             $this->form_validation->set_rules('salary','salary','required|min_length[2]');
      
          // $this->form_validation->set_rules('registrationdate','registration date','required|min_length[10]|max_length[10]');
            $this->form_validation->set_rules('registrationdate','registration date','required|min_length[3]');
           $this->form_validation->set_rules('hireddate','hired date','required|min_length[2]|max_length[15]');
        
       if($this->form_validation->run()) 
        { 
              // valid form
            $this->load->model("Encoder_M");
        $data=array(
           "title" =>$this->input->post("title"),
            "first_name" =>$this->input->post("firstname"),
            "middle_name" =>$this->input->post("middlename"),"last_name" =>$this->input->post("lastname"),"gender" =>$this->input->post("gender"),"department" =>$this->input->post("department"),"salary" =>$this->input->post("salary"),"registration_date" =>$this->input->post("registrationdate"),"hired_date" =>$this->input->post("hireddate"));

              if($this->input->post("add"))
            {
            $this->Encoder_M->save_member_data($data);
              $this->session->set_flashdata('successmsg','successfully Registered!');
            redirect(base_url() . "Encoder_C/savedmember",'refresh');

           
              }
              else 
              {
                   $this->session->set_flashdata('errormsg','Failed to save');
                 $this->MemberReg();
                
              }
            }
              else{
                       $this->MemberReg();
                       }
      }
    
    function savedmember()
    {
     $this->MemberReg();
                
    } 
     public function AddDriver() 
         {
     $this->load->Library('form_validation');
       $this->form_validation->set_rules("licenceno","licence_no",'required|min_length[2]');
        $this->form_validation->set_rules("firstname","FirstName",'required|alpha|min_length[2]');
        $this->form_validation->set_rules('middlename','Middle Name','required|alpha|min_length[2]');
     $this->form_validation->set_rules('lastname','Last Name','required|alpha|min_length[2]');
           $this->form_validation->set_rules('gender','gender','required|min_length[1]');
            $this->form_validation->set_rules('licrenewaldt','renewal date','required|min_length[2]');
             $this->form_validation->set_rules('address','address','required|min_length[2]');
            $this->form_validation->set_rules('phoneno','phone no','required|min_length[10]');
           $this->form_validation->set_rules('hireddate','hired date','required|min_length[2]|max_length[15]');
        
       if($this->form_validation->run()) 
        { 
              // valid form
            $this->load->model("Encoder_M");
        $data=array(
          "licence_no" =>$this->input->post("licenceno"),
            "first_name" =>$this->input->post("firstname"),
            "middle_name" =>$this->input->post("middlename"),
            "last_name" =>$this->input->post("lastname"),
            "gender" =>$this->input->post("gender"),
            "licence_renewal_date" =>$this->input->post("licrenewaldt"),
            "address" =>$this->input->post("address"),
            "phone_no" =>$this->input->post("phoneno"),
            "hired_date" =>$this->input->post("hireddate"));

              if($this->input->post("add"))
            {
            $this->Encoder_M->save_driver_data($data);
              $this->session->set_flashdata('successmsg','successfully Registered!');
            redirect(base_url() . "Encoder_C/saveddriver",'refresh');

           
              }
              else 
              {
                   $this->session->set_flashdata('errormsg','Failed to save');
                 $this->DriverReg();
                
              }
            }
              else{
                       $this->DriverReg();
                       }
      }
    
    function saveddriver()
    {
     $this->DriverReg();
                
    } 
 
    function update_driver_fetch($id)
      {
        $this->load->model('Encoder_M');
      
         $post["fetch_data"]=$this->Encoder_M->fetch_driver_data($id);
        $this->load->view('Encoder/DriverUpdate',$post);
           
       }
     function update_vehicle_fetch($id)
      {
        $this->load->model('Encoder_M');
     
         $post["fetch_data"]=$this->Encoder_M->fetch_vehicle_data($id);
       
            $this->load->view('Encoder/VehicleUpdate',$post);
      
       }
     
    function delete_clip_c($clipid){
        // $id=$this->uri->segment(3);
        $this->load->model("Clip_Item_Reg");
        $this->Clip_Item_Reg->delete_clip_m($clipid);
        $this->session->set_flashdata('successmsg','Clip deleted successfully');
        redirect(base_url() . "Encoder_C/deleted");
        // redirect('Incoder_C/additemform',);  
    }
    public function deleted()
    {
      $this->incoderdashboard();  
    }

    public function update_member()
    {
        $this->load->model("Encoder_M");
         $this->load->Library('form_validation');
       $this->form_validation->set_rules("title","title",'required|min_length[2]');
        $this->form_validation->set_rules("firstname","FirstName",'required|alpha|min_length[2]');
        $this->form_validation->set_rules('middlename','Middle Name','required|alpha|min_length[2]');
        $this->form_validation->set_rules('lastname','Last Name','required|alpha|min_length[2]');
           $this->form_validation->set_rules('gender','gander','required|min_length[1]');
            $this->form_validation->set_rules('department','department','required|min_length[2]');
             $this->form_validation->set_rules('salary','salary','required|min_length[2]');
      
            $this->form_validation->set_rules('registrationdate','registration date','required|min_length[3]');
           $this->form_validation->set_rules('hireddate','hired date','required|min_length[2]|max_length[15]');
         if($this->form_validation->run()) 
              { 
              // valid form
            $this->load->model("Encoder_M");
        $data=array(
            "title" =>$this->input->post("title"),
            "first_name" =>$this->input->post("firstname"),
            "middle_name" =>$this->input->post("middlename"),"last_name" =>$this->input->post("lastname"),"gender" =>$this->input->post("gender"),"department" =>$this->input->post("department"),"salary" =>$this->input->post("salary"),"registration_date" =>$this->input->post("registrationdate"),"hired_date" =>$this->input->post("hireddate"));
        if($this->input->post("update"))
        {
            $this->Encoder_M->update_member($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "Encoder_C/updatedmember",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to update');
           $this->MemberRegManage();
          
        }
      }
        else
        {
           $this->MemberRegManage();
        }
       
    }
    function updatedmember()
    {
        $this->MemberRegManage();
    }
   public function update_driver()
    {
        $this->load->model("Encoder_M");
         $this->load->Library('form_validation');
        $this->form_validation->set_rules("licenceno","licenceno",'required|min_length[2]');
        $this->form_validation->set_rules("firstname","FirstName",'required|alpha|min_length[2]');
        $this->form_validation->set_rules('middlename','Middle Name','required|alpha|min_length[2]');
        $this->form_validation->set_rules('lastname','Last Name','required|alpha|min_length[2]');
        $this->form_validation->set_rules('gender','gender','required|min_length[1]');
       $this->form_validation->set_rules('licencerenewaldate','licence renewal date','required|min_length[2]');
       $this->form_validation->set_rules('address','address','required|min_length[3]');
        $this->form_validation->set_rules('phoneno','phone no','required|min_length[2]|max_length[15]');
            $this->form_validation->set_rules('hireddate','hireddate','required|min_length[3]');
         if($this->form_validation->run()) 
              { 
              // valid form
            $this->load->model("Encoder_M");
        $data=array(
           "licence_no" =>$this->input->post("licenceno"),
            "first_name" =>$this->input->post("firstname"),
            "middle_name" =>$this->input->post("middlename"),
            "last_name" =>$this->input->post("lastname"),
            "gender" =>$this->input->post("gender"),
            "licence_renewal_date" =>$this->input->post("licencerenewaldate"),
            "address" =>$this->input->post("address"),
            "phone_no" =>$this->input->post("phoneno"),
            "hired_date" =>$this->input->post("hireddate"),

             "licence_renewal_date" =>$this->input->post("licencerenewaldate"),
            "address" =>$this->input->post("address"),
            "phone_no" =>$this->input->post("phoneno"),
            "hired_date" =>$this->input->post("hireddate"));
        if($this->input->post("update"))
        {
            $this->Encoder_M->update_driver($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "Encoder_C/updateddriver",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to update');
           $this->DriverDashboard();
          
        }
      }
        else
        {
           $this->DriverDashboard();
        }
       
    }
   
    function updateddriver()
    {
        $this->DriverDashboard();
    } 
     public function update_vehicle()
    {
        $this->load->model("Encoder_M");
        $this->load->Library('form_validation');
         $this->form_validation->set_rules("plateno","plate no",'required|min_length[2]');
        $this->form_validation->set_rules("vihiclefactory","Vehicle Factory",'required|min_length[2]');
        // $this->form_validation->set_rules("model","Model",'required|alpha|min_length[2]');

         $this->form_validation->set_rules("model","Model",'required|min_length[2]');
        $this->form_validation->set_rules('yearmadein','Year Made','required|min_length[2]');
        $this->form_validation->set_rules('chassinumber','Chassi_Number','required|min_length[2]');
           $this->form_validation->set_rules('madein','Made In','required|min_length[1]');
            $this->form_validation->set_rules('fueltype','Fuel Type','required|min_length[2]');
             $this->form_validation->set_rules('motornumber','Motor Number','required|min_length[2]');
         $this->form_validation->set_rules('libre','Libre','required|min_length[2]');
           $this->form_validation->set_rules('freeduty','Free_Duty','required|min_length[2]|max_length[15]');
           $this->form_validation->set_rules('vehiclecondition','Vehicle Condition','required|min_length[1]');
            $this->form_validation->set_rules('odometer','Odometer','required|min_length[2]');
             $this->form_validation->set_rules('numtyres','Number of Tyre','required|min_length[1]');
      
          $this->form_validation->set_rules('loadingcapacity','Loading Capacity','required|min_length[1]');
           $this->form_validation->set_rules('insurencerenwal','insurancerenewal_Date','required|min_length[2]|max_length[15]');
       
        $this->form_validation->set_rules('odometer','Odometer','required|min_length[2]');
         $this->form_validation->set_rules('numtyres','Number of Tyre','required|min_length[1]');
        $this->form_validation->set_rules('loadingcapacity','Loading Capacity','required|min_length[1]');
       $this->form_validation->set_rules('insurencerenwal','insurancerenewal_Date','required|min_length[2]|max_length[15]');
         if($this->form_validation->run()) 
              { 
              // valid form
            $this->load->model("Encoder_M");
        $data=array(
                 "plate_no" =>$this->input->post("plateno"),
                 "vehicle_factory" =>$this->input->post("vihiclefactory"),
                  "model" =>$this->input->post("model"),
                  "year_made" =>$this->input->post("yearmadein"),
                  "chassi_number" =>$this->input->post("chassinumber"),
                  "made_in" =>$this->input->post("madein"),
                  "motor_number" =>$this->input->post("motornumber"), 
                    "libre" =>$this->input->post("libre"),
                     "fuel_type" =>$this->input->post("fueltype"),
                    "free_duty" =>$this->input->post("freeduty"),

                    "vehicle_condition" =>$this->input->post("vehiclecondition"),
                    "odometer" =>$this->input->post("odometer"), 
                     "number_of_tyre" =>$this->input->post("numtyres"),
                      "loading_capacity" =>$this->input->post("loadingcapacity"),
                      "insurance_renewal_date" =>$this->input->post("insurencerenwal"),
                     "registered_by" =>$this->input->post("registered_by"), 
                   

                     "assigned_by" =>$this->input->post("assigned_by"),
                      "vehicle_status" =>$this->input->post("vehicle_status"),
                        "assigned_date" =>$this->input->post("assigned_date"),
                      "assigned_to_driver" =>$this->input->post("assigned_to_driver")
                    );
        if($this->input->post("update"))
        {
            $this->Encoder_M->update_vehicle($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "Encoder_C/updatedvehicle",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to update');
           $this->VehicleDashboard();
          
        }
      }
        else
        {
           $this->VehicleDashboard();
        }
       
    }
   
    function updatedvehicle()
    {
        $this->VehicleDashboard();
    }  
    //data start
    public function AddVehicle() 
        {
     $this->load->Library('form_validation');
   
     $this->load->Library('form_validation');
      $this->form_validation->set_rules("plateno","plateno",'required|min_length[2]');
        $this->form_validation->set_rules("vihiclefactory","Vehicle Factory",'required|min_length[2]');
        $this->form_validation->set_rules("model","Model",'required|alpha|min_length[2]');
        $this->form_validation->set_rules('yearmadein','Year Made','required|min_length[2]');
        $this->form_validation->set_rules('chassinumber','Chassi_Number','required|alpha|min_length[2]');
           $this->form_validation->set_rules('madein','Made In','required|min_length[1]');
            $this->form_validation->set_rules('fueltype','Fuel Type','required|min_length[2]');
             $this->form_validation->set_rules('motornumber','Motor Number','required|min_length[2]');
         $this->form_validation->set_rules('libre','Libre','required|min_length[2]');
           $this->form_validation->set_rules('freeduty','Free_Duty','required|min_length[2]|max_length[15]');
           $this->form_validation->set_rules('vehiclecondition','Vehicle Condition','required|min_length[1]');
            $this->form_validation->set_rules('odometer','Odometer','required|min_length[2]');
             $this->form_validation->set_rules('numtyres','Number of Tyre','required|min_length[1]');
      
          $this->form_validation->set_rules('loadingcapacity','Loading Capacity','required|min_length[1]');
           $this->form_validation->set_rules('insurencerenwal','insurancerenewal_Date','required|min_length[2]|max_length[15]');
       
       
       if($this->form_validation->run()) 
        { 
              // valid form
        
            $this->load->Model("Encoder_M");
        $data=array(
                 "plate_no" =>$this->input->post("plateno"),
                 "vehicle_factory" =>$this->input->post("vihiclefactory"),
                  "model" =>$this->input->post("model"),
                  "year_made" =>$this->input->post("yearmadein"),
                  "chassi_number" =>$this->input->post("chassinumber"),
                  "made_in" =>$this->input->post("madein"),
                  "fuel_type" =>$this->input->post("fueltype"),
                  "motor_number" =>$this->input->post("motornumber"), 
                    "libre" =>$this->input->post("libre"),
                    "free_duty" =>$this->input->post("freeduty"),
                    "vehicle_condition" =>$this->input->post("vehiclecondition"),
                    "odometer" =>$this->input->post("odometer"), 
                     "number_of_tyre" =>$this->input->post("numtyres"),
                      "loading_capacity" =>$this->input->post("loadingcapacity"),
                      "insurance_renewal_date" =>$this->input->post("insurencerenwal"));

           if($this->input->post("add"))
            {
            $this->Encoder_M->save_vehicle_data($data);
              $this->session->set_flashdata('successmsg','successfully Registered!');
            redirect(base_url() . "Encoder_C/savevhcl",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to save');
           $this->VehicleReg();
          
        }
      }
        else{
                 $this->VehicleReg();
                 }
              
            }
     function savevhcl()
      {
        $this->VehicleReg();
      }
      //confirm 
     
   
     function delete_driver_c($driverid){
        // $id=$this->uri->segment(3);
        $this->load->model("Encoder_M");
        $this->Encoder_M->delete_driver_m($driverid);
        $this->session->set_flashdata('successmsg','deleted successfully');
        redirect(base_url() . "Encoder_C/deleted_driver_redirect");
       }

       function delete_vehicle_c($vehicleid){
        // $id=$this->uri->segment(3);
        $this->load->model("Encoder_M");
        $this->Encoder_M->delete_vehicle_m($vehicleid);
        $this->session->set_flashdata('successmsg','deleted successfully');
        redirect(base_url() . "Encoder_C/deleted_vehicle_redirect");
       }
    public function deleted_vehicle_redirect()
    {
      $this->VehicleDashboard();  
    }
     public function deleted_driver_redirect()
    {
      $this->DriverDashboard();  
    }
    function delete_member_c($memberid){
        // $id=$this->uri->segment(3);
        $this->load->model("Encoder_M");
        $this->Encoder_M->delete_member_m($memberid);
        $this->session->set_flashdata('successmsg','deleted successfully');
        redirect(base_url() . "Encoder_C/deleted_member_redirect");
        
    }
    public function deleted_member_redirect()
    {
      $this->MemberRegManage();  
    }
}
?>