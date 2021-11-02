<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
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
        $id = $data['Pengguna']['id_pengguna'];
        $data['data'] = $this->db->query("SELECT * FROM data WHERE id_user = $id GROUP BY id DESC ")->result_array();
        $this->load->view('user/tambahdata/data',  $data);
    }
    public function add()
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $this->load->view('user/tambahdata/add', $data);
    }
    public function post()
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $id_user = $data['Pengguna']['id_pengguna'];
        $arr = [
            'judul' => $this->input->post('name'),
            'id_user' => $id_user,
            'lokasi' => $this->input->post('lokasi'),
            'nama_kolam' => $this->input->post('nama_kolam'),
            'deskripsi' => $this->input->post('desc'),
            'status' => 1,
            'CreatedDate' => date('Y-m-d H:i:s'),
        ];
        $insert = $this->db->insert('data', $arr);
        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan !
             </div>');
            redirect('User/Data');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Gagal Ditambahkan !
             </div>');
            redirect('User/Data');
        }
    }
}
