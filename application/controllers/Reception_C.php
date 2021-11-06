<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Reception_C extends CI_Controller{
	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('Driver_M');
         $this->load->model('Reception_M');
     }
      
       
	    public  function Help(){
              $this->load->Model('Driver_M');
           $posts=$this->Driver_M->getTechHelp();
                   $this->load->view('Reception/ViewTechnicalHelp',['posts'=>$posts]);
          }
            public  function ReceptionDashboard(){
               $post["cnt_employee"]=$this->Reception_M->count_employee(); 
             $post["cnt_driver"]=$this->Reception_M->count_driver(); 
              $post["cnt_vehicle"]=$this->Reception_M->count_vehicle(); 
                     
              $this->load->view('Reception/ReceptionDashboard',$post);
             // $this->load->view('footer'); 
          }
          public  function ServiceAssignDashboard(){
                    $posts=$this->Reception_M->getRequest();    
              $this->load->view('Reception/VehicleServiceDashboard',['posts'=>$posts]);
             // $this->load->view('footer'); 
          }
            public  function ServiceRequestDashboard(){
                    $posts=$this->Reception_M->getServiceDetail();    
              $this->load->view('Reception/ServiceRequestDashboard',['posts'=>$posts]);
             // $this->load->view('footer'); 
          }
	           function service_assignment_fetch($id)
            {
           
         $post["fetch_data"]=$this->Reception_M->fetch_vehicleassign_data($id);
         // $post["fetch_data_drop"]=$this->Reception_M->fetch_dropdown_drivers();
            $this->load->view('Reception/ServiceAssignConfirm',$post);
      
        }

            public  function VehicleAssignment(){
               
           $posts=$this->Reception_M->getVehicle();    
              $this->load->view('StoreKeeper/VehicleAssignDashboard',['posts'=>$posts]);
             // $this->load->view('footer'); 
          }
       
           public  function AccessoryReg(){
            
            $this->load->view('StoreKeeper/AccessoryRegForm');
                    }
          //cam data reg controller form
          public  function AccessoryManage(){
              $this->load->Model('StoreKeeper_M');
           $posts=$this->StoreKeeper_M->getPosts();
             $this->load->view('StoreKeeper/ManageAccessory',['posts'=>$posts]);
                     }
          //view request in incoder 
 
      public function AssignVehicle() 
        {
     $this->load->Library('form_validation');
        $this->form_validation->set_rules('drivername','drivername','required|min_length[2]');
        $this->form_validation->set_rules("plateno","plateno",'required|min_length[2]');
        $this->form_validation->set_rules('assigneddate','assigneddate','required|min_length[2]');
           
              
       if($this->form_validation->run()) 
        { 
              // valid form
            $this->load->model("StoreKeeper_M");
        $data=array(
            "driver_id" =>$this->input->post("drivername"),
            "Plate_No" =>$this->input->post("plateno"),
            "assigned_date" =>$this->input->post("assigneddate"));
     
           if($this->input->post("add"))
            {
            $this->StoreKeeper_M->save_vhcl_assign($data);
              $this->session->set_flashdata('successmsg','successfully Registered!');
            redirect(base_url() . "StoreKeeper_C/saveassign",'refresh');
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to save');
           $this->service_assignment_fetch();
          
        }
      }
        else{
                 $this->service_assignment_fetch();
                 }

             
      }
       function saveassign()
    {
        $this->service_assignment_fetch(); 
    }
     function FetchUpdateAccessory($id)
           { 
        $this->load->model('StoreKeeper_M');
          $post["fetch_data"]=$this->StoreKeeper_M->fetch_accessory_data($id);
            $this->load->view('StoreKeeper/AccessoryEdit',$post);
          }

   

    function delete_accessory_c($accessoryid){
        // $id=$this->uri->segment(3);
        $this->load->model("StoreKeeper_M");
        $this->StoreKeeper_M->delete_accessory_m($accessoryid);
        $this->session->set_flashdata('successmsg','deleted successfully!');
        redirect(base_url() . "StoreKeeper_C/deleted");
        // redirect('Incoder_C/additemform',);
        
    }
    public function deleted()
    {
      $this->AccessoryManage();  
    }
    public function UpdateAssignService()
    {
        // $this->form_validation->set_rules("requestername","requestername",'required|min_length[2]');
        //  $this->form_validation->set_rules('plateno','plateno','required|min_length[2]');
        // $this->form_validation->set_rules('location','location','required|min_length[2]');
        //  $this->form_validation->set_rules("issue","issue",'required|min_length[2]');
        // $this->form_validation->set_rules("requestdate","requestdate",'required|min_length[2]');
        //  $this->form_validation->set_rules('uploadimage','uploadimage','required|min_length[2]');

        //   $this->form_validation->set_rules("issuestatus","issuestatus",'required|min_length[2]');
        //  $this->form_validation->set_rules('approvaldescription','approvaldescription','required|min_length[2]');

         $this->form_validation->set_rules("servicestatus","servicestatus",'required|min_length[2]');
        $this->form_validation->set_rules("assignedto","assignedto",'required|min_length[2]');
         $this->form_validation->set_rules('assigneddate','assigneddate','required|min_length[2]');

         if($this->form_validation->run()) 
              { 
                  $this->load->model("Reception_M");
         $data=array(
            "requester_name" =>$this->input->post("requestername"),
            "plate_no" =>$this->input->post("plateno"),
              "location" =>$this->input->post("location"),
               "issue" =>$this->input->post("issue"),
            "requested_date" =>$this->input->post("requestdate"),
             "vehicle_image" =>$this->input->post("uploadimage"),

              "issue_status" =>$this->input->post("issuestatus"),
             "approval_description" =>$this->input->post("approvaldescription"),

             "service_status" =>$this->input->post("servicestatus"),
            "assigned_to" =>$this->input->post("assignedto"),
             "assigned_date" =>$this->input->post("assigneddate"));

        if($this->input->post("update"))
        {
            $this->Reception_M->update_service($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "Reception_C/updatedservice",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to update');
           $this->ServiceAssignDashboard();
          
        }
      }
        else
        {
           $this->ServiceAssignDashboard();
        }
       
    }
    function updatedservice()
    {
        $this->ServiceAssignDashboard();
    }
    
    function saved()
    {
        $this->AccessoryReg(); 
    }
    //cam data start
    public function insert() 
        {
     $this->load->Library('form_validation');
        $this->form_validation->set_rules("datereceived","Received Data",'required|min_length[2]');
        $this->form_validation->set_rules('title','Title','required|min_length[2]');
        $this->form_validation->set_rules('content','Content','required|min_length[2]');
          $this->form_validation->set_rules('reporter','Report','required|min_length[3]');
           $this->form_validation->set_rules('cameraman','Camera Man','alpha|required|min_length[3]');
            $this->form_validation->set_rules('frameno','Frame No','required|min_length[1]');
             $this->form_validation->set_rules('receivername','Receiver Name','required|min_length[2]');
               $this->form_validation->set_rules('itemno','itemno','required|min_length[5]|max_length[30]');  
       
       if($this->form_validation->run()) 
        { 
              // valid form
            $this->load->model("CamData_M");
        $data_cam=array(
            "Received_Data" =>$this->input->post("datereceived"),
            "Title" =>$this->input->post("title"),"Content" =>$this->input->post("content"),"Reporter" =>$this->input->post("reporter"),"Camera_Man" =>$this->input->post("cameraman"),"Frame_Number" =>$this->input->post("frameno"),"Receiver_Name" =>$this->input->post("receivername"),"item_ID" =>$this->input->post("itemno"));

              $this->CamData_M->save_camdata($data_cam);

               redirect(base_url() . "Encoder_C/saved_redirect");
                 }
             else{
                 $this->camdataregistration();
                 }
     
            }
     function saved_redirect()
      {
        $this->camdataregistration();
      }
      // update fetch 
              
    
}
?>