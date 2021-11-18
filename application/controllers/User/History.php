<?php
defined('BASEPATH') or exit('No direct script access allowed');

class History extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        belumlogin();
        error_reporting(0);
    }
    public function index()
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $id = $data['Pengguna']['id_pengguna'];
        $data['data'] = $this->db->query("SELECT * FROM perhitungan , data WHERE perhitungan.id_data = data.id AND data.id_user = '$id' GROUP BY perhitungan.created_at DESC")->result_array();
        $this->load->view('user/history/index',  $data);
    }
    public function detail($id_perhitungan)
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $data['ikan'] = $this->db->query("SELECT * FROM perhitungan WHERE id_perhitungan = '$id_perhitungan'")->row();
        $data['data'] = $this->db->query("SELECT * FROM rules,rules_grade WHERE rules.id_rules = rules_grade.id_rules AND rules_grade.id_perhitungan = '$id_perhitungan'")->result_array();
        $data['nilai_min'] = $this->db->query("SELECT * FROM  nilai_min WHERE nilai_min.id_perhitungan = '$id_perhitungan'")->result_array();
        $this->load->view('user/perhitungan/detail', $data);
    }
    public function hapus($id)
    {
        $this->db->where('id_perhitungan', $id);
        $this->db->delete('nilai_min');
        $this->db->where('id_perhitungan', $id);
        $this->db->delete('perhitungan');
        $this->db->where('id_perhitungan', $id);
        $this->db->delete('rules_grade');
        $this->session->set_flashdata('message', '<div class="alert alert-success mb-3" role="alert">
            Data Berhasil Dihapus!
            </div>');
        redirect('User/History');
    }
}
