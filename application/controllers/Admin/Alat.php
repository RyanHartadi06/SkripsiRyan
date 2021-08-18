<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alat extends CI_Controller
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
        $data['alat'] = $this->db->query("SELECT * FROM alat")->result_array();
        $this->load->view('admin/alat/index', $data);
    }
    public function add()
    {
        $this->form_validation->set_rules('name', 'Nama Alat', 'required');
        $this->form_validation->set_rules('desc', 'Deskripsi Ialat', 'required');

        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $this->load->view('admin/alat/add', $data);
        } else {
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '2048';
            $config['upload_path'] = './uploads/alat/';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $fotobaru = $this->upload->data('file_name');
                $insert = array(
                    'nama_alat' => $this->input->post('name'),
                    'gambar' =>     $fotobaru,
                    'deskripsi' => $this->input->post('desc'),
                    'created_at' => date("Y-m-d H:i:s")
                );
                if ($this->db->insert('alat', $insert)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					  Data Alat Berhasil Ditambahkan
					</div>');
                    redirect('Admin/Alat');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Terjadi Kesalahan</div>');
                    redirect('Admin/Alat');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'
                    . $this->upload->display_errors() .
                    '</div>');
                redirect('Admin/Alat');
            }
        }
    }
    public function hapus($id)
    {
        $this->db->where('id_alat', $id);
        $this->db->delete('alat');
        $this->session->set_flashdata('message', '<div class="alert alert-success mb-3" role="alert">
		Data Berhasil Dihapus!
		</div>');
        redirect('admin/Alat');
    }
    public function edit($id)
    {
        $this->form_validation->set_rules('name', 'Nama Alat', 'required');
        $this->form_validation->set_rules('desc', 'Deskripsi Alat', 'required');

        if ($this->form_validation->run() == false) {
            $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
            $this->session->userdata('id_pengguna')])->row_array();
            $data['alat'] = $this->db->query("SELECT * FROM alat WHERE id_alat = '$id'")->row();
            $this->load->view('admin/alat/edit', $data);
        } else {
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '2048';
            $config['upload_path'] = './uploads/alat/';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('gambar')) {
                $fotobaru = $this->upload->data('file_name');
                $insert = array(
                    'nama_alat' => $this->input->post('name'),
                    'gambar' =>     $fotobaru,
                    'deskripsi' => $this->input->post('desc'),
                    'created_at' => date("Y-m-d H:i:s")
                );
                $this->db->where('id_alat', $id);
                $this->db->update('alat', $insert);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Alat Berhasil Di Update
                </div>');
                redirect('Admin/Alat');
            } else {
                $insert = array(
                    'nama_alat' => $this->input->post('name'),
                    'deskripsi' => $this->input->post('desc'),
                );
                $this->db->where('id_alat', $id);
                $this->db->update('alat', $insert);
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Alat Berhasil Di Update
                </div>');
                redirect('Admin/Alat');
            }
        }
    }
    public function test()
    {
        // for ($x = 0; $x <= 5; $x++) {
        //     for ($y = 0; $y <= 5; $y++) {
        //         for ($z = 0; $z <= 5; $z++) {
        //             for ($a = 0; $a <= 5; $a++) {
        //                 for ($b = 0; $b <= 5; $b++) {
        //                     $data = [
        //                         'ph' => $x,
        //                         'suhu' => $y,
        //                         'tds' => $z,
        //                         'do' => $a,
        //                         'salinity' => $b,
        //                     ];
        //                     // $this->db->insert('test', $data);
        //                     // echo json_encode($data);
        //                 }
        //             }
        //         }
        //     }
        // }
        // $data = $this->db->query("SELECT * FROM test")->result_array();
        // foreach ($data as $key) {
        //     $dd = $this->db->query("SELECT  * FROM test WHERE id = $key[id]")->row();
        //     $dd2 = $this->db->query("SELECT  COUNT(*) as suhu FROM test WHERE id = $key[id]")->row();
        //     $dd3 = $this->db->query("SELECT  COUNT(*) as tds FROM test WHERE id = $key[id]")->row();
        //     echo json_encode($dd);
        //     // if($dd )
        // }
    }
}
