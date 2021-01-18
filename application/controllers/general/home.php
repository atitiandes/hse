<?php 

class Home extends CI_Controller{

	public function index()
	{
	
		$this->load->view('templates_general/header');
		$this->load->view('templates_general/navbar');
		$this->load->view('general/home');
		$this->load->view('templates_general/footer');
		
	}
}