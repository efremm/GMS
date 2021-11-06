<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
// require_once (APPPATH.'core/Custom_Controller.php');
 class Technician_C extends CI_Controller{

   function __construct()
    {
         parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->model('Technician_M');
           $this->load->model('StoreKeeper_M');
               
    }
   
     public  function Help(){

           
            $this->load->view('header');
            $this->load->view('Admin/AdminNavbar');
           
            $this->load->view('Admin/Help');
            $this->load->view('footer'); 
           

          }
    public  function TechnicianDashboard(){
              $post["cnt_employee"]=$this->Technician_M->count_employee(); 
             $post["cnt_driver"]=$this->Technician_M->count_driver(); 
              $post["cnt_vehicle"]=$this->Technician_M->count_vehicle(); 
              $post["cnt_service"]=$this->Technician_M->count_service(); 
             $post["cnt_accessory"]=$this->Technician_M->count_accessory(); 
              $post["cnt_request_accessory"]=$this->Technician_M->count_requested_accessory(); 
          $this->load->view('Technician/TechnicianDashboard',$post);
                  

          }
            public  function AccessoryRequestManage(){
                 $this->load->Model('Technician_M');
           $posts=$this->Technician_M->getAccessory();    
              $this->load->view('Technician/AccessoryRequestManage',['posts'=>$posts]);
             // $this->load->view('footer'); 
          }
           public  function AccessoryRequest($id){
                 $this->load->Model('Technician_M');
           // $posts=$this->Technician_M->fetch_request_accessory($id); 
            $posts["fetch_data"]=$this->Technician_M->fetch_request_accessory($id);   
              $this->load->view('Technician/AccessoryRequest',$posts);
             // $this->load->view('footer'); 
          }
           public  function ServiceDetailRegManage(){
           
            $this->load->Model('Technician_M');
           $posts=$this->Technician_M->getService();
            $this->load->view('Technician/VehicleServiceManage',['posts'=>$posts]);
            // $this->load->view('footer'); 
          }
           function service_detail_fetch($id)
            {
        
     
         $post["fetch_data"]=$this->Reception_M->fetch_vehicleassign_data($id);
         // $post["fetch_data_drop"]=$this->Reception_M->fetch_dropdown_drivers();
            $this->load->view('Reception/ServiceAssignConfirm',$post);
      
        }
          public  function ViewStatus(){
           
            $this->load->Model('Driver_M');
           $posts=$this->Driver_M->getRequest();
            $this->load->view('Driver/ViewVhclStatus',['posts'=>$posts]);
            // $this->load->view('footer'); 
          }
      
        public function DriverRequestReg(){
    	  
            $this->load->view('Driver/RequestReg');
             }
         function RequestAccessory($id)
           { 
        // $this->load->model('Technician_M');
          // $post["fetch_data"]=$this->Technician_M->fetch_request_accessory($id);
            // $this->load->view('Technician/RequestAccessory',$post);
            $this->load->view('Technician/RequestAccessory');
          }
          
       
           public  function ServiceDetailReg(){
               // $this->load->model('StoreKeeper_M');
              $post["fetch_data_drop"]=$this->Technician_M->fetch_dropdown_member();
            $this->load->view('Technician/TechnicianRegDetail',$post);
                    }


     public function SendAccessoryRequest() 
        {
      $this->load->Library('form_validation');
       
         $this->form_validation->set_rules("requestername","requestername",'required|min_length[2]');
         $this->form_validation->set_rules("requiredquantity","requiredquantity",'required|min_length[1]');
        $this->form_validation->set_rules("requesteddate","requesteddate",'required|min_length[2]');
         $this->form_validation->set_rules('serviceno','serviceno','required|min_length[2]');
     
             
       if($this->form_validation->run()) 
        { 
          
             $this->load->model("Technician_M");                       
        $data=array(
            "receive_vouc_no" =>$this->input->post("receivevoucno"),
            "supplier" =>$this->input->post("supplier"),
            "store_receiver" =>$this->input->post("storereceiver"),
            "part_no" =>$this->input->post("partno"),
            "unit_price" =>$this->input->post("unitprice"),
            "available_quantity" =>$this->input->post("availablequantity"),
            "received_date" =>$this->input->post("receiveddate"),

           "requester_name" =>$this->input->post("requestername"),
            "required_quantity" =>$this->input->post("requiredquantity"),
            "requested_date" =>$this->input->post("availablequantity"),
            "service_no" =>$this->input->post("serviceno"),

          "approval_status" =>$this->input->post("approval_status"),
            "approver_name" =>$this->input->post("approver_name"),
            "approved_date" =>$this->input->post("approved_date"),
            "approved_quantity" =>$this->input->post("approved_quantity"));
            if($this->input->post("update"))
             {
            $this->Technician_M->update_accessory_request($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "Technician_C/supdatedreqaccessory",'refresh');
             }

            else 
            {
                 $this->session->set_flashdata('errormsg','Failed to save');
               $this->AccessoryRequestManage();
              
            }
           
          }
           else{
                  $this->AccessoryRequestManage();
                 }
       // }
       //          else
       //          {
       //           $this->DriverRequestReg();
       //          }

     
      }
       function supdatedreqaccessory()
       {
         $this->AccessoryRequestManage(); 
        }
    
         public function SendRequest() 
        {
     $this->load->Library('form_validation');
     // start image upload
        $this->load->model("Technician_M");
   

      $this->form_validation->set_rules("requestername","requestername",'required|min_length[2]');
        $this->form_validation->set_rules('receivevoucno','receivevoucno','required|min_length[2]');
         $this->form_validation->set_rules('plateno','plateno','required|min_length[2]');
         $this->form_validation->set_rules("requiredquantity","requiredquantity",'required|min_length[1]');
        $this->form_validation->set_rules("requesteddate","requesteddate",'required|min_length[2]');
         $this->form_validation->set_rules('serviceno','serviceno','required|min_length[2]');
             

       if($this->form_validation->run()) 
        { 
          
                                 
        $data=array(
            "requester_name" =>$this->input->post("requestername"),
            "receive_vouc_no" =>$this->input->post("receivevoucno"),
            "plate_no" =>$this->input->post("plateno"),
              "required_quantity" =>$this->input->post("requiredquantity"),
            "requested_date" =>$this->input->post("requesteddate"),
             "service_no" =>$this->input->post("serviceno"));
              
                  // "vehicle_image"=>$image_path);
           if($this->input->post("add"))
             {
            $this->Technician_M->save_request_accessory($data);
              $this->session->set_flashdata('successmsg','successfully Registered!');
            redirect(base_url() . "Technician_C/savedrequest",'refresh');
          
               
            }

            else 
            {
                 $this->session->set_flashdata('errormsg','Failed to save');
               $this->ServiceDetailReg();
              
            }
           
          }
           else{
                  $this->ServiceDetailReg();
                 }
       // }
       //          else
       //          {
       //           $this->DriverRequestReg();
       //          }

     
      }
       function savedrequest()
       {
         $this->ServiceDetailReg(); 
        }
        public function SubmitServiceDetail() 
        {
     $this->load->Library('form_validation');
        $this->form_validation->set_rules("plateno","plateno",'required|min_length[2]');
        $this->form_validation->set_rules('serviceno','serviceno','required|min_length[2]');
        $this->form_validation->set_rules('mainproblem','mainproblem','required|min_length[2]');
           // $this->form_validation->set_rules('unitprice','unitprice','alpha|required|min_length[3]');
        $this->form_validation->set_rules('assignedto','assignedto','required|min_length[2]');
            $this->form_validation->set_rules('servicetype','servicetype','required|min_length[1]');
             $this->form_validation->set_rules('maintainedpart','maintainedpart','required|min_length[3]');
              
       if($this->form_validation->run()) 
        { 
              // valid form
            $this->load->model("Technician_M");
        $data=array(
            "plate_no" =>$this->input->post("plateno"),
            "service_no" =>$this->input->post("serviceno"),"main_problem" =>$this->input->post("mainproblem"),"assigned_to" =>$this->input->post("assignedto"),"service_type" =>$this->input->post("servicetype"),"maintained_part" =>$this->input->post("maintainedpart"));
                 
           if($this->input->post("add"))
            {
            $this->Technician_M->save_service_detail($data);
              $this->session->set_flashdata('successmsg','successfully Registered!');
            redirect(base_url() . "Technician_C/saved",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to save');
           $this->ServiceDetailReg();
          
        }
      }
        else{
                 $this->ServiceDetailReg();
                 }

             
      }
       function saved()
    {
        $this->ServiceDetailReg(); 
    }
    // public function update_request()
    // {
    //    $this->form_validation->set_rules("requestername","requestername",'required|min_length[2]');
    //      $this->form_validation->set_rules('plateno','plateno','required|min_length[2]');
    //     $this->form_validation->set_rules('location','location','required|min_length[2]');
    //      $this->form_validation->set_rules("issue","issue",'required|min_length[2]');
    //     $this->form_validation->set_rules("requestdate","requestdate",'required|min_length[2]');
    //      $this->form_validation->set_rules('uploadimage','uploadimage','required|min_length[2]');
    //      if($this->form_validation->run()) 
    //           { 
    //               $this->load->model("Driver_M");
    //      $data=array("requester_name" =>$this->input->post("requestername"),
    //         "plate_no" =>$this->input->post("plateno"),
    //           "location" =>$this->input->post("location"),
    //            "issue" =>$this->input->post("issue"),
    //         "requested_date" =>$this->input->post("requestdate"),
    //          "vehicle_image" =>$this->input->post("uploadimage"));
    //     if($this->input->post("update"))
    //     {
    //         $this->Driver_M->update_request($data,$this->input->post("hidden_id"));
    //           $this->session->set_flashdata('successmsg','updated successfully');
    //         redirect(base_url() . "Driver_C/updatedrequest",'refresh');

           
    //     }
    //     else 
    //     {
    //          $this->session->set_flashdata('errormsg','Failed to update');
    //        $this->RequestRegManage();
          
    //     }
    //   }
    //     else
    //     {
    //        $this->RequestRegManage();
    //     }
       
    // }
    // function updatedrequest()
    // {
    //     $this->RequestRegManage();
    // }
    
	function delete_service_c($requestid){
      
        $this->load->model("Technician_M");
        $this->Technician_M->delete_service_m($requestid);
        $this->session->set_flashdata('successmsg','user data deleted successfully');
        redirect(base_url() . "Technician_C/ServiceDetailRegManage");
        
    }
    public function deleted_request_redirect()
    {
      $this->RequestRegManage();  
    }
    public  function ViewTechHelp(){
              $this->load->Model('Driver_M');
           $posts=$this->Driver_M->getTechHelp();
                   $this->load->view('Driver/ViewTechHelp',['posts'=>$posts]);
          }
}
?>