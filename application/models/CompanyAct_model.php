<?php
    class CompanyAct_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();  
            $this->table = 'CompanyActs';
        }        		
		
	public function getAll()
	{   
            $this->db->select('cact.Id, mact.Name');
            $this->db->from('CompanyActs cact');
            $this->db->join('MasterActs mact', 'cact.act_id = mact.id and cact.company_id=1');
            $query = $this->db->get();            
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