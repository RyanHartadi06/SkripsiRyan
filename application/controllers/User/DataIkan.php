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
        $this->load->view('user/ikan/index', $data);
    }
}
