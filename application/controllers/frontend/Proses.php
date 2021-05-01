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
		$data['data'] = $this->db->query("SELECT * FROM sensor ORDER BY id DESC LIMIT 1")->row();
		$grafiknya =  $this->db->query("SELECT ph, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		$grafik_tds =  $this->db->query("SELECT tds, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		$grafik_suhu =  $this->db->query("SELECT suhu, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();

		foreach ($grafiknya as $p) {
			$data['ph'][] = $p['ph'];
			$data['waktu'][] = $p['createdDate'];
		}
		$data['grafik_ph'] = json_encode($data);

		foreach ($grafik_tds as $p) {
			$data1['tds'][] = $p['tds'];
			$data1['waktu'][] = $p['createdDate'];
		}
		$data['grafik_tds'] = json_encode($data1);
		foreach ($grafik_suhu as $p) {
			$data2['suhu'][] = $p['suhu'];
			$data2['waktu'][] = $p['createdDate'];
		}
		$data['grafik_suhu'] = json_encode($data2);
		// echo json_encode($data);
		$this->load->view('admin/proses', $data);
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
	public function pHsuhu()
	{
		$grafik_suhu =  $this->db->query("SELECT suhu, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		echo json_encode($grafik_suhu);
	}
	public function tdsajax()
	{
		$grafik_tds =  $this->db->query("SELECT tds, createdDate FROM (SELECT * FROM sensor GROUP BY id DESC LIMIT 10) sub ORDER BY id ASC")->result_array();
		echo json_encode($grafik_tds);
	}
	public function refreshSuhu()
	{
		$suhu = $this->db->query("SELECT suhu FROM sensor ORDER BY id DESC LIMIT 1")->row();
		echo "{$suhu->suhu} &#176;C";
	}
	public function refreshTds()
	{
		$suhu = $this->db->query("SELECT tds FROM sensor ORDER BY id DESC LIMIT 1")->row();
		echo "{$suhu->tds} Ppm";
	}
	public function refreshph()
	{
		$suhu = $this->db->query("SELECT ph FROM sensor ORDER BY id DESC LIMIT 1")->row();
		echo "{$suhu->ph} pH";
	}
	public function refreshWaktu()
	{
		$waktu = $this->db->query("SELECT createdDate FROM sensor ORDER BY id DESC LIMIT 1")->row();
		echo date_format(date_create($waktu->createdDate), "H:i:s");
	}
	public function refreshTanggal()
	{
		$tanggal = $this->db->query("SELECT createdDate FROM sensor ORDER BY id DESC LIMIT 1")->row();
		echo date_format(date_create($tanggal->createdDate), "d M Y");
	}
}
