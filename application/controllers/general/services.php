<?php 

class Services extends CI_Controller{

	public function index()
	{
	
		$this->load->view('templates_general/header');
		$this->load->view('templates_general/navbar');
		$this->load->view('general/services');
		$this->load->view('templates_general/footer');
		
	}
}