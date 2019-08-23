<?php
    class Companies extends CI_Controller {
        
        public function __construct()
	{
		parent::__construct();		
		$this->load->model('company_model');		
	}
        
        public function index() {
            
            $data['companies'] = $this->company_model->get_companies();
            //print_r($data['companies']);
            $this->load->view('templates/header');
            $this->load->view('pages/home',$data);
            $this->load->view('templates/footer');
        
        }
        
        public function register() {
            
            //$data['companies'] = $this->company_model->get_companies();
            //print_r($data['companies']);
            $this->form_validation->set_rules('firstName','First name','trim|required');
            $this->form_validation->set_rules('lastName','Last name','trim|required');
            $this->form_validation->set_rules('companyName','Company name','trim|required');
            $this->form_validation->set_rules('designation','Designation','trim|required');
            $this->form_validation->set_rules('email','Email','trim|required|valid_email');
            $this->form_validation->set_rules('userName','User name','trim|required|min_length[5]');
            $this->form_validation->set_rules('password','Password','trim|required|min_length[5]');
            $this->form_validation->set_rules('confirmPassword', 'Password Confirmation', 'trim|required|matches[password]');
            //$this->form_validation->set_rules('confirmPassword','Confirm Password','required');
            //$this->output->enable_profiler(TRUE);
            
            if ($this->form_validation->run() === FALSE) {
                $this->load->view('templates/header');
                $this->load->view('pages/register');
                $this->load->view('templates/footer');
            } else {
                $this->company_model->register();
                $this->load->view('templates/header');
                $this->load->view('pages/login'); 
                $this->load->view('templates/footer');
            }   
        }
    }    


