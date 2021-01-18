<?php 

class Listjadwal extends CI_Controller{

	public function index()
	{
		$data['listjadwal'] = $this->listjadwal_model->tampil_data('listjadwal')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/listjadwal', $data);
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_listjadwal()
	{
		// $data['hari1'] = $this->listjadwal_model->tampil_data('hari1')->result();
		// $data['waktu_mulai1'] = $this->listjadwal_model->tampil_data('waktu_mulai1')->result();
		// $data['waktu_selesai1'] = $this->listjadwal_model->tampil_data('waktu_selesai1')->result();
		// $data['hari2'] = $this->listjadwal_model->tampil_data('hari2')->result();
		// $data['waktu_mulai2'] = $this->listjadwal_model->tampil_data('waktu_mulai2')->result();
		// $data['waktu_selesai2'] = $this->listjadwal_model->tampil_data('waktu_selesai2')->result();
		// $data['hari3'] = $this->listjadwal_model->tampil_data('hari3')->result();
		// $data['waktu_mulai3'] = $this->listjadwal_model->tampil_data('waktu_mulai3')->result();
		// $data['waktu_selesai3'] = $this->listjadwal_model->tampil_data('waktu_selesai3')->result();
		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/listjadwal_form');
		$this->load->view('templates_administrator/footer');
	}

	public function tambah_listjadwal_aksi()
	{
		$this->_rules();
		if($this->form_validation->run() == FALSE)
		{
			$this->tambah_listjadwal();
		}
		else
		{
			$hari1 = $this->input->post('hari1');
			$waktu_mulai1 = $this->input->post('waktu_mulai1');
			$waktu_selesai1 = $this->input->post('waktu_selesai1');
			$hari2 = $this->input->post('hari2');
			$waktu_mulai2 = $this->input->post('waktu_mulai2');
			$waktu_selesai2 = $this->input->post('waktu_selesai2');
			$hari3 = $this->input->post('hari3');
			$waktu_mulai3 = $this->input->post('waktu_mulai3');
			$waktu_selesai3 = $this->input->post('waktu_selesai3');

			$data = array(
				'hari1' => $hari1,
				'waktu_mulai1' => $waktu_mulai1,
				'waktu_selesai1' => $waktu_selesai1,
				'hari2' => $hari2,
				'waktu_mulai2' => $waktu_mulai2,
				'waktu_selesai2' => $waktu_selesai2,
				'hari3' => $hari3,
				'waktu_mulai3' => $waktu_mulai3,
				'waktu_selesai3' => $waktu_selesai3,
			);

			
			$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data List Jadwal berhasil ditambahkan.<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/listjadwal');
	}
}

	public function _rules()
	{
		$this->form_validation->set_rules('hari1', 'hari1', 'required', ['required' => 'Hari wajib diisi']);
		$this->form_validation->set_rules('waktu_mulai1', 'waktu_mulai1', 'required', ['required' => 'Waktu mulai wajib diisi']);
		$this->form_validation->set_rules('waktu_selesai1', 'waktu_selesai1', 'required', ['required' => 'Waktu selesai wajib diisi']);
		$this->form_validation->set_rules('hari2', 'hari2', 'required', ['required' => 'Hari wajib diisi']);
		$this->form_validation->set_rules('waktu_mulai2', 'waktu_mulai2', 'required', ['required' => 'Waktu mulai wajib diisi']);
		$this->form_validation->set_rules('waktu_selesai2', 'waktu_selesai2', 'required', ['required' => 'Waktu selesai wajib diisi']);
		$this->form_validation->set_rules('hari3', 'hari3', 'required', ['required' => 'Hari wajib diisi']);
		$this->form_validation->set_rules('waktu_mulai3', 'waktu_mulai3', 'required', ['required' => 'Waktu mulai wajib diisi']);
		$this->form_validation->set_rules('waktu_selesai3', 'waktu_selesai3', 'required', ['required' => 'Waktu selesai wajib diisi']);
	}

	public function update($id)
	{
		$where = array('id_listjadwal' => $id);


		$this->load->view('templates_administrator/header');
		$this->load->view('templates_administrator/sidebar');
		$this->load->view('administrator/listjadwal_update');
		$this->load->view('templates_administrator/footer');
	}

	public function update_aksi()
	{
		$id = $this->input->post('id_listjadwal');
		$id_listjadwal = $this->input->post('id_listjadwal');
		$nama_matakuliah = $this->input->post('nama_matakuliah');
		$hari1 = $this->input->post('hari1');

		$waktu_mulai1 = $this->input->post('waktu_mulai1');

		$hari2 = $this->input->post('hari2');

		$waktu_mulai2 = $this->input->post('waktu_mulai2');
		$waktu_selesai2 = $this->input->post('waktu_selesai2');
		$hari3 = $this->input->post('hari3');

		$waktu_mulai3 = $this->input->post('waktu_mulai3');
		$waktu_selesai3 = $this->input->post('waktu_selesai3');

		$data = array(
			'id_listjadwal' => $id_listjadwal,
			'hari1' => $hari1,
			'waktu_mulai1' => $waktu_mulai1,
			'waktu_selesai1' => $waktu_selesai1,

			'hari2' => $hari2,
			'waktu_mulai2' => $waktu_mulai2,
			'waktu_selesai2' => $waktu_selesai2,
			'hari3' => $hari3,
			'waktu_mulai3' => $waktu_mulai3,
			'waktu_selesai3' => $waktu_selesai3,
		);

		$where = array(
			'id_listjadwal' => $id
		);

		$this->listjadwal_model->update_data($where, $data, 'listjadwal');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible fade show" role="alert">Data List Jadwal Berhasil Diupdate!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('administrator/matakuliah');
	}

	public function delete($id) {
	
		$where = array('id_listjadwal' => $id);
		$this->listjadwal_model->hapus_data($where, 'listjadwal');
		$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">Data List Jadwal Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;
			</span></button></div>');
		redirect('administrator/listjadwal');
	}
}