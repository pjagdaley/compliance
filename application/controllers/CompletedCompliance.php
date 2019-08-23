<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompletedCompliance extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('company_model');
                $this->load->model('risklevel_model');
                $this->load->model('companyact_model');
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
		
                $this->load->view('company/header',$data);
                $this->load->view('company/completedCompliance',$data);
                $this->load->view('company/footer',$data);
	} 
}//end