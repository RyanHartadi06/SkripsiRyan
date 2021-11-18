<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		// $data['data'] = $this->db->query("SELECT * FROM sensor ORDER BY id DESC LIMIT 1")->row();
		$data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
		$this->session->userdata('id_pengguna')])->row_array();
		$grafiknya =  $this->db->query("SELECT ph, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		$grafik_tds =  $this->db->query("SELECT tds, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		$grafik_suhu =  $this->db->query("SELECT suhu, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		if ($grafiknya) {
			foreach ($grafiknya as $p) {
				$data['ph'][] = $p['ph'];
				$data['waktu'][] = $p['createdDate'];
			}
			$data['grafik_ph'] = json_encode($data);
		}
		if ($grafik_tds) {
			foreach ($grafik_tds as $p) {
				$data1['tds'][] = $p['tds'];
				$data1['waktu'][] = $p['createdDate'];
			}
			$data['grafik_tds'] = json_encode($data1);
		}
		if ($grafik_suhu) {
			foreach ($grafik_suhu as $p) {
				$data2['suhu'][] = $p['suhu'];
				$data2['waktu'][] = $p['createdDate'];
			}
			$data['grafik_suhu'] = json_encode($data2);
		}

		$this->load->view('user/proses', $data);
	}
	public function run()
	{
		$data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
		$this->session->userdata('id_pengguna')])->row_array();
		$qweq = $_GET['id'];
		$data['data'] = $this->db->query("SELECT * FROM data WHERE id = '$qweq'")->row();
		$grafiknya =  $this->db->query("SELECT ph, createdDate FROM (SELECT * FROM data_sensor WHERE id = '$qweq' GROUP BY id DESC LIMIT 10) sub WHERE id = '$qweq' ORDER BY id ASC")->result_array();
		$grafik_tds =  $this->db->query("SELECT tds, createdDate FROM (SELECT * FROM data_sensor WHERE id = '$qweq' GROUP BY id DESC LIMIT 10) sub WHERE id = '$qweq' ORDER BY id ASC")->result_array();
		$grafik_suhu =  $this->db->query("SELECT suhu, createdDate FROM (SELECT * FROM data_sensor WHERE id = '$qweq' GROUP BY id DESC LIMIT 10) sub WHERE id = '$qweq' ORDER BY id ASC")->result_array();
		if ($grafiknya) {
			foreach ($grafiknya as $p) {
				$dataph['ph'][] = $p['ph'];
				$dataph['waktu'][] = $p['createdDate'];
			}
			$data['grafik_ph'] = json_encode($dataph);
		}
		if ($grafik_tds) {
			foreach ($grafik_tds as $p) {
				$data1['tds'][] = $p['tds'];
				$data1['waktu'][] = $p['createdDate'];
			}
			$data['grafik_tds'] = json_encode($data1);
		}
		if ($grafik_suhu) {
			foreach ($grafik_suhu as $p) {
				$data2['suhu'][] = $p['suhu'];
				$data2['waktu'][] = $p['createdDate'];
			}
			$data['grafik_suhu'] = json_encode($data2);
		}

		$this->load->view('user/run', $data);
	}
	public function addData()
	{
		$suhu = $_GET['suhu'];
		$tds = $_GET['tds'];
		$ph = $_GET['ph'];

		$data = array(
			'ph' => $ph,
			'tds' => $tds,
			'suhu' => $suhu,
			'createdDate' => date('Y-m-d H:i:s')
		);

		$this->db->insert('sensor', $data);
	}
	public function pHajax()
	{
		$grafiknya =  $this->db->query("SELECT ph, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result();
		echo json_encode($grafiknya);
	}
	public function suhuAjax()
	{
		$grafik_suhu =  $this->db->query("SELECT suhu, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		echo json_encode($grafik_suhu);
	}
	public function tdsajax()
	{
		$grafik_tds =  $this->db->query("SELECT tds, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		echo json_encode($grafik_tds);
	}
	public function pHajaxByID()
	{
		$id = $_GET['id'];
		$grafiknya =  $this->db->query("SELECT ph, createdDate FROM (SELECT * FROM data_sensor WHERE id = '$id' GROUP BY id_data DESC LIMIT 10) sub WHERE id = '$id' ORDER BY id_data ASC")->result_array();
		echo json_encode($grafiknya);
	}
	public function suhuAjaxByID()
	{
		$id = $_GET['id'];
		$grafik_suhu =  $this->db->query("SELECT suhu, createdDate FROM (SELECT * FROM data_sensor  WHERE id = '$id'  GROUP BY id_data DESC LIMIT 10) sub  WHERE id = '$id'  ORDER BY id_data ASC")->result_array();
		echo json_encode($grafik_suhu);
	}
	public function tdsajaxByID()
	{
		$id = $_GET['id'];
		$grafik_tds =  $this->db->query("SELECT tds, createdDate FROM (SELECT * FROM data_sensor  WHERE id = '$id'  GROUP BY id_data DESC LIMIT 10) sub  WHERE id = '$id'  ORDER BY id_data ASC")->result_array();
		echo json_encode($grafik_tds);
	}
	public function refreshSuhu()
	{
		$suhu = $this->db->query("SELECT suhu FROM sensor ORDER BY id DESC LIMIT 1")->row();

		if ($suhu) {
			echo "{$suhu->suhu} &#176;C";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function refreshTds()
	{
		$tds = $this->db->query("SELECT tds FROM sensor ORDER BY id DESC LIMIT 1")->row();

		if ($tds) {
			echo "{$tds->tds} Ppm";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function refreshph()
	{
		$ph = $this->db->query("SELECT ph FROM sensor ORDER BY id DESC LIMIT 1")->row();
		if ($ph) {
			echo "{$ph->ph} pH";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function refreshWaktu()
	{
		$waktu = $this->db->query("SELECT createdDate FROM sensor ORDER BY id DESC LIMIT 1")->row();
		if ($waktu) {
			echo date_format(date_create($waktu->createdDate), "H:i:s");
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function refreshTanggal()
	{
		$tanggal = $this->db->query("SELECT createdDate FROM sensor ORDER BY id DESC LIMIT 1")->row();
		if ($tanggal) {
			echo date_format(date_create($tanggal->createdDate), "d M Y");
		} else {
			echo "Belum Terdeteksi";
		}
	}


	//RUN

	public function refreshSuhuRun()
	{
		$suhu = $this->db->query("SELECT suhu FROM sensor ORDER BY id DESC LIMIT 1")->row();

		if ($suhu) {
			echo "{$suhu->suhu}";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function refreshTdsRun()
	{
		$tds = $this->db->query("SELECT tds FROM sensor ORDER BY id DESC LIMIT 1")->row();

		if ($tds) {
			echo "{$tds->tds}";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function refreshphRun()
	{
		$ph = $this->db->query("SELECT ph FROM sensor ORDER BY id DESC LIMIT 1")->row();
		if ($ph) {
			echo "{$ph->ph}";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	// public function lastph($id)
	// {
	// 	$grafiknya =  $this->db->query("SELECT ph, createdDate FROM (SELECT * FROM data_sensor  WHERE id = '$id' GROUP BY id_data DESC LIMIT 10) sub  WHERE id = '$id' ORDER BY id_data ASC")->result();
	// 	echo json_encode($grafiknya);
	// }
	// public function lastsuhu($id)
	// {
	// 	$grafik_suhu =  $this->db->query("SELECT suhu, createdDate FROM (SELECT * FROM data_sensor  WHERE id = '$id' GROUP BY id_data DESC LIMIT 10) sub  WHERE id = '$id' ORDER BY id_data ASC")->result_array();
	// 	echo json_encode($grafik_suhu);
	// }
	// public function lasttds($id)
	// {
	// 	$grafik_tds =  $this->db->query("SELECT tds, createdDate FROM (SELECT * FROM data_sensor  WHERE id = '$id' GROUP BY id_data DESC LIMIT 10) sub  WHERE id = '$id' ORDER BY id_data ASC")->result_array();
	// 	echo json_encode($grafik_tds);
	// }
	//BYID
	public function suhuByID($id)
	{
		$suhu = $this->db->query("SELECT suhu FROM data_sensor WHERE id = '$id'  ORDER BY id_data DESC LIMIT 1")->row();

		if ($suhu) {
			echo "{$suhu->suhu} &#176;C";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function tdsByID($id)
	{
		$tds = $this->db->query("SELECT tds FROM data_sensor WHERE id = '$id' ORDER BY id_data DESC LIMIT 1")->row();

		if ($tds) {
			echo "{$tds->tds} Ppm";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function phByID($id)
	{
		$ph = $this->db->query("SELECT ph FROM data_sensor  WHERE id = '$id' ORDER BY id_data DESC LIMIT 1")->row();
		if ($ph) {
			echo "{$ph->ph} pH";
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function waktuByID($id)
	{
		$waktu = $this->db->query("SELECT createdDate FROM data_sensor  WHERE id = '$id' ORDER BY id_data DESC LIMIT 1")->row();
		if ($waktu) {
			echo date_format(date_create($waktu->createdDate), "H:i:s");
		} else {
			echo "Belum Terdeteksi";
		}
	}
	public function tanggalByID($id)
	{
		$tanggal = $this->db->query("SELECT createdDate FROM data_sensor WHERE id = '$id' ORDER BY id_data DESC LIMIT 1")->row();
		if ($tanggal) {
			echo date_format(date_create($tanggal->createdDate), "d M Y");
		} else {
			echo "Belum Terdeteksi";
		}
	}
	//BYID

	//Insert AJAX
	public function insert()
	{
		$id    = $this->input->post('id');
		$ph    = $this->input->post('ph');
		$tds   = $this->input->post('tds');
		$suhu   = $this->input->post('suhu');
		if ($ph != 0 && $tds != 0 && $suhu != 0) {
			$data = ['id' => $id, 'ph' => $ph, 'suhu' => $suhu, 'tds' => $tds, 'createdDate' => date('Y-m-d H:i:s')];
			$data = $this->db->insert('data_sensor', $data);
			echo json_encode($data);
		}
	}
	//RUN
	public function detail()
	{
		$qweq = $_GET['id'];
		$data['qwe'] = $this->db->query("SELECT * FROM data WHERE id = '$qweq'")->result_array();
		$data['dataoutput'] = $this->db->query("SELECT * FROM data_sensor WHERE id = '$qweq'")->result_array();

		// $data['all'] = $this->db->query("SELECT * FROM data_sensor WHERE id = '$qweq'  ORDER BY id_data DESC LIMIT 1")->row();
		$data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
		$this->session->userdata('id_pengguna')])->row_array();
		$grafiknya =  $this->db->query("SELECT ph, createdDate FROM (SELECT * FROM data_sensor WHERE id = '$qweq' GROUP BY id_data  DESC LIMIT 10) sub WHERE id = '$qweq' ORDER BY id_data ASC")->result_array();
		$grafik_tds =  $this->db->query("SELECT tds, createdDate FROM (SELECT * FROM data_sensor WHERE id = '$qweq' GROUP BY id_data  DESC LIMIT 10) sub WHERE id = '$qweq' ORDER BY id ASC")->result_array();
		$grafik_suhu =  $this->db->query("SELECT suhu, createdDate FROM (SELECT * FROM data_sensor WHERE id = '$qweq' GROUP BY id_data  DESC LIMIT 10) sub WHERE id = '$qweq' ORDER BY id ASC")->result_array();
		if ($grafiknya) {
			foreach ($grafiknya as $p) {
				$dataph['ph'][] = $p['ph'];
				$dataph['waktu'][] = $p['createdDate'];
			}
			$data['grafik_ph'] = json_encode($dataph);
		}
		if ($grafik_tds) {
			foreach ($grafik_tds as $p) {
				$data1['tds'][] = $p['tds'];
				$data1['waktu'][] = $p['createdDate'];
			}
			$data['grafik_tds'] = json_encode($data1);
		}
		if ($grafik_suhu) {
			foreach ($grafik_suhu as $p) {
				$data2['suhu'][] = $p['suhu'];
				$data2['waktu'][] = $p['createdDate'];
			}
			$data['grafik_suhu'] = json_encode($data2);
		}

		$this->load->view('user/detail', $data);
	}
	public function detailmanual()
	{
		$qweq = $_GET['id'];
		$data['qwe'] = $this->db->query("SELECT * FROM data WHERE id = '$qweq'")->result_array();

		// $data['all'] = $this->db->query("SELECT * FROM data_sensor WHERE id = '$qweq'  ORDER BY id_data DESC LIMIT 1")->row();
		$data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
		$this->session->userdata('id_pengguna')])->row_array();
		$data['ikan'] = $this->db->query("SELECT * FROM perhitungan WHERE id_data = '$qweq'")->row();
		$data['data'] = $this->db->query("SELECT * FROM rules, nilai_min,rules_grade WHERE nilai_min.id_perhitungan = rules_grade.id_perhitungan AND rules.id_rules = rules_grade.id_rules AND nilai_min.id_min = rules_grade.id_rules_grade AND rules_grade.id_perhitungan = '$qweq'")->result_array();
		// echo json_encode($data);
		$this->load->view('user/perhitungan/detail', $data);
	}
	public function delete($id)
	{
		$tables = array('data_sensor', 'data');
		$this->db->where('id', $id);
		$hapus = $this->db->delete($tables);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Data Berhasil Hapus !
             </div>');
		redirect('User/Data');
	}
}
