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

		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$nama = $this->input->post('nama');
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));
			//lakukan pengecekan apakah email terdaftar
			$user = $this->db->get_where('pengguna', ['username' => $username])->row_array();
			if (!$user) {
				$data = [
					'nama' => $nama,
					'username' => $username,
					'password' => $password,
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
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger mb-3" role="alert">User Registered</div>'
				);
				redirect('Login');
			}
		}
	}
}
