<?php 

	function pr($str){
		echo "<pre>";
			print_r($str);
		echo "</pre>";		
	}

	function loadBackLayout($view, $data=false){
		$ci =& get_instance();
		$ci->load->view('backend/header_view', $data);
		$ci->load->view($view, $data);
		$ci->load->view('backend/footer_view', $data);
	}
	
	function assets_url(){
		echo base_url().'assets/';
	}

/*	function isLoggedIn(){
		$ci =& get_instance();
		if($ci->session->userdata('logged_in') != TRUE){
			redirect(base_url('login'));
	 	}
	}*/

?>