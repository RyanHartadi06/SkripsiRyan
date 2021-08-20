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
        $query = $this->db->select('id_perhitungan')->from('perhitungan')->get()->last_row();
        if ($query) {
            $id_perhitungan = (int) $query->id_perhitungan + 1;
        } else {
            $id_perhitungan = (int) 1;
        }
        $rules_grade = $this->db->select('id_rules_grade')->from('rules_grade')->get()->last_row();
        if ($rules_grade) {
            $id_rules_grade = (int) $rules_grade->id_rules_grade + 1;
        } else {
            $id_rules_grade = (int) 1;
        }
        $data = [
            'id_perhitungan' => $id_perhitungan,
            'ph' => $ph,
            'tds' => $tds,
            'suhu' => $suhu,
            'do' => $do,
            'salinity' => $salinity,
            'grade' => "",
            'created_at' => date('Y-m-d H:i:s'),
        ];
        $this->db->insert('perhitungan', $data);
        // echo json_encode($data);
        //Rules
        //FUNGSI KEANGGOTAAN
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

        // if ($tds <= 0 or 500 <= $tds) {
        //     $tdsD = 1;
        // }
        //menghitung fungsi keanggotaan TDS END
        //menghitung fungsi keanggotaan DO START
        //==================== d.o ====================//

        /**
         *  mencari nilai keanggotaan himpunan d.o Baik
         *  @return nilai keanggotaan di himpunan d.o Baik
         */
        if ($do >= 6) {
            if ($do >= 7) {
                $doA = 1;
            } else if ($do >= 6 && $do <= 7) {
                $doA = (7 - $do) / (7 - 6);
            } else {
                $doA = 0;
            }
        }


        /**
         *  mencari nilai keanggotaan himpunan d.o Sedang
         *  @return nilai keanggotaan di himpunan d.o Sedang
         */
        if ($do >= 4 && $do <= 7) {
            if ($do >= 5 && $do <= 6) {
                $doB = 1;
            } else if ($do >= 6 && $do <= 7) {
                $doB = (7 - $do) / (7 - 6);
            } else if ($do >= 4 && $do <= 5) {
                $doB = ($do - 4) / (5 - 4);
            } else {
                $doB = 0;
            }
        }


        /**
         *  mencari nilai keanggotaan himpunan d.o Buruk
         *  @return nilai keanggotaan di himpunan d.o Buruk
         */

        if ($do >= 3 && $do <= 5) {
            if ($do >= 3.5 && $do <= 4) {
                $doC = 1;
            } else if ($do >= 4 && $do <= 5) {
                $doC = (5 - $do) / (5 - 4);
            } else if ($do >= 3 && $do <= 3.5) {
                $doC = ($do - 3) / (3.5 - 3);
            } else {
                $doC = 0;
            }
        }

        /**
         *  mencari nilai keanggotaan himpunan d.o Sangat Buruk
         *  @return nilai keanggotaan di himpunan d.o Sangat Buruk
         */
        if ($do <= 3.5) {
            if ($do <= 3) {
                $doD = 1;
            } else if ($do >= 3 && $do <= 3.5) {
                $doD = (3.5 - $do) / (3.5 - 3);
            } else {
                $doD = 0;
            }
        }


        //menghitung fungsi keanggotaan DO END
        //menghitung fungsi keanggotaan Salinity Start
        if ($salinity >= 0.025 && $salinity <= 0.175) { //Rumus A
            if (0.05 <= $salinity && $salinity <= 0.15) {
                $salinityA = 1;
            } else if (0.025 <= $salinity && $salinity <= 0.5) {
                $salinityA = (0.05 - $salinity) / (0.05 - 0.025);
            } else if (0.15 <= $salinity && $salinity <=  0.175) {
                $salinityA = ($salinity - 0.15) / (0.175 - 0.15);
            } else if ($salinity < 0.025 && $salinity > 0.175) {
                $salinityA = 0;
            }
        }
        if ($salinity >= 0.15 && $salinity <= 0.225) { //Rumus B
            if ($salinity < 0.15 && $salinity > 0.225) {
                $salinityB = 0;
            } else if (0.15 <= $salinity && $salinity <=  0.175) {
                $salinityB = ($salinity - 0.15) / (0.175 - 0.15);
            } else if ($salinity >= 0.2 && $salinity <= 0.225) {
                $salinityB = (0.225 - $salinity) / (0.225 - 0.2);
            } else if ($salinity >= 0.175 && $salinity <= 0.2) {
                $salinityB = 1;
            }
        }
        if ($salinity >= 0.2 && $salinity < 0.35) { //Rumus C
            if ($salinity < 0.2 or $salinity > 0.35) {
                $salinityC = 0;
            } else if (0.2 <= $salinity && $salinity <=  0.225) {
                $salinityC = ($salinity - 0.2) / (0.225 - 0.2);
            } else if (0.3 <= $salinity && $salinity <= 0.35) {
                $salinityC = (0.35 - $salinity) / (0.35 - 0.3);
            } else if (0.0225 <= $salinity && $salinity >= 0.3) {
                $salinityC = 1;
            }
        }

        if ($salinity >= 0.3 && $salinity <= 0.4) { //Rumus D
            if ($salinity < 0.3) {
                $salinityD = 0;
            } else if ($salinity <= 0.3 && $salinity > 0.35) {
                $salinityD = ($salinity - 0.3) / (0.35 - 0.3);
            } else if ($salinity >= 0.35) {
                $salinityD = 1;
            }
        }
        //menghitung fungsi keanggotaan Salinity END
        //FUNGSI KEANGGOTAAN END
        $suhu_setA = $ph_setA = $tds_setA = $do_setA = $salinity_setA = 'Baik';
        $suhu_setB = $ph_setB = $tds_setB = $do_setB = $salinity_setB = 'Sedang';
        $suhu_setC = $ph_setC = $tds_setC = $do_setC = $salinity_setC = 'Buruk';
        $suhu_setD = $ph_setD = $tds_setD = $do_setD = $salinity_setD = 'Sangat Buruk';

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
        if (isset($suhuA) && isset($suhuD)) {
            $suhuOutput = [$suhuA, $suhuD];
            $suhuGrade = [$suhu_setA, $suhu_setD];
        }
        if (isset($suhuD)) {
            $suhuOutput = [$suhuD];
            $suhuGrade = [$suhu_setD];
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
        if (isset($phA) && isset($phD)) {
            $phOutput = [$phA, $phD];
            $phGrade = [$ph_setA, $ph_setD];
        }
        if (isset($phD)) {
            $phOutput = [$phD];
            $phGrade = [$ph_setD];
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
        if (isset($tdsA) && isset($tdsD)) {
            $tdsOutput = [$tdsA, $tdsD];
            $tdsGrade = [$tds_setA, $tds_setD];
        }
        if (isset($tdsD)) {
            $tdsOutput = [$tdsD];
            $tdsGrade = [$tds_setD];
        }

        if (isset($doA) && isset($doB)) {
            $doOutput = [$doA, $doB];
            $doGrade = [$do_setA, $do_setB];
        }
        if (isset($doB) && isset($doC)) {
            $doOutput = [$doB, $doC];
            $doGrade = [$do_setB, $do_setC];
        }
        if (isset($doC) && isset($doD)) {
            $doOutput = [$doC, $doD];
            $doGrade = [$do_setC, $do_setD];
        }
        if (isset($doB) && isset($doD)) {
            $doOutput = [$doB, $doD];
            $doGrade = [$do_setB, $do_setD];
        }
        if (isset($doA) && isset($doC)) {
            $doOutput = [$doA, $doC];
            $doGrade = [$do_setA, $do_setC];
        }
        if (isset($doA) && isset($doD)) {
            $doOutput = [$doA, $doD];
            $doGrade = [$do_setA, $do_setD];
        }

        if (isset($salinityA) && isset($salinityB)) {
            $salinityOutput = [$salinityA, $salinityB];
            $salinityGrade = [$salinity_setA, $salinity_setB];
        }
        if (isset($salinityB) && isset($salinityC)) {
            $salinityOutput = [$salinityB, $salinityC];
            $salinityGrade = [$salinity_setB, $salinity_setC];
        }
        if (isset($salinityC) && isset($salinityD)) {
            $salinityOutput = [$salinityC, $salinityD];
            $salinityGrade = [$salinity_setC, $salinity_setD];
        }
        if (isset($salinityB) && isset($salinityD)) {
            $salinityOutput = [$salinityB, $salinityD];
            $salinityGrade = [$salinity_setB, $salinity_setD];
        }
        if (isset($salinityA) && isset($salinityC)) {
            $salinityOutput = [$salinityA, $salinityC];
            $salinityGrade = [$salinity_setA, $salinity_setC];
        }
        if (isset($salinityA) && isset($salinityD)) {
            $salinityOutput = [$salinityA, $salinityD];
            $salinityGrade = [$salinity_setA, $salinity_setD];
        }
        // echo "PH";
        // echo json_encode($phOutput);
        // echo json_encode($phGrade);
        // echo "<br>";
        // echo "TDS";
        // echo json_encode($tdsOutput);
        // echo json_encode($tdsGrade);
        // echo "<br>";
        // echo "Suhu";
        // echo json_encode($suhuOutput);
        // echo json_encode($suhuGrade);
        // echo "<br>";
        // echo "Salinity";
        // echo json_encode($salinityOutput);
        // echo json_encode($salinityGrade);
        // echo "<br>";
        // echo "DO";
        // echo json_encode($doOutput);
        // echo json_encode($doGrade);

        foreach ($suhuGrade as $s) {
            foreach ($phGrade as $p) {
                foreach ($tdsGrade as $t) {
                    foreach ($doGrade as $d) {
                        foreach ($salinityGrade as $salt) {
                            //BUG
                            $qq = $this->db->query("SELECT * FROM rules WHERE suhu = '$s' AND ph = '$p' AND tds = '$t' AND do = '$d' AND salinity = '$salt'")->result_array();
                            foreach ($qq as $key) {
                                $datarules = [
                                    'id_perhitungan' => $id_perhitungan,
                                    'id_rules' => $key['id_rules'],
                                    'created_at' => date('Y-m-d H:i:s'),
                                ];
                                $this->db->insert('rules_grade', $datarules);
                                // echo json_encode($qq);
                            }
                            // echo json_encode($qq);
                        }
                    }
                }
            }
        }

        foreach ($suhuOutput as $s) {
            foreach ($phOutput as $p) {
                foreach ($tdsOutput as $t) {
                    foreach ($doOutput as $d) {
                        foreach ($salinityOutput as $salt) {
                            $RMin = min($s, $p, $t, $d, $salt);
                            $dataoutput = [
                                'id_perhitungan' => $id_perhitungan,
                                'nilai_min' => $RMin,
                                'created_at' => date('Y-m-d H:i:s'),
                                'inference' => 0
                            ];
                            $this->db->insert('nilai_min', $dataoutput);
                            // echo json_encode($dataoutput);
                        }
                    }
                }
            }
        }
        $data['Pengguna'] = $this->db->get_where('pengguna', ['id_pengguna' =>
        $this->session->userdata('id_pengguna')])->row_array();

        $rulessss = $this->db->query("SELECT rules.grade as grade , nilai_min.nilai_min as min , nilai_min.id_min as id FROM rules, nilai_min,rules_grade WHERE nilai_min.id_perhitungan = rules_grade.id_perhitungan AND rules.id_rules = rules_grade.id_rules AND nilai_min.id_min = rules_grade.id_rules_grade AND rules_grade.id_perhitungan = '$id_perhitungan'")->result_array();


        foreach ($rulessss as $aa) {
            $grade = $aa['grade'];
            $min = $aa['min'];
            $id = $aa['id'];
            $float = (float) $min;


            if ($grade == "A") {
                $aa = 200 - ($float * (200 - 100));
                $hasila = $aa * $float;
            }
            if ($grade == "B") {
                $bb = 300 - ($float * (300 - 200));
                $hasila = $bb * $float;
            }
            if ($grade == "C") {
                $cc = 400 - ($float * (400 - 300));
                $hasila = $cc * $float;
            }
            if ($grade == "D") {
                $dd = 500 - ($float * (500 - 400));
                $hasila = $dd * $float;
            }
            $this->db->set('inference', $hasila);
            $this->db->where('id_min', $id);
            $this->db->update('nilai_min');
        }
        $inf  = $this->db->query("SELECT SUM(nilai_min.inference) as inf FROM nilai_min WHERE nilai_min.id_perhitungan = '$id_perhitungan'")->result_array();
        $sums  = $this->db->query("SELECT SUM(nilai_min.nilai_min) as jumlah  FROM  nilai_min WHERE nilai_min.id_perhitungan = '$id_perhitungan'")->result_array();
        $bagi = number_format($sums[0]['jumlah'], 2);
        $atas = (float) $inf[0]['inf'];
        $hasil = $atas / $bagi;
        if (0 <= $hasil && $hasil <= 150) {
            // echo 'Grade A';
            $grade_hasil = 'A';
        } else if (151 <= $hasil && $hasil <= 250) {
            // echo 'Grade B';
            $grade_hasil = 'B';
        } else if (251 <= $hasil && $hasil <= 350) {
            // echo 'Grade C';
            $grade_hasil = 'C';
        } else if (351 <= $hasil && $hasil <= 500) {
            // echo 'Grade D';
            $grade_hasil = 'D';
        } else {
            // echo 'Grade D, tidak terdefinisi';
            $grade_hasil = 'D';
        }
        $this->db->set('grade', $grade_hasil);
        $this->db->where('id_perhitungan', $id_perhitungan);
        $this->db->update('perhitungan');
        $data['output'] = $atas / $bagi;
        $data['ikan'] = $this->db->query("SELECT * FROM perhitungan WHERE id_perhitungan = '$id_perhitungan'")->row();
        $data['data'] = $this->db->query("SELECT * FROM rules, nilai_min,rules_grade WHERE nilai_min.id_perhitungan = rules_grade.id_perhitungan AND rules.id_rules = rules_grade.id_rules AND nilai_min.id_min = rules_grade.id_rules_grade AND rules_grade.id_perhitungan = '$id_perhitungan'")->result_array();
        $this->load->view('user/perhitungan/detail', $data);
    }
}
