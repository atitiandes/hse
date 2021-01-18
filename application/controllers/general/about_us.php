<?php 

class About_us extends CI_Controller{

	public function index()
	{
	
		$this->load->view('templates_general/header');
		$this->load->view('templates_general/navbar');
		$this->load->view('general/about_us');
		$this->load->view('templates_general/footer');
		
	}
}