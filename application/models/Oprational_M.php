<?php
 class Oprational_M extends CI_Model
{
	function __construct()
    {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->library('session');
    }
	 
	public function save_requested($data)
		{
			$this->db->insert('item_request_tbl',$data);
		}

 
    function fetch_single_data($id)
    {
    	$this->db->where('request_ID',$id);
    	$query=$this->db->get("item_request_tbl");
    	return $query;
    }
   
     function getRequestData()
	    {
		$query=$this->db->get('item_request_tbl');
		if($query->num_rows() >0){
			return $query->result();
		}
	}
	function fetch_data($id)
    {
    	$this->db->where('Cam_Data_ID',$id);
    	$query=$this->db->get("cam_data_tbl");
    	return $query->result() 
    	// return $query->row() ;     
    	 ;
    }
  
    
}
?>