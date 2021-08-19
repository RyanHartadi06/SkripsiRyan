<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fuzzy extends CI_Controller
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
        $data['fuzzy'] = $this->db->query("SELECT * FROM rules")->result_array();
        $this->load->view('admin/fuzzy/index', $data);
    }
}
