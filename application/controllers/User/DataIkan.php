<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DataIkan extends CI_Controller
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
        $data['ikan'] = $this->db->query("SELECT * FROM jenis_ikan")->result_array();
        $this->load->view('user/ikan/index', $data);
    }
    public function detail($id)
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $data['ikan'] = $this->db->query("SELECT * FROM jenis_ikan WHERE id_jenis = '$id'")->row();
        $data['karakteristik'] = $this->db->query("SELECT * FROM detail_ikan WHERE id_ikan = '$id'")->result_array();
        $this->load->view('user/ikan/detail', $data);
    }
}
