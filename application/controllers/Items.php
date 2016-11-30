<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Items extends CI_Controller 
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
	 * 
	 * 
	 */
	public function index()
	{
		// Check is there a session 
	 	$this->check_session();

		$this->load->view('admin/static/nav-setup', $this->data);
		$this->load->view('generate/index/index');
		$this->load->view('admin/static/footer');
	}

	/**
	 * To add a new prodect
	 * into database 'product', 'size', 'color'
	 */
	public function add_item()
	{
		// Check is there a session 
	 	$this->check_session();

		// Didn't click 'submit'
		if (! $this->input->post('Add_item'))
		{
			// Show the page
			$this->data['page_title'] = "Add a new item";
			$this->load->view('admin/static/nav-setup', $this->data);
			$this->load->view('generate/index/form');
			$this->load->view('admin/static/footer');

			return 1;
		}
		
		// Validate inputes 
		$validation = array(
	    	array(
	            'field' => 'project_name',
	            'label' => 'name',
	            'rules' => 'required'
	        ),
	        array(
	            'field' => 'project_desc',
	            'label' => 'description',
	            'rules' => 'required'
	        ),
	         array(
	            'field' => 'project_price',
	            'label' => 'price',
	            'rules' => 'required|numeric'
	        ),
           	array(
	            'field' => 'project_color',
	            'label' => 'color',
	            'rules' => 'required'
	        ),
        	array(
	            'field' => 'project_type',
	            'label' => 'type',
	            'rules' => 'required|numeric'
	        ),
            array(
	            'field' => 'project_size',
	            'label' => 'size',
	            'rules' => 'required'
	        )
    	);

		// Set validation
    	$this->form_validation->set_rules($validation);

    	// Edites of imge 
        $file = array(
            'upload_path'       => $_SERVER['DOCUMENT_ROOT']  . $this->placed . 'Uplods_files/',
            'allowed_types'     => 'gif|jpg|png',
            'file_name'			=> 'khaled ' . date('Y_m_d H_m_s') . ' end',
            'max_size'          => 5500, // 5MB
            'max_width'         => 1360,
            'max_height'        => 768,
        );
		$this->upload->initialize($file);

    	// Inputs are fine
    	if ($this->form_validation->run() && $this->upload->do_upload('project_img'))
        {
        	// file information
            $img = $this->upload->data(); 
         
        	// Set data
           	$data_product = array(
       			'name' 			=> $this->input->post('project_name'),
       			'img' 			=> $img['file_name'],
       			'description' 	=> $this->input->post('project_desc'),
       			'price' 		=> $this->input->post('project_price'),
       			'category_id'	=> $this->input->post('project_type')
           	);
         	
         	// Insert Product table
           	$insert_product = $this->m_items->insert_product($data_product);
			if ($insert_product)
           	{
           		// Set data
           		$data_size = array(
	       			'size_code'  => $this->input->post('project_size'),
	       			'product_id' => $this->db->insert_id()
	   			);
				$data_color = array(
	       			'color_code' => $this->input->post('project_color'),
	       			'product_id' => $this->db->insert_id()
	   			);

				// Insert
           		$insert_size 	= $this->m_items->insert_size($data_size);
				$insert_color 	= $this->m_items->insert_color($data_color);

				if ($insert_size && $insert_color)
				{
					// Done
					echo '<script type="text/javascript">
				 	alert("تم الاخال بنجاح"); window.location.replace("'.base_url().'/items/add_item");
				 	</script>';  
				}
				else
				{
					// Error 
					echo '<script type="text/javascript">
				 	alert("شيئ ما خاطء .. برجاء اعادة المحاولة "); window.location.replace("'.base_url().'/items/add_item");
				 	</script>';  
				}
           	}
           	else
           	{
       		  	// Error 
				echo '<script type="text/javascript">
			 	alert("شيئ ما خاطء .. برجاء اعادة المحاولة "); window.location.replace("'.base_url().'/items/add_item");
			 	</script>';  
           	}
        }
        else
        {
        	// Error
	    	if(validation_errors())
	        {
	          	$ERROR['validations']  	= validation_errors();
	        }
	        if($this->upload->display_errors())
	        {
	            $ERROR['uploads']  		= $this->upload->display_errors();
	        }
        	
        	// Show the page
			$this->data['page_title'] = "Add a new item";
			$this->load->view('admin/static/nav-setup', $this->data);
			$this->load->view('generate/index/form', $ERROR);
			$this->load->view('admin/static/footer');

			return 1;
        }
	}

	/**
	 *
	 * 
	 */
	public function show_items()
	{
		// Check is there a session 
	 	$this->check_session();

		// Show them all
		$show_data['data'] = $this->m_items->join_product_size_color();

		//print_r($show_data['data']);

		// Show the page
		$this->data['page_title'] = "All items ";
		$this->load->view('admin/static/nav-setup', $this->data);
		$this->load->view('admin/drivers/index', $show_data);
		$this->load->view('admin/static/footer');

		return 0;
	}

	/**
	 *
	 * 
	 */
	public function delete_item()
	{
		// Check is there a session 
	 	$this->check_session();

	 	if ($this->input->get('id') && intval($this->input->get('id')) > 0)
	 	{
	 		if ($this->m_items->Delet_product_size_color($this->input->get('id')))
	 		{
	 			// Done
				echo '<script type="text/javascript">
			 	alert("تم الحذف"); window.location.replace("'.base_url().'/items/show_items");
			 	</script>';  
	 		}
	 		else
	 		{
	 			// Error 
				echo '<script type="text/javascript">
			 	alert("شيئ ما خاطء .. برجاء اعادة المحاولة "); window.location.replace("'.base_url().'/items/show_items");
			 	</script>';  
	 		}
	 	}

	 	// Return to show items page
		$this->show_items();

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
