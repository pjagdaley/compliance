<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OverdueCompliance extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('company_model');
                $this->load->model('risklevel_model');
                $this->load->model('companyact_model');
                $this->load->model('companyactstasksdates_model');
                //echo 'pankaj inside CompanyDashboard controller';
		if($this->company_model->check_login_status()==false)
		{
			redirect('/');
		}
	}

	public function index()
	{
		$data  = [];
		$data['companies'] = $this->company_model->getAll();
                $data['risklevels'] = $this->risklevel_model->getAll();
                $data['companyacts'] = $this->companyact_model->getAll();
                $data['overduecompliances'] = $this->companyactstasksdates_model->getAllOverdueCompliances();
                
                $this->load->view('company/header',$data);
                $this->load->view('company/overdueCompliance',$data);
                $this->load->view('company/footer',$data);
	} 
}//end