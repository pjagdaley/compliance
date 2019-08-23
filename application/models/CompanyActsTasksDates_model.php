<?php
    class CompanyActsTasksDates_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();  
            $this->table = 'CompanyActsTasksDates';          
             
        }        		
		
	public function getAllOverdueCompliances()
	{   
            //$date = new DateTime("now");    
            //$curr_date = $date->format('Y-m-d ');
             
            $this->db->select('*');
            $this->db->from('CompanyActsTasksDates');
            //$this->db->where('DATE(dueDate) < '.$curr_date);
            $this->db->where('DATE(dueDate) < CURDATE()');
            //$this->db->join('MasterActs mact', 'cact.act_id = mact.id and cact.company_id=1');
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