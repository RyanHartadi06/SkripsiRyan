<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Models', 'Model');
		$this->load->model('Models', 'Model');
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('login');
		} else {
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));

			//lakukan pengecekan apakah email terdaftar
			$user = $this->db->get_where('pengguna', ['email' => $email])->row_array();

			if ($user) {
				if ($user['is_active'] == 1) {
					if ($password === $user['password']) {
						if ($user['status'] == 1) {
							// $this->session->set_userdata($data);
							// redirect('fronted/User/Dashboard');
							$data = [
								'id_pengguna' => $user['id_pengguna'],
								'email' => $user['email'],
								'status' => $user['status'],
							];
							$this->session->set_userdata($data);
							redirect('Admin/Profil');
						} else {
							$data = [
								'id_pengguna' => $user['id_pengguna'],
								'email' => $user['email'],
								'status' => $user['status'],
							];

							$this->session->set_userdata($data);
							redirect('User/Dashboard');
						}
					} else {
						$this->session->set_flashdata(
							'message',
							'<div class="alert alert-danger mb-3" role="alert">Password Anda Salah!</div>'
						);
						redirect('Login');
					}
				} else if ($user['is_active'] == 0) {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger mb-3" role="alert">Akun Belum Aktif, Silahkan Cek Email Anda</div>'
					);
					redirect('Login/verification?email=' . $email);
				} else {
					$this->session->set_flashdata(
						'message',
						'<div class="alert alert-danger mb-3" role="alert">Akun anda telah terblokir! Silahkan hubungi Admin!</div>'
					);
					redirect('Login');
				}
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger mb-3" role="alert">Email Tidak Terdaftar</div>'
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
			'<div class="alert alert-success" role="alert">Berhasil Logout!</div>'
		);
		redirect('Login');
	}
	public function register()
	{
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('no_telp', 'Nomor Telepon', 'required|is_unique[pengguna.no_telp]');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[pengguna.email]');

		if ($this->form_validation->run() == false) {
			$this->load->view('register');
		} else {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$no_telp = $this->input->post('no_telp');
			$alamat = $this->input->post('alamat');
			$kodeOTP = $this->Model->randomkode(6);
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
					'email' => $email,
					'password' => $password,
					'no_telp' => $no_telp,
					'foto' =>     $fotobaru,
					'is_active' => 0,
					'alamat' => $alamat,
					'status' => 2,
					'kode_otp' => $kodeOTP,
					'created_at' => date('Y-m-d H:i:s')
				];
				$this->db->insert('pengguna', $data);
				$this->sendEmail($email);
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success mb-3" role="alert">Akun Berhasil Register Silahkan Cek Email Anda</div>'
				);
				redirect('Login/Verification?email=' . $email);
			} else {
				$data = [
					'nama' => $nama,
					'email' => $email,
					'password' => $password,
					'no_telp' => $no_telp,
					'alamat' => $alamat,
					'foto' =>     '',
					'status' => 2,
					'is_active' => 0,
					'kode_otp' => $kodeOTP,
					'created_at' => date('Y-m-d H:i:s')
				];
				$this->db->insert('pengguna', $data);
				$this->sendEmail($email);

				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success mb-3" role="alert">Akun Berhasil Register Silahkan Cek Email Anda</div>'
				);
				redirect('Login/verification?email=' . $email);
			}
		}
	}
	public function verification()
	{
		$email = $_GET['email'];
		$this->sendEmail($email);
		$this->load->view('verifikasi', $email);
	}
	public function update()
	{
		$email = $this->input->post('email');
		$kode = $this->input->post('kode');
		$user = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		if ($user['kode_otp'] == $kode) {
			$insert = array(
				'is_active' => 1
			);
			$this->db->where('email', $email);
			$this->db->update('pengguna', $insert);
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success mb-3" role="alert">Akun Berhasil Aktif</div>'
			);
			redirect('Login');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success mb-3" role="alert">Kode OTP Salah</div>'
			);
			redirect('Login/verification?email=' . $email);
		}
	}
	public function sendEmail($email)
	{
		$user = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		$this->load->library('email');
		$config = [
			'protocol'  => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_user' => 'firebase.bimatech@gmail.com',
			'smtp_pass' => 'bima1234',
			'smtp_port' => 465,
			'mailtype'  => 'html',
			'charset'   => 'utf-8',
			'newline'   => "\r\n"
		];

		$this->email->initialize($config);

		$this->email->from('firebase.bimatech@gmail.com', 'Admin SPK Pemilihan Koi');

		$data = array(

			'userName' => $user['nama'],
			'kodeOTP' => $user['kode_otp'],

		);
		$this->email->to($email);
		$this->email->subject('SPK Pemilihan Jenis Ikan Koi');
		$this->email->message('SPK Pemilihan Jenis Ikan Koi');
		$body = $this->load->view('temp_pass.php', $data, TRUE);

		$this->email->message($body);
		if ($this->email->send()) {
			// echo 'Sukses';
		} else {
			echo $this->email->print_debugger();
			die;
		}
	}
	public function verificationlupapass()
	{
		$email = $_GET['email'];
		$this->sendEmail($email);
		$this->load->view('sendOTP', $email);
	}
	public function Lupapass()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('lupapass');
		} else {
			$email = $this->input->post('email');

			//lakukan pengecekan apakah email terdaftar
			$user = $this->db->get_where('pengguna', ['email' => $email])->row_array();
			if ($user) {
				$this->sendEmail($user['email']);
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-success mb-3" role="alert">Kode OTP telah dikirim melalui email</div>'
				);
				redirect('Login/verificationlupapass?email=' . $email);
			} else {
				$this->session->set_flashdata(
					'message',
					'<div class="alert alert-danger mb-3" role="alert">Email Tidak Ditemukan</div>'
				);
				redirect('Login');
			}
		}
	}
	public function kirimOTP()
	{
		$email = $this->input->post('email');
		$kode = $this->input->post('kode');
		$user = $this->db->get_where('pengguna', ['email' => $email])->row_array();
		if ($user['kode_otp'] == $kode) {
			//pindah halaman form password
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success mb-3" role="alert">Kode OTP Anda Benar. Silahkan Update Password</div>'
			);
			redirect('Login/viewupdate?email=' . $email);
		} else {
			//
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger mb-3" role="alert">Kode OTP Salah</div>'
			);
			redirect('Login/verificationlupapass?email=' . $email);
		}
	}
	public function viewupdate()
	{
		$email = $_GET['email'];
		$this->load->view('updatepass', $email);
	}
	public function updatepass()
	{
		$p = $this->input->post('pass1');
		$q = $this->input->post('pass2');
		$email = $this->input->post('email');
		if ($p == $q) {
			$pass = md5($this->input->post('pass1'));
			$this->db->set('password', $pass);
			$this->db->where('email', $email);
			$this->db->update('pengguna');
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-success mb-3" role="alert">Update Password Berhasil</div>'
			);
			redirect('Login');
		} else {
			$this->session->set_flashdata(
				'message',
				'<div class="alert alert-danger mb-3" role="alert">Password Tidak Sesuai</div>'
			);
			redirect('Login/viewupdate?email=' . $email);
		}
	}
}
