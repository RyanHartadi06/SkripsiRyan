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
    public function add()
    {
        $this->form_validation->set_rules('ph', 'Ph Air', 'required');
        $this->form_validation->set_rules('suhu', 'Suhu Air', 'required');
        $this->form_validation->set_rules('tds', 'Tds', 'required');
        $this->form_validation->set_rules('do', 'Do', 'required');
        $this->form_validation->set_rules('salinity', 'Salinity', 'required');

        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $data['var'] = $this->db->query("SELECT * FROM variabel")->result_array();
            $this->load->view('admin/fuzzy/add', $data);
        } else {
            $data = [
                'ph' => $this->input->post('ph'),
                'suhu' => $this->input->post('suhu'),
                'tds' => $this->input->post('tds'),
                'do' => $this->input->post('do'),
                'salinity' => $this->input->post('salinity'),
                'grade' => $this->input->post('grade'),
            ];
            $this->db->insert('rules', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Ditambahkan
        </div>');
            redirect('Admin/Fuzzy');
        }
    }
    public function hapus($id)
    {
        $this->db->where('id_rules', $id);
        $this->db->delete('rules');
        $this->session->set_flashdata('message', '<div class="alert alert-success mb-3" role="alert">
		Data Berhasil Dihapus!
		</div>');
        redirect('admin/Fuzzy');
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('ph', 'Ph Air', 'required');
        $this->form_validation->set_rules('suhu', 'Suhu Air', 'required');
        $this->form_validation->set_rules('tds', 'Tds', 'required');
        $this->form_validation->set_rules('do', 'Do', 'required');
        $this->form_validation->set_rules('salinity', 'Salinity', 'required');

        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $data['var'] = $this->db->query("SELECT * FROM variabel")->result_array();
            $data['fuzzy'] = $this->db->query("SELECT * FROM rules WHERE id_rules = '$id'")->row();
            $this->load->view('admin/fuzzy/edit', $data);
        } else {
            $data = [
                'ph' => $this->input->post('ph'),
                'suhu' => $this->input->post('suhu'),
                'tds' => $this->input->post('tds'),
                'do' => $this->input->post('do'),
                'salinity' => $this->input->post('salinity'),
                'grade' => $this->input->post('grade'),
            ];
            $this->db->where('id_rules', $id);
            $this->db->update('rules', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Di Ubah
        </div>');
            redirect('Admin/Fuzzy');
        }
    }
}
