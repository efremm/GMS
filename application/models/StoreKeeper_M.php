<?php
 class StoreKeeper_M extends CI_Model
{
	function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }
	 function getRequest()
	    {
		$query=$this->db->get('item_request_tbl');
		if($query->num_rows() >0){
			return $query->result();
		}
	}
    public function save_storekeeper($data)
    {
      $this->db->insert("accessory_tbl",$data);
    }
      public function fetch_quantity_data($id)
        {
         $this->db->where('item_id', $id);
           $this->db->from('accessory_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
        function set_available_quantity($data,$id)
         {
      // $this->db->set("available_quantity",$data);
      $this->db->set('available_quantity', 'available_quantity + ' . (int) $data, FALSE);
       $this->db->where("receive_vouc_no",$id);
        $this->db->update("accessory_tbl"); //update table accessory
    }
     
     function update_vehicle_m($data,$id)
    {
       $this->db->where("vehicle_id",$id);
        $this->db->update("vehicle_reg_tbl",$data); //update table accessory
    }

	function fetch_accessory_data($id)
    {
    	$this->db->where('item_id',$id);
    	$query=$this->db->get("accessory_tbl");
    	return $query->result();
    }

	   function update_accessory_m($data,$id)
    {
       $this->db->where("item_id",$id);
       // UPDATE accessory_tbl SET available_quantity = available_quantity + 1

        $this->db->update("accessory_tbl",$data); //update table accessory
    }
     function getPosts()
      {
    $query=$this->db->get('accessory_tbl');
    if($query->num_rows() >0){
      return $query->result();
    }
  }
    public function count_all_accessory()
        {
         
          $this->db->select('*');
          $this->db->from('accessory_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
          public function count_requested_accessory()
        {
         
          $this->db->select('*');
          $this->db->from('accessory_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

        }
          public function count_all_vehicle()
        {
         
          $this->db->select('*');
          $this->db->from('vehicle_reg_tbl');
          $count_ = $this->db->get()->num_rows();
          return $count_;

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