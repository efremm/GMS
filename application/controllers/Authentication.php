<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
require_once (APPPATH.'core/Custom_Controller.php');
class Authentication extends Custom_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AuthenticationModel');
        $this->load->library('session');
         $this->load->database();
        $this->load->helper(array('url','html','form'));

    }
     public function home()
       {
     $this->load->view('Home') ;
    }
    //our default index
    public function index()
	{
  // $this->load->view('Home') ;
	    if ($this->checklogedin()){
	        $this->load->view('Home');
        }
            else{
                redirect(base_url('Authentication/login'));
            }
	}
    public function LoginIndex()
  {
    // $this->load->view('Home') ;
      if ($this->checklogedin()){
          redirect(base_url('Authentication/login'));
        }
            else{
                redirect(base_url('Authentication/login'));
            }
  }
	function login()
    {
      
        $this->load->Library('form_validation');
        $this->form_validation->set_rules('username','user name','trim|required|min_length[2]');
        $this->form_validation->set_rules('password','password','trim|required|min_length[4]|max_length[25]');
       if($this->form_validation->run()==FALSE)
        {
          $this->load->view('login') ;
        }
       else
       {
           $username=$this->input->post('username');
           // $password=$this->input->post('password');
             $password=md5($this->input->post('password'));
           $result=$this->AuthenticationModel->login($username,$password);
           if($result)
           {
                  $userrole=$this->AuthenticationModel->CheckUserRole($username);

           // if($userrole['user_type'] == 'admin' && $userrole['user_status'] == 'active')
         
	           if($userrole['user_type'] == 'admin')
              // if($userrole['user_type'] == 'admin')
	              {
	           	 $this->session->set_flashdata('created','<p class="text-success">authenticate user </p>');
	               $this->session->set_userdata('admin','admin');
                 redirect(base_url("Admin_C/AdminDashboard"));
	               }
	              
                 else if($userrole['user_type'] == 'encoder') {
                  $this->session->set_flashdata('created','<p class="text-success">authenticate user </p>');
                 redirect(base_url("Encoder_C/home"));
                 }
                 else if($userrole['user_type'] == 'driver') {
                  $this->session->set_flashdata('created','<p class="text-success">authenticate user </p>');
                 redirect(base_url("Driver_C/DriverDashboard"));
                 }
                 else if($userrole['user_type'] == 'storekeeper') {
                  $this->session->set_flashdata('created','<p class="text-success">authenticate user </p>');
                 redirect(base_url("StoreKeeper_C/StoreKeeperDashboard"));
                 }
                 else if($userrole['user_type'] == 'manager') {
                  $this->session->set_flashdata('created','<p class="text-success">authenticate user </p>');
                 redirect(base_url("Manager_C/ManagerDashboard"));
                 }
                 else if($userrole['user_type'] == 'driver') {
                  $this->session->set_flashdata('created','<p class="text-success">authenticate user </p>');
                 redirect(base_url("Driver_C/home"));
                 }
                  else if($userrole['user_type'] == 'technician') {
                  $this->session->set_flashdata('created','<p class="text-success">authenticate user </p>');
                 redirect(base_url("Technician_C/TechnicianDashboard"));
                 }
                  else if($userrole['user_type'] == 'reception') {
                  $this->session->set_flashdata('created','<p class="text-success">authenticate user </p>');
                 redirect(base_url("Reception_C/ReceptionDashboard"));
                 }
                }
		           else
		           {
		               // echo "<script> alert('error  login');</script>";
		                $this->session->set_flashdata('notcreated','<p class="text-success">user account not correct</p>');
		               $this->load->view('login');

		           }
       }
    }

    public function HomeDashboard()
    {
        if ($this->checklogedin()) {


            $this->load->view('header');
            $this->load->view('nav');
            $this->load->view('dashboard');
            $this->load->view('footer');
        }
        else
            redirect(base_url('Authentication/login'));
    }
    //forgot passowrd 1st step to enter your username/email
     public  function ForgotPasswordLink(){

          // $username=$this->input->post('username');
          $this->load->view('Admin/ForgotPasswordRelink');

            }
    //forgot passowrd 3st step to answr the squirity question
        public  function ForgotPasswordForm(){

          // $username=$this->input->post('username');
              $this->load->view('Admin/ForgotPasswordForm');
            }
            //forgot passowrd 2st validate the user name or email you entered in forgotpasswordlink
            public function chrckemail()
            {

              $username=$this->input->post("username");
             if($this->AuthenticationModel->check_useremail($username)>=1)
               // if($result)>=1;
               // {
               {
             redirect(base_url() . "Authentication/ForgotPasswordForm",'refresh');
             // $this->load->view('Admin/ForgotPasswordForm');
              }
              else{ 
                     $this->session->set_flashdata('errormsg','You username or email is not correct and user must be active!!!');
                 $this->ForgotPasswordLink();

               }
            }
            public  function UpdatePassword_C(){
          // $uname=$this->input->post('username');
           
             // $this->load->view('Admin/UpdatePassword',$username);
              // redirect(base_url("Authentication/UpdatePassword"));
               redirect(base_url() . "Authentication/UpdatePassword");
            }
             public  function UpdatePassword(){
          // $username=$this->input->post('username');
           
             $this->load->view('Admin/UpdatePassword');
              // redirect(base_url("Reception_C/ReceptionDashboard"));
            }
        public  function CheckSequrity(){
            $this->load->model("AuthenticationModel");
              $employeeid=$this->input->post("empid");
             
              if($this->AuthenticationModel->check_empid($employeeid)>=1)
                 {
            $this->load->model("AuthenticationModel");
        $this->AuthenticationModel->check_sequrity_m($techid);
        $this->session->set_flashdata('successmsg','data deleted successfully');
        redirect(base_url() . "Admin_C/deleted_tech_redirect");
              }
            }
            //forgot passowrd 4th answer the squirity question
             public function check_security_qn()
                {
        $this->load->Library('form_validation');
       $usern =$this->input->post("username");
       $seq_ans =$this->input->post("answer_sq");

        $this->form_validation->set_rules('username','password','required|min_length[2]');
         $this->form_validation->set_rules('seq_qsn','seq_qsn','required|min_length[2]');
         $this->form_validation->set_rules('answer_sq','answer_sq','required|min_length[2]');
        
                      if($this->AuthenticationModel->check_seqsa_m($seq_ans)>=1)
                        {
                            // $this->UpdatePassword_C();
                           // $this->load->view('Authentication/UpdatePassword');
                         redirect(base_url() . "Authentication/UpdatePassword_C",'refresh');
                             }
                        else 
                        {
                       $this->session->set_flashdata('errormsg','You answer is not correct');
                        $this->ForgotPasswordForm();
              
                      }
         
         }
  //finally update the password
         public function update_pass()
                {
        $this->load->Library('form_validation');
       $uname =$this->input->post("username");
       $upass =md5($this->input->post("pass"));   
       $urepass =md5($this->input->post("repassword"));    
        $this->form_validation->set_rules('username','username','required|min_length[2]');
         $this->form_validation->set_rules('pass','pass','required|min_length[2]');
         // $this->form_validation->set_rules('answer_sq','answer_sq','required|min_length[2]');
           if($this->form_validation->run()) 
                  { 
                     if($upass==$urepass)
                      { 
                   if($this->AuthenticationModel->check_useremail($uname)>=1)
                        {
                         //    // $this->UpdatePassword_C();
                         //   // $this->load->view('Authentication/UpdatePassword');
                         // redirect(base_url() . "Authentication/UpdatePassword_C",'refresh');
                         //     }

                  $this->load->model("AuthenticationModel");
                  // $data=array(
                  //            "user_name" =>$this->input->post("username"),
                  //            "user_password" =>md5($this->input->post("pass"));
                      
                        if($this->input->post("update"))
                        {
                            $this->AuthenticationModel->update_user_pass($upass,$this->input->post("username"));
                              $this->session->set_flashdata('successmsg','Password updated successfully');
                            redirect(base_url() . "Authentication/ForgotPasswordLink",'refresh');
                           
                        }
                        else 
                        {
                             $this->session->set_flashdata('errormsg','Failed to update password');
                           $this->UpdatePassword();
                          
                        }
                     }
                     
                        else 
                        {
                       $this->session->set_flashdata('errormsg','Your username/Email is not exit!!!');
                        // redirect(base_url() . "Admin_C/UpdatePassword");
                       $this->UpdatePassword();
              
                      }
                    }
                        else{ 
                    $this->session->set_flashdata('errormsg','Confirm your password please!!!');
                        // redirect(base_url() . "Admin_C/UpdatePassword");
                    $this->UpdatePassword();
                      }
                   }
                       // redirect(base_url() . "Admin_C/ManageUsers");                        
                       else{
                          $this->session->set_flashdata('errormsg','Your username/Email is not exit!!!');
                           $this->UpdatePassword();
                           }
                    
         
         }
    function logout(){
        $this->session->unset_userdata('username');
        redirect(base_url());
    }

}
?>