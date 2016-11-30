<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	public function __construct() 
    {
        parent::__construct();
    }

    /**
     * index() 
     * To login
     */
	public function index()
	{
		// Didn't click 'submit'
		if (! isset($_POST['submit']))
		{
			$this->load->view('admin/login/login');	
			return 1;
		}
		// There is session
		if($this->session->has_userdata('email') && $this->session->has_userdata('password'))
        {
            // Go to this Items page
            header("Location: ".base_url()."items");
        }
				
		// Validate inputes 
		$validation = array(
	    	array(
	            'field' => 'email',
	            'label' => 'email',
	            'rules' => 'required'
	        ),
	        array(
	            'field' => 'password',
	            'label' => 'password',
	            'rules' => 'required'
	        )
    	);

		// Set validation
    	$this->form_validation->set_rules($validation);

    	// Inputs are fine
    	if ($this->form_validation->run() == TRUE)
        {
        	// Set data
           	$data_insert['email'] 		= $this->input->post('email');
           	$data_insert['password'] 	= $this->input->post('password');

         	// Login
           	$user = $this->m_login->login($data_insert);
           	if ($user)
           	{
           		// Data of session
           		$user_data = array(
           			'id'  		=> $user[0]['id'],
           			'name'	 	=> $user[0]['name'],
			        'email'  	=> $data_insert['email'],
			        'password'  => $data_insert['password'],
			        'usertype'	=> $user[0]['usertype']
				);
           		// Set session
				$this->session->set_userdata($user_data);
								
				// Update 'last_login' field
				$user[0]['last_login'] = date("Y-m-d H:m:s");
            	$updated = $this->m_login->Update_db($user[0]['id'], $user[0]);

            	// Evrey thing is OK!
            	if($updated)
            	{
            		header("Location: ".base_url()."items");
            	}
           	}
           	else
           	{
           		// No such user 
				echo '<script type="text/javascript">
			 	alert("اعد المحاولة"); window.location.replace("'.base_url().'/login");
			 	</script>';   
           	}

        }
        else
        {
        	// Something wrong in validation
        	echo '<script type="text/javascript">
			alert("اعد المحاولة"); window.location.replace("'.base_url().'/login");
			</script>';     
        }
	}

	/**
	 *
	 */
	public function logout()
	{
		$this->session->sess_destroy();
		//back to this page Login
        header("Location: ".base_url()."login");
	}
}


