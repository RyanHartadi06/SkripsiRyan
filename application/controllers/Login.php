<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		// $this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			//lakukan pengecekan apakah email terdaftar
			$user = $this->db->get_where('pengguna', ['username' => $username])->row_array();

			if ($user) {
				if ($user['is_active'] == 1) {
					if ($password === $user['password']) {
						if ($user['status'] == 1) {
							// $this->session->set_userdata($data);
							// redirect('fronted/User/Dashboard');
							$data = [
								'id_pengguna' => $user['id_pengguna'],
								'username' => $user['username'],
								'status' => $user['status'],
							];
							$this->session->set_userdata($data);
							redirect('Admin/Profil');
						} else {
							$data = [
								'id_pengguna' => $user['id_pengguna'],
								'username' => $user['username'],
								'status' => $user['status'],
							];

							$this->session->set_userdata($data);
							redirect('User/Dashboard');
						}
					} else {
						$this->session->set_flashdata(
							'message',
							'<div class="alert alert-danger mb-3" role="alert">Wrong Password!</div>'
						);
						redirect('Login');
					}
				} else {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger mb-3" role="alert">Akun anda telah terblokir!</div>'
					);
					redirect('Login');
				}
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger mb-3" role="alert">Email Not Registered</div>'
				);
				redirect('Login');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_pengguna');
		$this->session->unset_userdata('username');
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success" role="alert">Logout Sucessfull!</div>'
		);
		redirect('Login');
	}
	public function register()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('nik', 'Nik', 'required|is_unique[pengguna.nik]');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|is_unique[pengguna.no_telp]');
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[pengguna.username]');

		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$nik = $this->input->post('nik');
			$no_telp = $this->input->post('no_telp');
			$alamat = $this->input->post('alamat');
			$password = md5($this->input->post('password'));
			//lakukan pengecekan apakah email terdaftar

			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$config['max_size'] = '2048';
			$config['upload_path'] = './uploads/user/';
			$config['encrypt_name'] = TRUE;
			$this->load->library('upload', $config);
			if ($this->upload->do_upload('gambar')) {
				$fotobaru = $this->upload->data('file_name');
				$data = [
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
					'nik' => $nik,
					'no_telp' => $no_telp,
					'foto' =>     $fotobaru,
					'is_active' => 1,
					'alamat' => $alamat,
					'status' => 2,
					'created_at' => date('Y-m-d H:i:s')
				];
				$this->db->insert('pengguna', $data);
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success mb-3" role="alert">Account Successfully Registered</div>'
				);
				redirect('Login');
			} else {
				$data = [
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
					'nik' => $nik,
					'no_telp' => $no_telp,
					'alamat' => $alamat,
					'foto' =>     '',
					'status' => 2,
					'is_active' => 1,
					'created_at' => date('Y-m-d H:i:s')
				];
				$this->db->insert('pengguna', $data);
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success mb-3" role="alert">Account Successfully Registered</div>'
				);
				redirect('Login');
			}
		}
	}
}
