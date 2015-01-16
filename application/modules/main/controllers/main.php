<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MX_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('main_model');
	}

	public function index()
	{
		loadBackLayout('main_view');
	}

	function registerUser(){
		if($this->input->post()){
			$this->form_validation->set_error_delimiters('<p class="alert alert-danger">', '</p>');
	    
		    $this->form_validation->set_rules('user_email', 'Email', 'required|xss_clean|trim|valid_email|is_unique[users.user_email]');
		    $this->form_validation->set_rules('user_pass', 'Password', 'required|min_length[5]|max_length[12]');
		    $this->form_validation->set_rules('user_fname', 'Firstname', 'required');
		    $this->form_validation->set_rules('user_lname', 'Lastname', 'required');
		    $this->form_validation->set_rules('user_mobile', 'Mobile', 'required');
		    
		    $this->form_validation->set_message('required', '%s is required');

		    if ($this->form_validation->run() == FALSE){
		      echo json_encode(array("email" 	=> form_error('user_email'),
		                             "password" => form_error('user_pass'),
		                             "fname" 	=> form_error('user_fname'),
		                             "lname" 	=> form_error('user_lname'),
		                             "mobile" 	=> form_error('user_mobile'),
		                             "stats"    => 1
		            ));
		    }else{

		      $user_id = $this->main_model->saveUser($this->input->post());

		      echo json_encode(array("stats" => 0));
		    }
		}else{

		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */