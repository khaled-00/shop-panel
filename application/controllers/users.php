<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller 
{
	private $data= array('form'=>'add');
	private $placed;

    public function __construct() 
    {
        parent::__construct();

        // User's name
        $this->data['session'] = $this->session->name;

        //////////////////////////////////////////////////////// MUST EDIT
        // Project name
        $this->placed = '/vt/t/';
    }

    /**
	 * Show the users
	 */
	public function index()
	{
		// Check is there a session 
	 	$this->check_session();

	 	// Show them all
		$show_data['data'] = $this->m_users->show_user();
		
		// Show the page
		$this->data['page_title'] = "All Slides";
		$this->load->view('admin/static/nav-setup', $this->data);
		$this->load->view('admin/drivers/usered', $show_data);
		$this->load->view('admin/static/footer');

		return 0;
	}

	/**
	 *
	 * 
	 */
	public function add_user()
	{
		// Check is there a session 
	 	$this->check_session();

		// Didn't click 'submit'
		if (! $this->input->post('Add_user'))
		{
			// Show the page
			$this->data['page_title'] = "Add a new slide";
			$this->load->view('admin/static/nav-setup', $this->data);
			$this->load->view('generate/index/add_user');
			$this->load->view('admin/static/footer');

			return 1;
		}
		
		// Validate inputes 
		$validation = array(
	    	array(
	            'field' => 'user_name',
	            'label' => 'user name',
	            'rules' => 'required'
	        ),
	        array(
	            'field' => 'user_mail',
	            'label' => 'email',
	            'rules' => 'required|valid_email'
	        ),
	        array(
	            'field' => 'user_password',
	            'label' => 'password',
	            'rules' => 'required'
	        ),
	        array(
	            'field' => 'user_mobile',
	            'label' => 'mobile',
	            'rules' => 'required'
	        ),
	        array(
	            'field' => 'user_type',
	            'label' => 'type',
	            'rules' => 'required'
	        )
    	);

		// Set validation
    	$this->form_validation->set_rules($validation);

    	// Inputs are fine
    	if ($this->form_validation->run() == TRUE)
        {
        	// Set data
        	$data_insert =array(
       			'name' 			=> $this->input->post('user_name'),
       			'email' 		=> $this->input->post('user_mail'),
       			'password' 		=> $this->input->post('user_password'),
       			'mobile' 		=> $this->input->post('user_mobile'),
       			'usertype' 		=> $this->input->post('user_type'),
       			'date_created' 	=> date("Y-m-d")
           	); 
       
         	// Insert
           	$user = $this->m_users->insert_user($data_insert);
           	if ($user)
           	{
           		// Done 
				echo '<script type="text/javascript">
			 	alert("تم الادخال"); window.location.replace("'.base_url().'/users/add_user");
			 	</script>'; 
           	}
           	else
           	{
           		// ERORR
				echo '<script type="text/javascript">
			 	alert("حدث خطأ ما .. أعد المحاولة"); window.location.replace("'.base_url().'/users/add_user");
			 	</script>';   
           	}

        }
        else
        {
        	// Something wrong in validation
	    	if(validation_errors())
	        {
	          	$ERROR['validations']  	= validation_errors();
	        }
	        
        	// Show the page
			$this->data['page_title'] = "Add a new item";
			$this->load->view('admin/static/nav-setup', $this->data);
			$this->load->view('generate/index/add_user', $ERROR);
			$this->load->view('admin/static/footer');

			return 1;     
        }
	}

	/**
	 *
	 * 
	 */
	public function delete_user()
	{
		// Check is there a session 
	 	$this->check_session();

	 	if ($this->input->get('id') && intval($this->input->get('id')) > 0)
	 	{
	 		if ($this->m_users->Delet_user($this->input->get('id')))
	 		{
	 			// Done
				echo '<script type="text/javascript">
			 	alert("تم الحذف"); window.location.replace("'.base_url().'/users");
			 	</script>';  
	 		}
	 		else
	 		{
	 			// Error 
				echo '<script type="text/javascript">
			 	alert("شيئ ما خاطء .. برجاء اعادة المحاولة "); window.location.replace("'.base_url().'/users");
			 	</script>';  
	 		}
	 	}

	 	// Return to show users page
		$this->index();

		return 0;
	}
	
	/**
	 * Check for session
	 * @return Move to Login
	 */
    public function check_session()
    {
        if(! $this->session->has_userdata('email') || ! $this->session->has_userdata('password'))
        {
            //back to this page Login
            header("Location: ".base_url()."login");
        }
    }
}
