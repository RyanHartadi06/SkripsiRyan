<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {

        $this->load->view('admin/tambahdata/add');
    }
    public function post()
    {

        $arr = [
            'judul' => $this->input->post('name'),
            'lokasi' => $this->input->post('lokasi'),
            'nama_kolam' => $this->input->post('nama_kolam'),
            'deskripsi' => $this->input->post('desc'),
            'CreatedDate' => date('Y-m-d H:i:s'),
            'status' => 'OFF'
        ];
        $insert = $this->db->insert('data', $arr);
        if ($insert) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan !
             </div>');
            redirect('frontend/Proses');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Data Gagal Ditambahkan !
             </div>');
            redirect('frontend/Proses');
        }
    }
}
