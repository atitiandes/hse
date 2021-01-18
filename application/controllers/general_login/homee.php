<?php 

class Homee extends CI_Controller{

	public function index()
	{
	
		$this->load->view('templates_general/header');
		$this->load->view('templates_general/navbar_login');
		$this->load->view('general_login/homee');
		$this->load->view('templates_general/footer');
		
	}
}