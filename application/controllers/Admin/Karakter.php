<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karakter extends CI_Controller
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
        $data['ikan'] = $this->db->query("SELECT detail_ikan.* , jenis_ikan.nama_ikan FROM jenis_ikan , detail_ikan WHERE detail_ikan.id_ikan = jenis_ikan.id_jenis")->result_array();
        $this->load->view('admin/karakter/index', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('ph', 'PH', 'required');
        $this->form_validation->set_rules('tds', 'TDS', 'required');
        $this->form_validation->set_rules('suhu', 'Suhu', 'required');
        $this->form_validation->set_rules('do', 'Do', 'required');
        $this->form_validation->set_rules('salinity', 'Salinity', 'required');

        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $data['ikan'] = $this->db->query("SELECT * FROM jenis_ikan")->result_array();
            $this->load->view('admin/karakter/add', $data);
        } else {
            $data = [
                'id_ikan' => $this->input->post('ikan'),
                'ph' => $this->input->post('ph'),
                'tds' => $this->input->post('tds'),
                'suhu' => $this->input->post('suhu'),
                'do' => $this->input->post('do'),
                'salinity' => $this->input->post('salinity'),
                'grade' => $this->input->post('grade'),
            ];
            $this->db->insert('detail_ikan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Karakter Berhasil Ditambahkan
          </div>');
            redirect('Admin/Karakter');
        }
    }
    public function hapus($id)
    {
        $this->db->where('id_detail', $id);
        $this->db->delete('detail_ikan');
        $this->session->set_flashdata('message', '<div class="alert alert-success mb-3" role="alert">
		Data Berhasil Dihapus!
		</div>');
        redirect('admin/Karakter');
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('ph', 'PH', 'required');
        $this->form_validation->set_rules('tds', 'TDS', 'required');
        $this->form_validation->set_rules('suhu', 'Suhu', 'required');
        $this->form_validation->set_rules('do', 'Do', 'required');
        $this->form_validation->set_rules('salinity', 'Salinity', 'required');

        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $data['ikan'] = $this->db->query("SELECT * FROM jenis_ikan")->result_array();
            $data['data'] = $this->db->query("SELECT * FROM detail_ikan WHERE id_detail = '$id'")->row();
            $this->load->view('admin/karakter/edit', $data);
        } else {
            $data = [
                'id_ikan' => $this->input->post('ikan'),
                'ph' => $this->input->post('ph'),
                'tds' => $this->input->post('tds'),
                'suhu' => $this->input->post('suhu'),
                'do' => $this->input->post('do'),
                'salinity' => $this->input->post('salinity'),
                'grade' => $this->input->post('grade'),
            ];
            $this->db->where('id_detail', $id);
            $this->db->update('detail_ikan', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Karakter Berhasil Di Ubah
          </div>');
            redirect('Admin/Karakter');
        }
    }
}
