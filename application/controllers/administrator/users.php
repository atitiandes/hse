<?php  

class Users extends CI_Controller
{
	public function index()
	{
		$data['user'] = $this->user_model->tampil_data('user')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/users', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_users()
	{
		$data = array(
			'username' => set_value('username'),
			'password' => set_value('password'),
			'email' => set_value('email'),
			'level' => set_value('level'),
			// 'blokir' => set_value('blokir'),
		
		);
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/users_form', $data);
		// $this->load->view('administrator/users_form');
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_users_aksi()
	{
		$this->_rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_users();
		}
		else
		{
			$data = array(
				'username' => $this->input->post('username', TRUE),
				'password' => md5($this->input->post('password', TRUE)),
				'email' => $this->input->post('email', TRUE),
				'level' => $this->input->post('level', TRUE),
				// 'blokir' => $this->input->post('blokir', TRUE),
				// 'id_session' => md5($this->input->post('id_session', TRUE)),

			);

			$this->user_model->insert_data($data,'user');
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">User Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/users');
		}


	}
	public function _rules()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('level', 'Level', 'required');
		// $this->form_validation->set_rules('blokir', 'Blokir', 'required');
	
	}
}