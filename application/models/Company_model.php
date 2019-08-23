<?php
    class Company_model extends CI_Model {
        
        public function __construct() {
            $this->load->database();  
            $this->table = 'company';
        }        
        
        public function register() {
            
            $data = array(
                'firstName' => $this->input->post('firstName'),
                'lastName' => $this->input->post('lastName'),
                'companyName' => $this->input->post('companyName'),
                'designation' => $this->input->post('designation'),
                'emailId' => $this->input->post('email'),
                'userName' => $this->input->post('userName'),
                //'password' => md5($this->input->post('password')),
                'password' => $this->input->post('password'),
                'companytype_id' => 1,
                'role_id' => 1,
                'isActive' => 1, 
                'createdBy' => 'Admin',
                'updatedBy' => 'Admin'                
            );            
            return $this->db->insert('company', $data);            
        } 
        
        public function check_exist_user($cond)
	{ 
	    $query = $this->db->get_where($this->table,$cond);
		return $query->num_rows();
	}//end check_user
		
	public function get_user($select,$cond)
	{
		$this->db->select($select);
                $query = $this->db->get_where($this->table,$cond);
		return $query->row_array();
	}//end get_user		
		
	public function getAll($select='*',$cond='')
	{
		$this->db->select($select);
		if($cond)
		$this->db->where($cond);

	    $query = $this->db->get($this->table);
		return $query->result_array();
	}//end getAll	


	public function check_login_status()
	{
		if($this->session->userdata('CompanyId'))
		{
			return true;
		}
		else
		{
			return false;
		}	
	}//end  check_login_status
    }