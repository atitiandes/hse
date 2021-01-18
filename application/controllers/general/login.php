<?php 

class Login extends CI_Controller{

	public function index()
	{
	
		$this->load->view('templates_general/header');
		$this->load->view('templates_general/navbar');
		$this->load->view('general/login');
		$this->load->view('templates_general/footer');
		
	}
}