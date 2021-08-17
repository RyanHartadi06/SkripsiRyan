<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belumlogin_admin();
    }
    public function index()
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $data['ikan'] = $this->db->query("SELECT * FROM jenis_ikan")->result_array();
        $this->load->view('admin/ikan/index', $data);
    }
    public function add()
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
    }
}
