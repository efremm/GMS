<?php
public class SuperAdmin extends CI_Conroller()
{
	 function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if(!$this->session->userdata('admin'))
            redirect(base_url() . "login");
               
    }
 public function SuperAdminDashboard()
 {
     if ($this->checkadminlogedin()){
             
         $this->load->model('AuthenticationModel');
         
          $post["printll"]=$this->AuthenticationModel->count_all_user();
         $post["countactive"]=$this->AuthenticationModel->count_active_user();
         $post["countinactive"]=$this->AuthenticationModel->count_inactive_user();
          // $post["countinuse"]=$this->AuthenticationModel->count_inuse();
            $this->load->view('SuperAdmin/SuperAdminDashboard',$post);
    
             }
           else{
                redirect(base_url('Authentication/login'));
            }
 }	
}
?>