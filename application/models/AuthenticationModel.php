<?php
/**
* 
*/
defined('BASEPATH') OR exit('No direct script access allowed');
class AuthenticationModel extends CI_Model
{
	
	function __construct()
	{
		// Call the CI_Model constructor
		 parent::__construct();
		 $this->load->library('session');
     $this->load->database();
     $this->load->helper(array('url','html','form'));
	}


        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }
        public function login ($username,$password)
            {
        $this->db->where("user_name",$username);
        $this->db->where("user_password",$password);
          $this->db->where("user_status","active");
        $query=$this->db->get("tbl_users");
                if ($query->num_rows()>0)
                {
                 foreach($query->result() as $rows)
                   {
                       $newdata=array('username' => $rows->user_name,
                           'logged_in' => TRUE,
                       );
//                       $this->session->set_userdata('username', $rows->user_name);
                   }

                 $this->session->set_userdata($newdata);
                 return true;
                }
                return false;
            }
            // 

    function CheckUserRole($username){
        // $user_id=$this->input->post('username');
//       $this->db->select('username');
// $this->db->from('tbl_user');
// $this->db->where('userid',11);
// $this->db->where("usertype","admin");
// $query=$this->db->get();
// //SELECT `username` FROM (`tbl_user`) WHERE `userid` = 11 AND `usertype` = 'admin'

          $this->db->select('user_type,user_status');
          $this->db->where('user_name', $username);

          $result = $this->db->get('tbl_users');
          $data = array_shift($result->result_array());
         // echo($data['user_type']);
        return $data;
    }
            
    function getPosts()
      {
    $query=$this->db->get('tbl_users');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
function getImage($username)
      {
        $this->db->where('user_name',$username);
    $query=$this->db->get('tbl_users');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
  public function save_user($data)
    {
      $this->db->insert("tbl_users",$data);
    }
     
    function fetch_data($id)
    {
      $this->db->where('user_id',$id);
      $query=$this->db->get("tbl_users");
      return $query->result();
    }
     function fetch_user($user_name)
    {
       $this->db->select('*');
          $this->db->from('tbl_users');

      // $this->db->where('user_name',$id);
      // $query=$this->db->get("tbl_users");
      // return $query->result();
    }
      function update_users($data,$id)
    {
       $this->db->where("user_id",$id);
        $this->db->update("tbl_users",$data); //update table clip_item_registration
    }
       function update_technicalhelp_m($data,$id)
        {
           $this->db->where("case_id",$id);
            $this->db->update("technical_problem_tbl",$data); //update table accessory
        }
       function update_systemhelp_m($data,$id)
        {
           $this->db->where("syshelp_id",$id);
            $this->db->update("system_help_tbl",$data); //update table accessory
        }
        function fetch_technical_help($id)
        {
          $this->db->where('case_id',$id);
          $query=$this->db->get("technical_problem_tbl");
          return $query->result();
        }
         function fetch_sys_help($id)
        {
          $this->db->where('syshelp_id',$id);
          $query=$this->db->get("system_help_tbl");
          return $query->result();
        }
          public function count_all_user()
        {
         
          $this->db->select('*');
          $this->db->from('tbl_users');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
         public function count_active_user()
        {
         $this->db->where('user_status', 'active');
          // $this->db->select('*');
          $this->db->from('tbl_users');
          $count_ = $this->db->get()->num_rows();
          return $count_;
        }
         public function count_inactive_user()
        {
         $this->db->where('user_status', 'inactive');
           $this->db->from('tbl_users');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
         public function count_inuse()
        {
         $this->db->where('user_status', 'active');
          // $this->db->select('*');
          $this->db->from('tbl_users');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
     function delete_user_m($id)
           {
     $this->db->where("user_id",$id);
     $this->db->delete("tbl_users");
        }
         function delete_techhelp_m($id)
           {
     $this->db->where("case_id",$id);
     $this->db->delete("technical_problem_tbl");
        }
         function delete_syshelp_m($id)
           {
     $this->db->where("syshelp_id",$id);
     $this->db->delete("system_help_tbl");
        }
        public function save_case($data)
    {
      $this->db->insert("technical_problem_tbl",$data);
    }
  function getCase()
      {
    $query=$this->db->get('technical_problem_tbl');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
  function getSystemHelp()
      {
    $query=$this->db->get('system_help_tbl');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
   public function save_system_case($data)
    {
      $this->db->insert("system_help_tbl",$data);
    }
    function fetch_activeusers()
    {
               
     $this->db->where("user_status",'active');
     $this->db->get('tbl_users'); 
      $query=$this->db->count_all_results();
    // if($query->num_rows() >0){
      return $query->result();
    // }
    }
     function fetch_inactiveusers()
    {
     $query=$this->db->get('tbl_users'); 
    if($query->num_rows() >0){
      return $query->result();
    }
    }
     function fetch_inuseusers()
    {
     $query=$this->db->get('tbl_users'); 
    if($query->num_rows() >0){
      return $query->result();
    }
    }
    function check_empid($empid)
    {
      $this->db->where('emp_id',$empid);
     $query=$this->db->get('member_registration_tbl'); 
     // if (!empty($query->result_array())){
     //    return 1;
     //  }
     if($query->num_rows() >= 1){
      return $query->result();
      // return true;
    }
    }
    //check user name or email
     function check_useremail($useremail)
    {
      $this->db->where('user_name =', $useremail);
       $this->db->where('user_status =', 'active');
      $this->db->or_where('email =', $useremail); 
      // $this->db->where('user_status =', 'active'); 
     // $where = "user_name='useremail' OR email='useremail'";
     //  $this->db->where($where);
        $query=$this->db->get('tbl_users'); 
        if($query->num_rows() >= 1){
      return $query->result();
      // return true;
    }
    }
    function check_sequn_m($usern)
    {
      $this->db->where('user_name',$usern);
     $query=$this->db->get('security_tb'); 
     // if (!empty($query->result_array())){
     //    return 1;
     //  }
     if($query->num_rows() >= 1){
      return $query->result();
      // return true;
    }
    }
    //  function check_seqqn_m($username)
    // {
    //   $this->db->where('security_question',$username);
    //  $query=$this->db->get('security_tb'); 
    //  // if (!empty($query->result_array())){
    //  //    return 1;
    //  //  }
    //  if($query->num_rows() >= 1){
    //   return $query->result();
    //   // return true;
    // }
    // }
     function check_seqsa_m($seq_ans)
    {
      $this->db->where('question_answer',$seq_ans);
     $query=$this->db->get('security_tbl'); 
     // if (!empty($query->result_array())){
     //    return 1;
     //  }
     if($query->num_rows() >= 1){
      return $query->result();
      // return true;
    }
    }
     function update_user_pass($data,$id)
         {
      // $this->db->set("available_quantity",$data);
      // $this->db->set('user_password', 'available_quantity + ' . (int) $data, FALSE);
       $this->db->set('user_password',$data);
       $this->db->where("user_name",$id);
        $this->db->or_where("email",$id);
        $this->db->update("tbl_users"); //update table accessory
    }
    //   function check_user($uname)
    // {
    //   $this->db->where('user_name =', $uname);
    //    $this->db->where('user_status =', 'active');
    //   $this->db->or_where('email =', $uname); 
    //   $this->db->where('user_status =', 'active'); 
    //  // $where = "user_name='useremail' OR email='useremail'";
    //  //  $this->db->where($where);
    //     $query=$this->db->get('tbl_users'); 
    //     if($query->num_rows() >= 1){
    //   return $query->result();
    //   // return true;
    // }
    // }
     
}
?>