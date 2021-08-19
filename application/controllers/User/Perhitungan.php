<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Perhitungan extends CI_Controller
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

        $this->load->view('user/perhitungan/index', $data);
    }
    public function hitung()
    {
        $ph = $this->input->post('ph');
        $suhu = $this->input->post('suhu');
        $tds = $this->input->post('tds');
        $do = $this->input->post('do');
        $salinity = $this->input->post('salinity');
        //Rules
        //FUNGSI KEANGGOTAAN
        //menghitung fungsi keanggotaan suhu 
        if (22.5 <= $suhu && $suhu <= 27) { //jika angka diantara 22.5 - 27 maka menggunakan rumus A
            // rumus suhu A 
            if ($suhu <= 22.5 or 27 <= $suhu) {
                $suhuA = 0;
            } else if (22.5 < $suhu && $suhu <= 25) {
                $suhuA = ($suhu - 22.5) / (25 - 22.5);
            } else if (25 < $suhu && $suhu <= 26) {
                $suhuA = 1;
            } else if (26 < $suhu && $suhu < 27) {
                $suhuA = (27 - $suhu) / (27 - 26);
            }
        }


        if ((17.5 <= $suhu && $suhu <= 25) or (26 <= $suhu && $suhu <= 29)) { //jika angka diantara 17.5 - 25 atau diantara 26-29 maka menggunakan rumus B
            // rumus suhu B
            if (($suhu <= 17.5 or 29 <= $suhu) or (25 <= $suhu && $suhu <= 26)) {
                $suhuB = 0;
            } else if (17.5 < $suhu && $suhu <= 20) {
                $suhuB = ($suhu - 17.5) / (20 - 17.5);
            } else if ((20 <= $suhu && $suhu <= 22.5) or (27 <= $suhu && $suhu <= 28)) {
                $suhuB = 1;
            } else if (22.5 < $suhu && $suhu < 25) {
                $suhuB = (25 - $suhu) / (25 - 22.5);
            } else if (26 < $suhu && $suhu <= 27) {
                $suhuB = ($suhu - 26) / (27 - 26);
            } else if (28 < $suhu && $suhu < 29) {
                $suhuB = (29 - $suhu) / (29 - 28);
            }
        }

        if ((12.5 <= $suhu && $suhu <= 20) or (28 <= $suhu && $suhu <= 31)) { //jika angka diantara 12.5 - 20 atau diantara 28-31 maka menggunakan rumus C
            // rumus suhu C
            if (($suhu <= 12.5 or 31 <= $suhu) or (20 <= $suhu && $suhu <= 28)) {
                $suhuC = 0;
            } else if (12.5 < $suhu && $suhu < 15) {
                $suhuC = ($suhu - 12.5) / (15 - 12.5);
            } else if ((15 <= $suhu or $suhu <= 17.5) or (29 < $suhu or $suhu <= 30)) {
                $suhuC = 1;
            } else if (17.5 < $suhu && $suhu < 20) {
                $suhuC = (20 - $suhu) / (20 - 17.5);
            } else if (28 < $suhu && $suhu < 29) {
                $suhuC = ($suhu - 28) / (29 - 28);
            } else if (30 < $suhu && $suhu < 31) {
                $suhuC = (31 - $suhu) / (31 - 30);
            }
        }

        if ($suhu <= 15 or 30 <= $suhu) { //jika angka diantara 17.5 - 25 atau diantara 26-29 maka menggunakan rumus D
            // rumus suhu D
            if (15 <= $suhu && $suhu <= 30) {
                $suhuD = 0;
            } else if (12.5 < $suhu && $suhu < 15) {
                $suhuD = ($suhu - 12.5) / (15 - 12.5);
            } else if (30 < $suhu && $suhu <= 31) {
                $suhuD = (31 - $suhu) / (31 - 30);
            } else if ($suhu <= 12.5 or 31 <= $suhu) {
                $suhuD = 1;
            }
        }
        //menghitung fungsi keanggotaan suhu END

        //menghitung fungsi keanggotaan PH
        if (6.65 <= $ph && $ph <= 7.7) { //jika angka diantara 6.65 - 7.7 maka menggunakan rumus A
            // rumus PH A
            if ($ph <= 6.65 && 7.7 <= $ph) {
                $phA = 0;
            } else if (6.65 < $ph && $ph < 6.8) {
                $phA = ($ph - 6.65) / (6.8 - 6.65);
            } else if (7.4 < $ph && $ph < 7.7) {
                $phA = (7.7 - $ph) / (7.7 - 7.4);
            } else if (6.8 <= $ph or $ph <= 7.4) {
                $phA = 1;
            }
        }

        if ((6 <= $ph && $ph <= 6.8) or (7.4 <= $ph && $ph <= 8.25)) { //jika angka diantara 6 - 6.8 atau diantara 7.4 - 8.2 maka menggunakan rumus B
            // rumus PH B
            if (($ph <= 6 or 8.25 <= $ph) && (6.8 <= $ph && $ph <= 7.4)) {
                $phB = 0;
            } else if (6 < $ph && $ph < 6.5) {
                $phB = ($ph - 6) / (6.5 - 6);
            } else if (6.65 < $ph && $ph < 6.8) {
                $phB = (6.8 - $ph) / (6.8 - 6.65);
            } else if (7.4 < $ph && $ph < 7.7) {
                $phB = ($ph - 7.4) / (7.7 - 7.4);
            } else if (8 < $ph && $ph < 8.25) {
                $phB = (8.25 - $ph) / (8.25 - 8);
            } else if ((6.5 <= $ph or $ph <= 6.65) or (7.7 <= $ph or $ph <= 8)) {
                $phB = 1;
            }
        }

        if ((6.25 <= $ph && $ph <= 6.5) or (8 <= $ph && $ph <= 8.6)) { //jika angka diantara 6.25 - 6.5 atau diantara 8 - 8.6 maka menggunakan rumus C
            // rumus PH C
            if (($ph <= 5.25 or 8.6 <= $ph) or (6.5 <= $ph or $ph <= 8)) {
                $phC = 0;
            } else if (5.25 < $ph && $ph < 5.5) {
                $phC = ($ph - 5.25) / (5.5 - 5.25);
            } else if ((5.5 <= $ph or $ph <= 6) or (8.25 <= $ph or $ph <= 8.5)) {
                $phC = 1;
            } else if (6 < $ph && $ph < 6.5) {
                $phC = (6.5 - $ph) / (6.5 - 6);
            } else if (8 < $ph && $ph < 8.25) {
                $phC = ($ph - 8) / (8.25 - 8);
            } else if (8.5 < $ph && $ph < 8.6) {
                $phC = (8.6 - $ph) / (8.6 - 8.5);
            }
        }

        if ($ph <= 5.5 or 8.5 <= $ph) { //jika angka diantara 5.5 maka menggunakan rumus D
            // rumus PH D
            if (5.5 < $ph && $ph < 8.5) {
                $phD = 0;
            } else if (5.25 < $ph && $ph < 5.5) {
                $phD = ($ph - 5.25) / (5.5 - 5.25);
            } else if (8.5 < $ph && $ph < 8.6) {
                $phD = (8.6 - $ph) / (8.6 - 8.5);
            } else if ($ph <= 5.25 or 8.6 <= $ph) {
                $phD = 1;
            }
        }
        //menghitung fungsi keanggotaan PH END

        //menghitung fungsi keanggotaan TDS
        if (125 <= $tds && $tds <= 325) { //jika angka diantara 125 - 325 maka menggunakan rumus A
            // rumus TDS A
            if ($tds <= 125 or 325 <= $tds) {
                $tdsA = 0;
            } else if (125 < $tds && $tds < 250) {
                $tdsA = ($tds - 125) / (250 - 125);
            } else if (300 < $tds && $tds < 325) {
                $tdsA = (325 - $tds) / (325 - 300);
            } else if (250 <= $tds or $tds <= 300) {
                $tdsA = 1;
            }
        }

        if ((0 <= $tds && $tds <= 250) or (300 <= $tds && $tds <= 400)) { //jika angka diantara 0 - 250 atau diantara 300 - 400 maka menggunakan rumus B
            // rumus TDS B
            if ((250 <= $tds && $tds <= 300) or (400 <= $tds)) {
                $tdsB = 0;
            } else if (125 < $tds && $tds < 250) {
                $tdsB = (250 - $tds) / (250 - 125);
            } else if (300 < $tds && $tds < 325) {
                $tdsB = ($tds - 300) / (325 - 300);
            } else if (350 < $tds && $tds < 400) {
                $tdsB = (400 - $tds) / (400 - 350);
            } else if (($tds <= 125) or (325 <= $tds && $tds <= 350)) {
                $tdsB = 1;
            }
        }

        if (350 <= $tds && $tds <= 475) { //jika angka diantara 350 - 475 maka menggunakan rumus C
            // rumus TDS C
            if ($tds <= 350 && 475 <= $tds) {
                $tdsC = 0;
            } else if (350 < $tds && $tds < 400) {
                $tdsC = ($tds - 350) / (400 - 350);
            } else if (400 <= $tds or $tds <= 450) {
                $tdsC = 1;
            } else if (450 < $tds && $tds < 475) {
                $tdsC = (475 - $tds) / (475 - 450);
            }
        }

        if (450 <= $tds && $tds <= 500) { //jika angka diantara 450 - 500 maka menggunakan rumus C
            // rumus TDS D
            if ($tds <= 450) {
                $tdsD = 0;
            } else if (450 < $tds && $tds < 475) {
                $tdsD = ($tds - 450) / (475 - 450);
            } else if (475 <= $tds) {
                $tdsD = 1;
            }
        }

        if ($tds <= 0 or 500 <= $tds) {
            $tdsD = 1;
        }
        //menghitung fungsi keanggotaan TDS END
        //FUNGSI KEANGGOTAAN END\
        $suhu_setA = $ph_setA = $tds_setA = 'Baik';
        $suhu_setB = $ph_setB = $tds_setB = 'Sedang';
        $suhu_setC = $ph_setC = $tds_setC = 'Buruk';
        $suhu_setD = $ph_setD = $tds_setD = 'Sangat Buruk';

        if (isset($suhuA) && isset($suhuB)) {
            $suhuOutput = [$suhuA, $suhuB];
            $suhuGrade = [$suhu_setA, $suhu_setB];
        }
        if (isset($suhuB) && isset($suhuC)) {
            $suhuOutput = [$suhuB, $suhuC];
            $suhuGrade = [$suhu_setB, $suhu_setC];
        }
        if (isset($suhuC) && isset($suhuD)) {
            $suhuOutput = [$suhuC, $suhuD];
            $suhuGrade = [$suhu_setC, $suhu_setD];
        }
        if (isset($suhuB) && isset($suhuD)) {
            $suhuOutput = [$suhuB, $suhuD];
            $suhuGrade = [$suhu_setB, $suhu_setD];
        }
        if (isset($suhuA) && isset($suhuC)) {
            $suhuOutput = [$suhuA, $suhuC];
            $suhuGrade = [$suhu_setA, $suhu_setC];
        }

        if (isset($phA) && isset($phB)) {
            $phOutput = [$phA, $phB];
            $phGrade = [$ph_setA, $ph_setB];
        }
        if (isset($phB) && isset($phC)) {
            $phOutput = [$phB, $phC];
            $phGrade = [$ph_setB, $ph_setC];
        }
        if (isset($phC) && isset($phD)) {
            $phOutput = [$phC, $phD];
            $phGrade = [$ph_setC, $ph_setD];
        }
        if (isset($phB) && isset($phD)) {
            $phOutput = [$phB, $phD];
            $phGrade = [$ph_setB, $ph_setD];
        }
        if (isset($phA) && isset($phC)) {
            $phOutput = [$phA, $phC];
            $phGrade = [$ph_setA, $ph_setC];
        }

        if (isset($tdsA) && isset($tdsB)) {
            $tdsOutput = [$tdsA, $tdsB];
            $tdsGrade = [$tds_setA, $tds_setB];
        }
        if (isset($tdsB) && isset($tdsC)) {
            $tdsOutput = [$tdsB, $tdsC];
            $tdsGrade = [$tds_setB, $tds_setC];
        }
        if (isset($tdsC) && isset($tdsD)) {
            $tdsOutput = [$tdsC, $tdsD];
            $tdsGrade = [$tds_setC, $tds_setD];
        }
        if (isset($tdsB) && isset($tdsD)) {
            $tdsOutput = [$tdsB, $tdsD];
            $tdsGrade = [$tds_setB, $tds_setD];
        }
        if (isset($tdsA) && isset($tdsC)) {
            $tdsOutput = [$tdsA, $tdsC];
            $tdsGrade = [$tds_setA, $tds_setC];
        }


        echo json_encode($suhuOutput);
        echo  "<br>";
        echo json_encode($suhuGrade);
        echo  "<br>";
        echo json_encode($phOutput);
        echo  "<br>";
        echo json_encode($phGrade);
        echo  "<br>";
        echo json_encode($tdsOutput);
        echo  "<br>";
        echo json_encode($tdsGrade);
        echo  "<br>";
        foreach ($suhuGrade as $s) {
            foreach ($phGrade as $p) {
                foreach ($tdsGrade as $t) {
                    $rr = $s . $p . $t;
                    $qq = $this->db->query("SELECT * FROM rules WHERE suhu = '$s' AND ph = '$p' AND tds = '$t' AND do = 'Baik' AND salinity = 'Buruk'")->result_array();
                    echo json_encode($qq);

                    //Nilai Min
                    //Nilai Inference
                }
            }
        }
        foreach ($suhuOutput as $s) {
            foreach ($phOutput as $p) {
                foreach ($tdsOutput as $t) {
                    $RMin = min($s, $p, $t);
                    // echo $RMin;
                }
            }
        }
    }
}
