<?php
 class Reception_M extends CI_Model
{
	function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
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
         function getDriverData()
        {
        $query=$this->db->get('driver_tbl');
        if($query->num_rows() >0){
            return $query->result();
        }
       }
        function getRequest()
        {
        $query=$this->db->get('request_help_tbl');
        if($query->num_rows() >0){
            return $query->result();
        }
       }
         function getServiceDetail()
        {
        $query=$this->db->get('service_detail');
        if($query->num_rows() >0){
            return $query->result();
        }
       }

        function update_service($data,$id)
    {
       $this->db->where("request_id",$id);
        $this->db->update("request_help_tbl",$data); //update table 
    }
        function fetch_dropdown_drivers()
    {
     $query=$this->db->get('request_help_tbl'); 
    if($query->num_rows() >0){
      return $query->result();
    }
    }
    function fetch_vehicleassign_data($id)
    {
      $this->db->where('request_id',$id);
      $query=$this->db->get("request_help_tbl");
      return $query->result();
    }
      public function save_vehicle_data($data)
    {
      $this->db->insert("vehicle_reg_tbl",$data);
    }
	 public function save_driver_data($data)
    {
      $this->db->insert("driver_tbl",$data);
    }
     public function save_member_data($data)
    {
      $this->db->insert("member_registration_tbl",$data);
    }
    function fetch_member_data($id)
    {
      $this->db->where('member_id',$id);
      $query=$this->db->get("member_registration_tbl");
      return $query->result();
    }
   
     function delete_clip_m($id)
    {
     $this->db->where("item_clip_id",$id);
     $this->db->delete("clip_item_registration");
    }
    function fetch_single_data($id)
    {
    	$this->db->where('item_clip_id',$id);
    	$query=$this->db->get("clip_item_registration");
    	return $query;
    }
   
     function getVehicleData()
      {
    $query=$this->db->get('vehicle_reg_tbl');
    if($query->num_rows() >0){
      return $query->result();
    }
  }

    function fetch_driver_data($id)
    {
    	$this->db->where('driver_id',$id);
    	$query=$this->db->get("driver_tbl");
    	return $query->result();
    }
     function fetch_vehicle_data($id)
    {
      $this->db->where('plate_no',$id);
      $query=$this->db->get("vehicle_reg_tbl");
      return $query->result();
    }
   
     function update_vehicle($data,$id)
    {
       $this->db->where("plate_no",$id);
        $this->db->update("vehicle_reg_tbl",$data); //update table member_registration_tbl
    }
     function delete_vehicle_m($id)
    {
     $this->db->where("plate_no",$id);
     $this->db->delete("vehicle_reg_tbl");
    }
    function delete_member_m($id)
    {
     $this->db->where("member_id",$id);
     $this->db->delete("member_registration_tbl");
    }
    function update_driver($data,$id)
    {
       $this->db->where("driver_id",$id);
        $this->db->update("driver_tbl",$data); //update table member_registration_tbl
    }
    function delete_driver_m($id)
    {
     $this->db->where("driver_id",$id);
     $this->db->delete("driver_tbl");
    }

     
    
}

?>