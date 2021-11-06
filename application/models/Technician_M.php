<?php
 class Technician_M extends CI_Model
{
	function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }
	 function getService()
	    {
		$query=$this->db->get('service_detail');
		if($query->num_rows() >0){
			return $query->result();
		}
	}
    function fetch_dropdown_member()
    {
     $query=$this->db->get('member_registration_tbl'); 
    if($query->num_rows() >0){
      return $query->result();
    }
    }
  public function count_employee()
        {
         // $this->db->where('user_status', 'active');
          $this->db->select('*');
          $this->db->from('member_registration_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
         public function count_driver()
        {
         // $this->db->where('user_status', 'inactive');
          $this->db->select('*');
           $this->db->from('driver_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
         public function count_vehicle()
        {
         // $this->db->where('user_status', 'active');
          $this->db->select('*');
          $this->db->from('vehicle_reg_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
         public function count_service()
        {
         // $this->db->where('user_status', 'active');
          $this->db->select('*');
          $this->db->from('service_detail');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
         public function count_accessory()
        {
         // $this->db->where('user_status', 'inactive');
          $this->db->select('*');
           $this->db->from('accessory_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
         public function count_requested_accessory()
        {
         // $this->db->where('user_status', 'active');
          $this->db->select('*');
          $this->db->from('accessory_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
   function getAccessory()
      {
    $query=$this->db->get('accessory_tbl');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
  // function getAccessory()
  //     {
  //   $query=$this->db->get('accessory_tbl');
  //   if($query->num_rows() >0){
  //     return $query->result();
  //   }
  // }
  public function save_service_detail($data)
    {
      $this->db->insert("service_detail",$data);
    }
  function fetch_request_accessory($id)
    {
      $this->db->where('item_id',$id);
      $query=$this->db->get("accessory_tbl");
      return $query->result();
    }
  
    public function save_request_accessory($data)
    {
      $this->db->insert("request_accessory",$data);
    }
    public function save_request($data)
    {
      $this->db->insert("request_help_tbl",$data);
    }
	function fetch_request_data($id)
    {
    	$this->db->where('request_id',$id);
    	$query=$this->db->get("request_help_tbl");
    	return $query->result();
    }

	   function update_accessory_request($data,$id)
    {
       $this->db->where("item_id",$id);
        $this->db->update("accessory_tbl",$data); //update table 
    }

     function delete_service_m($id)
    {
     $this->db->where("detail_service_id",$id);
     $this->db->delete("service_detail");
    }
    function getTechHelp()
      {
    $query=$this->db->get('technical_problem_tbl');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
    
}
?>