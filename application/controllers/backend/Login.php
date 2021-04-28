<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		// $this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {
			// $email = $this->input->post('email');
			// $password = md5($this->input->post('password'));

			// //lakukan pengecekan apakah email terdaftar
			// $user = $this->db->get_where('users', ['email' => $email])->row_array();

			// if ($user) {
			// 	if ($password === $user['password']) {
			// 		$data = [
			// 			'id' => $user['id'],
			// 			'name' => $user['name'],
			// 		];
			// 		$this->session->set_userdata($data);
			// echo json_encode($data);
			redirect('frontend/Dashboard');
			// 	} else {
			// 		$this->session->set_flashdata(
			// 			'message',
			// 			'<div class="alert alert-danger mb-3" role="alert">Wrong Password!</div>'
			// 		);
			// 		redirect('admin/Login');
			// 	}
			// } else {
			// 	$this->session->set_flashdata(
			// 		'message',
			// 		'<div class="alert alert-danger mb-3" role="alert">Email Not Registered</div>'
			// 	);
			// 	redirect('admin/Login');
			// }
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('name');
		$this->session->set_flashdata(
			'message',
			'<div class="alert alert-success" role="alert">Logout Sucessfull!</div>'
		);
		redirect('backend/Login');
	}
}
