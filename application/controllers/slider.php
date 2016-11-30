<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller 
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
	 * Show the slides
	 */
	public function index()
	{
		// Check is there a session 
	 	$this->check_session();

	 	// Show them all
		$show_data['data'] = $this->m_slider->show_slides();
		
		// Show the page
		$this->data['page_title'] = "All Slides";
		$this->load->view('admin/static/nav-setup', $this->data);
		$this->load->view('admin/drivers/sliding', $show_data);
		$this->load->view('admin/static/footer');

		return 0;
	}

	/**
	 *
	 * 
	 */
	public function add_slide()
	{
		// Check is there a session 
	 	$this->check_session();

		// Didn't click 'submit'
		if (! $this->input->post('Add_slide'))
		{
			// Show the page
			$this->data['page_title'] = "Add a new slide";
			$this->load->view('admin/static/nav-setup', $this->data);
			$this->load->view('generate/index/add_slide');
			$this->load->view('admin/static/footer');

			return 1;
		}

    	// Edites of imge 
        $file = array(
            'upload_path'       => $_SERVER['DOCUMENT_ROOT']  . $this->placed . 'Uplods_files/slides/',
            'allowed_types'     => 'gif|jpg|png',
            'file_name'			=> 'khaled ' . date('Y_m_d H_m_s') . ' end',
            'max_size'          => 7700, // 7MB
            'max_width'         => 1360,
            'max_height'        => 768,
        );
		$this->upload->initialize($file);

    	// Inputs are fine
    	if ($this->upload->do_upload('slide_img'))
        {
        	// file information
            $img = $this->upload->data(); 
         
        	// Set data
           	$data_img = array(
       			'img' 			=> $img['file_name'],
           	);
         	
         	// Insert slider table
           	$insert_slide = $this->m_slider->insert_slide($data_img);
			if ($insert_slide)
           	{
				// Done
				echo '<script type="text/javascript">
			 	alert("تم الاخال بنجاح"); window.location.replace("'.base_url().'/slider");
			 	</script>';  
           	}
           	else
			{
				// Error 
				echo '<script type="text/javascript">
			 	alert("شيئ ما خاطء .. برجاء اعادة المحاولة "); window.location.replace("'.base_url().'/slider/add_slide");
			 	</script>';  
			}
       	}
	   	else
       	{
   		  	// Error 
			echo '<script type="text/javascript">
		 	alert("شيئ ما خاطء .. برجاء اعادة المحاولة "); window.location.replace("'.base_url().'/slider/add_slide");
		 	</script>';  
       	}
	}

	/**
	 *
	 * 
	 */
	public function delete_slide()
	{
		// Check is there a session 
	 	$this->check_session();

	 	if ($this->input->get('id') && intval($this->input->get('id')) > 0)
	 	{
	 		if ($this->m_slider->Delet_slide($this->input->get('id')))
	 		{
	 			// Done
				echo '<script type="text/javascript">
			 	alert("تم الحذف"); window.location.replace("'.base_url().'/slider");
			 	</script>';  
	 		}
	 		else
	 		{
	 			// Error 
				echo '<script type="text/javascript">
			 	alert("شيئ ما خاطء .. برجاء اعادة المحاولة "); window.location.replace("'.base_url().'/slider");
			 	</script>';  
	 		}
	 	}

	 	// Return to show slider page
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
