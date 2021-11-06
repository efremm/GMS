<?php
 class VehicleData_M extends CI_Model
{
	function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }
	 function getVehicleData()
	    {
		$query=$this->db->get('vehicle_reg_tbl');
		if($query->num_rows() >0){
			return $query->result();
		}
	}
	public function save_vehicle_data($data)
		{
			$this->db->insert("vehicle_reg_tbl",$data);
		}

  
     function delete_vehicledata_m($id)
    {
     $this->db->where("Plate_No",$id);
     $this->db->delete("vehicle_reg_tbl");
    }
    function fetch_single_data($id)
    {
    	$this->db->where('Plate_No',$id);
    	$query=$this->db->get("vehicle_reg_tbl");
    	return $query;
    }
    function fetch_data($id)
    {
    	$this->db->where('Plate_No',$id);
    	$query=$this->db->get("vehicle_reg_tbl");
    	return $query->result() 
    	// return $query->row() ;     
    	 ;
    }
    function updatevehicledatadata($data,$id)
    {
       $this->db->where("Plate_No",$id);
        $this->db->update("vehicle_reg_tbl",$data); //update table clip_item_registration
    }
    
}
?>