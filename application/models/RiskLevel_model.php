<?php
    class RiskLevel_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();  
            $this->table = 'RiskLevels';
        }        		
		
	public function getAll()
	{   
            $this->db->select('Id, Name');
            $this->db->where('IsActive = 1');
            $this->db->order_by("SequenceNo","asc");
            $query=$this->db->get($this->table);
            return $query->result_array();  
            
            
	}//end getAll
        
        public function getSpecifics($select='*',$cond='')
	{
		$this->db->select('Id, Name');
		if($cond)
		$this->db->where('IsActive =1');
                $query = $this->db->get($this->table);
                    return $query->result_array();
	}
    }