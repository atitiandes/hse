<?php 

class Level extends CI_Controller{

	public function index()
	{

		$data['level'] = $this->level_model->tampil_data()->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/level', $data);
		$this->load->view('templates_administrator/footer');
	}

	// public function input()
	// {
	// 	$data = array(
	// 		'id_level' => set_value('id_level');
	// 		'nama_level' => set_value('nama_level');
	// 		'tingkatan' => set_value('tingkatan');
	// 	);
	// 	$this->load->view('templates_administrator/header');
	// 	$this->load->view('templates_administrator/sidebar');
	// 	$this->load->view('administrator/level_form', $data);
	// 	$this->load->view('templates_administrator/footer');
	// }
}