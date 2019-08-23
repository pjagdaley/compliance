<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
            parent::__construct();		
            $this->load->model('company_model');
            if($this->company_model->check_login_status()==true)
            {
                    echo 'pankaj inside login controller';
                    redirect('companyDashboard');
            }
    }

    public function index()
    {
        echo 'pankaj2';   
        $data  = [];
            $data['title'] = 'sdfds';
            $data['footer'] = 'ffffff';
            $this->load->view('pages/login',$data);
    }

    public function process()
    {  	
        $data  = [];
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]');
        if ($this->form_validation->run() == FALSE)
        {
                //echo 'pankaj jagdaley1';	
                //$this->load->view('login',$data);
                $this->load->view('templates/header');
                $this->load->view('pages/login'); 
                $this->load->view('templates/footer');
        }
        else
        {
            echo 'pankaj1';
            $this->username = $this->input->post('username');
            $this->password = $this->input->post('password');
            if($this->company_model->check_exist_user(array('UserName'=>$this->username))==0)
            {
                $this->session->set_flashdata('LOGIN_ERROR', "This user doesn't exist with us.");
                $this->load->view('templates/header');
                $this->load->view('pages/login');
                $this->load->view('templates/footer');
                //$this->load->view('pages/login',$data);
            }
            else
            {  
                $row = $this->company_model->get_user('Id,Password,IsActive,FirstName,LastName,CompanyName,CompanyType_Id',
                        array('UserName'=>$this->username));
                //$password = md5($this->password);
                $password = ($this->password);
                $dbpassword = $row['Password'];
                
                //echo "Send password: $password";
                //echo "Database password: $dbpassword";
                if(strcmp($row['Password'],$password)!==0)
                {
                        $this->session->set_flashdata('LOGIN_ERROR', "Invalid Credential.");

                        //$this->load->view('pages/login',$data);
                        $this->load->view('templates/header');
                        $this->load->view('pages/login');
                        $this->load->view('templates/footer');
                }
                else if($row['IsActive']!=1)
                {
                        $this->session->set_flashdata('LOGIN_ERROR', "Your account is inactive.");
                        //$this->load->view('pages/login',$data);
                        $this->load->view('templates/header');
                        $this->load->view('pages/login');
                        $this->load->view('templates/footer');
                }
                else
                {
                        $this->session->set_userdata('CompanyId',$row['Id']);
                        $this->session->set_userdata('FirstName',$row['FirstName']);
                        $this->session->set_userdata('LastName',$row['FirstName']);
                        $this->session->set_userdata('CompanyTypeId',$row['CompanyType_Id']);
                        $this->session->set_userdata('IsActive',$row['IsActive']);
                        $this->session->set_userdata('CompanyName',$row['CompanyName']);
                        echo 'at the final stage';
                        if($this->input->post('remember')==1)
                        {
                            $time = time()+(3600*24*7);
                            setcookie('LOGIN_USERNAME',$this->username, $time);
                            setcookie('LOGIN_PASSWORD',$this->password, $time);
                            setcookie('IS_REMEMBER',1 ,$time);						
                        }
                        redirect('companyDashboard');
                }
            }//end check_exist_user
        }
    }//function process ends here	
}//end
