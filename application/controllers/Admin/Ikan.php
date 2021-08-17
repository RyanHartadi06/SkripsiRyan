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

        $this->form_validation->set_rules('name', 'Nama Ikan', 'required');
        $this->form_validation->set_rules('desc', 'Deskripsi Ikan', 'required');

        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $this->load->view('admin/ikan/add', $data);
        } else {
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '2048';
            $config['upload_path'] = './uploads/ikan/';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $fotobaru = $this->upload->data('file_name');
                $insert = array(
                    'nama_ikan' => $this->input->post('name'),
                    'gambar' =>     $fotobaru,
                    'deskripsi' => $this->input->post('desc'),
                    'created_at' => date("Y-m-d H:i:s")
                );
                if ($this->db->insert('jenis_ikan', $insert)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Data Ikan Berhasil Ditambahkan
					</div>');
                    redirect('Admin/Ikan');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan</div>');
                    redirect('Admin/Ikan');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'
                    . $this->upload->display_errors() .
                    '</div>');
                redirect('Admin/Ikan');
            }
        }
    }
    public function hapus($id)
    {
        $this->db->where('id_jenis', $id);
        $this->db->delete('jenis_ikan');
        $this->session->set_flashdata('message', '<div class="alert alert-success mb-3" role="alert">
		Data Berhasil Dihapus!
		</div>');
        redirect('admin/Ikan');
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('name', 'Nama Ikan', 'required');
        $this->form_validation->set_rules('desc', 'Deskripsi Ikan', 'required');

        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $data['ikan'] = $this->db->query("SELECT * FROM jenis_ikan WHERE id_jenis = '$id'")->row();
            $this->load->view('admin/ikan/edit', $data);
        } else {
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '2048';
            $config['upload_path'] = './uploads/ikan/';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $fotobaru = $this->upload->data('file_name');
                $insert = array(
                    'nama_ikan' => $this->input->post('name'),
                    'gambar' =>     $fotobaru,
                    'deskripsi' => $this->input->post('desc'),
                );
                $this->db->where('id_jenis', $id);
                $this->db->update('jenis_ikan', $insert);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Ikan Berhasil Di Update
                </div>');
                redirect('Admin/Ikan');
            } else {
                $insert = array(
                    'nama_ikan' => $this->input->post('name'),
                    'deskripsi' => $this->input->post('desc'),
                );
                $this->db->where('id_jenis', $id);
                $this->db->update('jenis_ikan', $insert);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Ikan Berhasil Di Update
                </div>');
                redirect('Admin/Ikan');
            }
        }
    }
    public function detail($id)
    {
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();
        $data['ikan'] = $this->db->query("SELECT * FROM jenis_ikan WHERE id_jenis = '$id'")->row();
        $data['karakteristik'] = $this->db->query("SELECT * FROM detail_ikan WHERE id_ikan = '$id'")->result_array();
        $this->load->view('admin/ikan/detail', $data);
    }
}
