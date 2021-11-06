<?php
defined('BASEPATH') OR exit('No direct script access allowed'); 
class StoreKeeper_C extends CI_Controller{
	function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
         $this->load->model('StoreKeeper_M');
     }
      
       public  function Help(){
            $this->load->view('header');
            $this->load->view('Encoders/EncodersNavbar');
            $this->load->view('Encoders/Help');
            $this->load->view('footer'); 
          }
  
	        public  function StoreKeeperDashboard(){
             $post["printllaccessory"]=$this->StoreKeeper_M->count_all_accessory();
             $post["prtreqaccessory"]=$this->StoreKeeper_M->count_requested_accessory();
             $post["printallvehicle"]=$this->StoreKeeper_M->count_all_vehicle();
              $this->load->view('StoreKeeper/StoreKeeperDashboard',$post);
            }
	           function vehicle_assignment_fetch($id)
            {
         $this->load->model('StoreKeeper_M');
     
         $post["fetch_data"]=$this->StoreKeeper_M->fetch_vehicleassign_data($id);
         $post["fetch_data_drop"]=$this->StoreKeeper_M->fetch_dropdown_drivers();
            $this->load->view('StoreKeeper/VehicleAssignConfirm',$post,$postsdropdown);
      
             }

            public  function VehicleAssignment(){
                 $this->load->Model('StoreKeeper_M');
           $posts=$this->StoreKeeper_M->getVehicle();    
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
           public  function AccessoryConfirmManage(){
              $this->load->Model('StoreKeeper_M');
           $posts=$this->StoreKeeper_M->getPosts();
             $this->load->view('StoreKeeper/ConfirmAccessoryManage',['posts'=>$posts]);
                     }
          //view request in incoder 
  public function SubmitAccessory() 
        {
     $this->load->Library('form_validation');
        $this->form_validation->set_rules("receivevoucno","receivevoucno",'required|min_length[2]');
        $this->form_validation->set_rules('supplier','supplier','required|min_length[2]');
        $this->form_validation->set_rules('storereceiver','store_receiver','required|min_length[2]');
           // $this->form_validation->set_rules('unitprice','unitprice','alpha|required|min_length[3]');
        $this->form_validation->set_rules('unitprice','unitprice','required|min_length[2]');
            $this->form_validation->set_rules('quantity','quantity','required|min_length[1]');
             $this->form_validation->set_rules('receiveddate','received_date','required|min_length[3]');
              
       if($this->form_validation->run()) 
        { 
              // valid form
            $this->load->model("StoreKeeper_M");

             $qnty=$this->input->post("quantity");
                 // check if the data is available
           if( $this->StoreKeeper_M->fetch_quantity_data($qnty) < 0)
            {
               // $post["printllaccessory"]=$this->StoreKeeper_M->count_all_accessory();
               // $this->StoreKeeper_M->fetch_vehicleassign_data($qnty);
        $data=array(
            "receive_vouc_no" =>$this->input->post("receivevoucno"),
            "supplier" =>$this->input->post("supplier"),"store_receiver" =>$this->input->post("storereceiver"),"unit_price" =>$this->input->post("unitprice"),"quantity" =>$this->input->post("quantity"),"received_date" =>$this->input->post("receiveddate"));
                 
           if($this->input->post("add"))
            {
            $this->StoreKeeper_M->save_storekeeper($data);
              $this->session->set_flashdata('successmsg','successfully Registered!');
            redirect(base_url() . "StoreKeeper_C/saved",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to save');
           $this->AccessoryReg();
          
        }
        }
       else{
             $availablequantity = $this->input->post("quantity");
             $receive_voucno = $this->input->post("receivevoucno");
             // $avqtty=$availablequantity+12;
            $this->StoreKeeper_M->set_available_quantity($availablequantity,$receive_voucno);
              $this->session->set_flashdata('successmsg','successfully set!');
            redirect(base_url() . "StoreKeeper_C/saved",'refresh');
       } 
      }
        else{
                 $this->AccessoryReg();
                 }
    
      }
       public function update_vehicle()
          {
        
        $this->load->Library('form_validation');
  
       
            $this->form_validation->set_rules('vehicle_status','vehicle_status','required|min_length[2]');
            $this->form_validation->set_rules('assigned_by','assigned_by','required|min_length[1]');
           $this->form_validation->set_rules('assigned_date','assigned_date','required|min_length[2]|max_length[15]');
           $this->form_validation->set_rules('assigned_to_driver','assigned_to_driver','required|min_length[2]|max_length[15]');
       
         if($this->form_validation->run()) 
              { 
              // valid form
           $this->load->model("StoreKeeper_M");
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
            $this->StoreKeeper_M->update_vehicle_m($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "StoreKeeper_C/updatedvehicle",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to update');
           $this->VehicleAssignment();
          
        }
      }
        else
        {
           $this->VehicleAssignment();
        }
       
    }
   
    function updatedvehicle()
    {
        $this->VehicleAssignment();
    }
    
     function FetchUpdateAccessory($id)
           { 
        $this->load->model('StoreKeeper_M');
          $post["fetch_data"]=$this->StoreKeeper_M->fetch_accessory_data($id);
            $this->load->view('StoreKeeper/AccessoryEdit',$post);
          }

   
     function FetchAccessoryConfirm($id)
           { 
        $this->load->model('StoreKeeper_M');
          $post["fetch_data"]=$this->StoreKeeper_M->fetch_accessory_data($id);
            $this->load->view('StoreKeeper/ConfirmAccessoryRequest',$post);
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
    public function update_accessory()
    {
        $this->load->model("StoreKeeper_M");
        $this->form_validation->set_rules("receivevoucno","receivevoucno",'required|min_length[2]');
        $this->form_validation->set_rules('supplier','supplier','required|min_length[2]');
        $this->form_validation->set_rules('storereceiver','store_receiver','required|min_length[2]');
           // $this->form_validation->set_rules('unitprice','unitprice','alpha|required|min_length[3]');
        $this->form_validation->set_rules('unitprice','unitprice','required|min_length[2]');
            $this->form_validation->set_rules('availablequantity','availablequantity','required|min_length[1]');
             $this->form_validation->set_rules('receiveddate','received_date','required|min_length[3]');

            //   $this->form_validation->set_rules('approval_status','approval_status','required|min_length[2]');
            // $this->form_validation->set_rules('approver_name','approver_name','required|min_length[1]');
            //  $this->form_validation->set_rules('approved_date','approved_date','required|min_length[3]');
            //    $this->form_validation->set_rules('approved_quantity','approved_quantity','required|min_length[3]');

         if($this->form_validation->run()) 
              { 
              // valid form
            $this->load->model("StoreKeeper_M");
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
            $this->StoreKeeper_M->update_accessory_m($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "StoreKeeper_C/updated",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to update');
           $this->AccessoryManage();
          
        }
      }
        else
        {
           $this->AccessoryManage();
        }
       
    }
    function updated()
    {
        $this->AccessoryManage();
    }
      public function update_accessory_confirm()
    {
        $this->load->model("StoreKeeper_M");
      
               $this->form_validation->set_rules('approvedquantity','approvedquantity','required|min_length[1]');


         if($this->form_validation->run()) 
              { 
              $this->load->model("StoreKeeper_M");

            $avl_qnty=$this->input->post("availablequantity");
             $req_qnty=$this->input->post("requiredquantity");

             $appr_qnty=$this->input->post("approvedquantity");

             $vcno=$this->input->post("receivevoucno");
           
           // if( ($this->StoreKeeper_M->fetch_avquantity_data($avl_qnty)) > ($this->StoreKeeper_M->fetch_rqquantity_data($req_qnty)))
             if($avl_qnty>=$req_qnty)
            {
              if($appr_qnty<=$req_qnty)
              {


           //    // $this->StoreKeeper_M->fetch_vehicleassign_data($qnty);
                   $avqnt=($avl_qnty)-($req_qnty);

                    // valid form
            $this->load->model("StoreKeeper_M");
        $data=array(
            "receive_vouc_no" =>$this->input->post("receivevoucno"),
            "supplier" =>$this->input->post("supplier"),
            "store_receiver" =>$this->input->post("storereceiver"),
            "part_no" =>$this->input->post("partno"),
            "unit_price" =>$this->input->post("unitprice"),
             "available_quantity" =>$avqnt,
            // "available_quantity" =>$this->input->post("availablequantity"),
            "received_date" =>$this->input->post("receiveddate"),

           "requester_name" =>$this->input->post("requestername"),
            "required_quantity" =>$this->input->post("requiredquantity"),
            "requested_date" =>$this->input->post("availablequantity"),
            "service_no" =>$this->input->post("serviceno"),

          "approval_status" =>$this->input->post("approval_status"),
            "approver_name" =>$this->input->post("approver_name"),
            "approved_date" =>$this->input->post("approved_date"),
            "approved_quantity" =>$this->input->post("approvedquantity"));
        if($this->input->post("update"))
        {
            $this->StoreKeeper_M->update_accessory_m($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('successmsg','updated successfully');
            redirect(base_url() . "StoreKeeper_C/updated_confirm",'refresh');

           
        }
        else 
        {
             $this->session->set_flashdata('errormsg','Failed to update');
           $this->AccessoryConfirmManage();
          
        }
        }
      else{
         // $this->StoreKeeper_M->update_avl_accessory($data,$this->input->post("hidden_id"));
              // $this->session->set_flashdata('errormsg',$avqnt.''.$avl_qnty.''.$req_qnty.''.'required is more than available');
        $this->session->set_flashdata('errormsg','Approved:'.' '.$appr_qnty.' '.'Required:'.' '.$req_qnty.'(approved is more than required)');
            redirect(base_url() . "StoreKeeper_C/updatedqstr",'refresh');
      }
      }
      else{
         // $this->StoreKeeper_M->update_avl_accessory($data,$this->input->post("hidden_id"));
              $this->session->set_flashdata('errormsg','Available:'.' '.$avl_qnty.' '.'Required:'.' '.$req_qnty.' '.'(Required is more than Available)');
            redirect(base_url() . "StoreKeeper_C/updatedqstr",'refresh');
      }
      }
        else
        {
           $this->AccessoryConfirmManage();
        }
       
    }
    function updated_confirm()
    {
        $this->AccessoryConfirmManage();
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