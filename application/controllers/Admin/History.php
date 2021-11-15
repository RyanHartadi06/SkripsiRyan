<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
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
        $data['data'] = $this->db->query("SELECT * FROM perhitungan , data , pengguna WHERE perhitungan.id_data = data.id AND pengguna.id_pengguna = data.id_user GROUP BY perhitungan.created_at DESC")->result_array();
        $this->load->view('admin/history/index',  $data);
    }
    public function detail($id_perhitungan)
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $data['ikan'] = $this->db->query("SELECT * FROM perhitungan WHERE id_perhitungan = '$id_perhitungan'")->row();
        $data['data'] = $this->db->query("SELECT * FROM rules, nilai_min,rules_grade WHERE nilai_min.id_min = rules_grade.id_rules_grade AND rules.id_rules = rules_grade.id_rules AND nilai_min.id_perhitungan = '$id_perhitungan'")->result_array();
        $this->load->view('admin/history/detail', $data);
    }
}
