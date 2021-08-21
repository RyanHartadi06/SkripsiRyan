<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belumlogin();
    }
    public function index()
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $qq = $data['Pengguna']['id_pengguna'];
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[konfirmasi]', ['min_length' => 'Password too short']);
        $this->form_validation->set_rules('konfirmasi', 'Konfirmasi password', 'required|trim|min_length[3]|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $qq = $data['Pengguna']['id_pengguna'];
            $data['users'] = $this->db->query("SELECT * FROM pengguna WHERE id_pengguna = '$qq'")->row();
            $this->load->view('user/user/index', $data);
        } else {
            $data = [
                'nama' => $this->input->post('name'),
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
            ];
            $this->db->where('id_pengguna', $qq);
            $this->db->update('pengguna', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Di Ubah
        </div>');
            redirect('User/Akun');
        }
    }
}
