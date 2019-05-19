<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	public function index()
	{
		//$this->load->view('header');
		//$this->load->view('welcome_message');
		
	}
	public function logInMethod()
	{
		$this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
		$this->load->view('header');
		$this->load->view('login');
	}
	public function logInCheck()
	{
		$this->load->library('form_validation');  
           $this->form_validation->set_rules('email', 'Email', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $email = $this->input->post('email');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('main_model');  
                if($this->main_model->can_login($email, $password))  
                {
                	 
                	  
                	 //echo $role;
                     $session_data = array('email'=>$email);
                     $this->session->set_userdata($session_data); 
                     redirect(base_url().'index.php/Login/enter');  
                     //header("Location: http://localhost:81/hr/index.php/Login/enter");
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Email and Password or Access denied');  
                     redirect(base_url().'index.php/Login/logInMethod');
                }  
           }  
           else  
           {  
                //false  
                $this->logInMethod();  
           }
	}
	public function enter(){  
           if($this->session->userdata('email') != '')  
           {  
                //echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
                //echo '<h2>Role - '.$this->session->userdata('role').'</h2>';
	           	$this->load->view('header');
				$this->load->view('homePage');
				
				 	$this->load->view('homePageAdmin');
		           	$query = $this->db->get("user");
	    			$data['records'] = $query->result();    
					$this->load->view('homePageEnd',$data);
					$this->load->view('footer');
			
				
                //echo '<label><a href="/hr/index.php/Login/logout">Logout</a></label>';  
           }  
           else  
           {  
                redirect(base_url().'index.php/Login/logInMethod');  
           }  
      }
      public function add_user(){  
           if($this->session->userdata('username') != '')  
           {  
                $this->load->view('header');
				$this->load->view('homePage');
				if($this->session->userdata('role') == 'Admin')  
		        { 
		           	$this->load->view('homePageAdmin');  
		           	$this->load->view('add_user');
					$this->load->view('footer');
				}
				else
		        { 
		           redirect(base_url().'index.php/Login/logInMethod');
				}
				  
           }  
           else  
           {  
                redirect(base_url().'index.php/Login/logInMethod');  
           }  
      }
      public function logout()  
      {  
           $this->session->unset_userdata('username');
           $this->session->unset_userdata('role');  
            redirect(base_url().'index.php/Login/logInMethod');  
      }
} ?>