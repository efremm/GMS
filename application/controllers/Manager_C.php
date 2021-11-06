<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class Manager_C extends CI_Controller{
	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('Manager_M');
         $this->load->model('Technician_M');
     }
      
       // public  function Help(){
       //      $this->load->view('header');
       //      $this->load->view('Encoders/EncodersNavbar');
       //      $this->load->view('Encoders/Help');
       //      $this->load->view('footer'); 
       //    }
         public  function RequestApproveManage(){
           
            $this->load->Model('Manager_M');
           $posts=$this->Manager_M->getRequest();
            $this->load->view('Manager/ManagerRequestManage',['posts'=>$posts]);
            // $this->load->view('footer'); 
          }
	               public  function ManagerDashboard(){
                      $post["cnt_employee"]=$this->Technician_M->count_employee(); 
             $post["cnt_driver"]=$this->Technician_M->count_driver(); 
              $post["cnt_vehicle"]=$this->Technician_M->count_vehicle(); 
              $post["cnt_service"]=$this->Technician_M->count_service(); 
             $post["cnt_accessory"]=$this->Technician_M->count_accessory(); 
              $post["cnt_request_accessory"]=$this->Technician_M->count_requested_accessory();


        $post["charttype"]=$this->db->query('select count(member_id) as total_member,gender From member_registration_tbl GROUP BY gender')->result_array();  

          $post["chartstatus"]=$this->db->query('select department,count(member_id) as total_member From member_registration_tbl 
            GROUP BY department')->result_array();

              $this->load->view('Manager/ManagerDashboard',$post);
             // $this->load->view('footer'); 
           }
            public  function ViewTechnicalHelp(){
            $this->load->Model('Manager_M');
           $posts=$this->Manager_M->getHelp();
            $this->load->view('Manager/ViewTechnicalHelp',['posts'=>$posts]);
            // $this->load->view('footer'); 
             }
	           function vehicle_assignment_fetch($id)
            {
         $this->load->model('StoreKeeper_M');
     
         $post["fetch_data"]=$this->StoreKeeper_M->fetch_vehicleassign_data($id);
         $post["fetch_data_drop"]=$this->StoreKeeper_M->fetch_dropdown_drivers();
            $this->load->view('StoreKeeper/VehicleAssignConfirm',$post,$postsdropdown);
      
        }
         function FetchUpdateRequest($id)
           { 
        $this->load->model('Manager_M');
          $post["fetch_data"]=$this->Manager_M->fetch_request_data($id);
            $this->load->view('Manager/ConfirmRequest',$post);
          }

    
     function FetchUpdateAccessory($id)
           { 
        $this->load->model('StoreKeeper_M');
          $post["fetch_data"]=$this->StoreKeeper_M->fetch_accessory_data($id);
            $this->load->view('StoreKeeper/AccessoryEdit',$post);
          }

    public function update_request()
    {
        //  $this->form_validation->set_rules("requestername","requestername",'required|min_length[2]');
        //  $this->form_validation->set_rules('plateno','plateno','required|min_length[2]');
        // $this->form_validation->set_rules('location','location','required|min_length[2]');
        //  $this->form_validation->set_rules("issue","issue",'required|min_length[2]');
        // $this->form_validation->set_rules("requestdate","requestdate",'required|min_length[2]');
        //  $this->form_validation->set_rules('uploadimage','uploadimage','required|min_length[2]');
        //  // aproval parent
        // $this->form_validation->set_rules("issue_status","issue_status",'required|min_length[2]');
        // $this->form_validation->set_rules('approval_description','approval_description','required|min_length[2]');
        //  $this->form_validation->set_rules("service_status","service_status",'required|min_length[2]');
         
        $this->form_validation->set_rules("assigned_to","assigned_to",'required|min_length[2]');
          $this->form_validation->set_rules('assigned_date','assigned_date','required|min_length[2]');
         $this->form_validation->set_rules('approved_by','approved_by','required|min_length[2]');
         if($this->form_validation->run()) 
              { 
                  $this->load->model("Driver_M");
         $data=array(
           "requester_name" =>$this->input->post("requestername"),
            "plate_no" =>$this->input->post("plateno"),
              "location" =>$this->input->post("location"),
               "issue" =>$this->input->post("issue"),
            "requested_date" =>$this->input->post("requestdate"),
             "vehicle_image" =>$this->input->post("uploadimage"),
           "issue_status" =>$this->input->post("issue_status"),
            "approval_description" =>$this->input->post("approval_description"),
              "service_status" =>$this->input->post("service_status"),
               "assigned_to" =>$this->input->post("assigned_to"),
            "assigned_date" =>$this->input->post("assigned_date"),
             "approved_by" =>$this->input->post("approved_by"));
        if($this->input->post("update"))
        {
            $this->Driver_M->update_request($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "Manager_C/updatedrequest",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to update');
           $this->RequestApproveManage();
          
        }
      }
        else
        {
           $this->RequestApproveManage();
        }
       
    }
    function updatedrequest()
    {
        $this->RequestApproveManage();
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
  
    function saved()
    {
        $this->AccessoryReg(); 
    }
   
      // update fetch 
              
    
}
?>