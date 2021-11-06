<?php
 class Manager_M extends CI_Model
{
	function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }
	 function getHelp()
      {
    $query=$this->db->get('technical_problem_tbl');
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
    public function save_storekeeper($data)
    {
      $this->db->insert("accessory_tbl",$data);
    }
     public function save_vhcl_assign($data)
    {
      $this->db->insert("driver_assign_tbl",$data);
    }
	function fetch_request_data($id)
    {
      $this->db->where('request_id',$id);
      $query=$this->db->get("request_help_tbl");
      return $query->result();
    }

	   function update_accessory($data,$id)
    {
       $this->db->where("item_id",$id);
        $this->db->update("accessory_tbl",$data); //update table accessory
    }
     function getPosts()
      {
    $query=$this->db->get('accessory_tbl');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
    function getVehicle()
      {
    $query=$this->db->get('vehicle_reg_tbl');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
  function delete_accessory_m($id)
    {
     $this->db->where("item_id",$id);
     $this->db->delete("accessory_tbl");
    }
     function fetch_dropdown_drivers()
    {
     $query=$this->db->get('driver_tbl'); 
    if($query->num_rows() >0){
      return $query->result();
    }
    }
    function fetch_vehicleassign_data($id)
    {
      $this->db->where('Plate_No',$id);
      $query=$this->db->get("vehicle_reg_tbl");
      return $query->result();
    }
    
}
?>