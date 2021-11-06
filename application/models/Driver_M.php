<?php
 class Driver_M extends CI_Model
{
	function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }
	 function getRequest()
	    {
		$query=$this->db->get('request_help_tbl');
		if($query->num_rows() >0){
			return $query->result();
		}
	}
    public function save_driver($data)
    {
      $this->db->insert("driver_tbl",$data);
    }
    // public function insert_image($image)
    // {
    //   $this->db->set("vehicle_image",$image);
    //   // $this->db->set("name",$name);
    //   // $this->db->set("location",'geomfromtext("POINT(1 1)")',false);
    //   $this->db->insert("request_help_tbl");
    // }
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

	   function update_request($data,$id)
    {
       $this->db->where("request_id",$id);
        $this->db->update("request_help_tbl",$data); //update table clip_item_registration
    }
     function delete_request_m($id)
    {
     $this->db->where("request_id",$id);
     $this->db->delete("request_help_tbl");
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