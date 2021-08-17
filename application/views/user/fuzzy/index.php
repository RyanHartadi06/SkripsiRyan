<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("user/_partials/head.php") ?>
<!-- <?php $this->load->view("user/_partials/modal/save.php") ?> -->

<body class="nav-fixed">

    <!-- Topbar -->
    <?php $this->load->view("user/_partials/topbar.php") ?>

    <div id="layoutSidenav">

        <!-- Sidebar -->
        <?php $this->load->view("user/_partials/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container col-10">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="user"></i></div>
                                        Fuzzy Tsukamoto
                                    </h1>
                                    <div class="page-header-subtitle">Sistem Kendali Kualitas Air Kolam Koi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container mt-n10 col-10">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    Fuzzy Tsukamoto
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2 d-flex align-items-center justify-content-center">
                                            <img class="img-fluid" style="max-width: 10rem" src="<?= base_url('img/freepik/browser-stats-pana.svg') ?>" alt="Gambar Metode Fuzzy">
                                        </div>
                                        <div class="col-lg-10 pt-4 pt-lg-0 content">
                                            <h3>Pengertian Fuzzy</h3>
                                            <p>Fuzzy Logic adalah sebuah algoritma yang didasarkan pada derajat kebenaran, Metode Fuzzy akan mengambil sebuah keputusan yang bersifat ambigu. Seperti: besar, sangat besar, sedang.</p>
                                            <p>Logika Fuzzy merupakan peningkatan dari logika boolean (True/False) yang berhadapan dengan konsep kebenaran sebagian.</p>
                                            <p>Logika Berfungsi sebagai berikut:</p>
                                            <p>1. Menangani sebuah permasalahan yang impresisi / ketidaktepatan</p>
                                            <p>2. Logika fuzzy menjebatani antara bahasa mesin yang presisi dengan bahasa manusia yang menekankan kepada makna / arti</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div>
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Fungsi Keanggotaan PH
                                    </div>
                                    <div class="card-body" id="ph" style="margin: 0 auto"></div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-area me-1"></i>
                                            Fungsi Keanggotaan Suhu
                                        </div>
                                        <div class="card-body" id="suhu"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                            Fungsi Keanggotaan Salinity
                                        </div>
                                        <div class="card-body" id="salinity"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-area me-1"></i>
                                            Fungsi Keanggotaan TDS
                                        </div>
                                        <div class="card-body" id="tds"></div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <i class="fas fa-chart-bar me-1"></i>
                                            Fungsi Keanggotaan DO
                                        </div>
                                        <div class="card-body" id="dos"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php $this->load->view("user/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("user/_partials/js.php") ?>
</body>

<script type="text/javascript">
    google.charts.load('current', {
        packages: ['corechart', 'line']
    });

    function suhuChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string');
        data.addColumn('number', 'Sedang');
        data.addColumn('number', 'Sangat Buruk');
        data.addColumn('number', 'Buruk');
        data.addColumn('number', 'Baik');
        data.addRows([
            ['0', 0, 1, 0, 0],
            ['10', 0, 1, 0, 0],
            ['12.5', 0, 0.5, 0, 0],
            ['15', 0, 0, 1, 0],
            ['17.5', 0, 0, 1, 0],
            ['20', 1, 0, 0, 0],
            ['22.5', 1, 0, 0, 0],
            ['25', 0, 0, 0, 1],
            ['26', 0, 0, 0, 1],
            ['27', 1, 0, 0, 0],
            ['28', 1, 0, 0, 0],
            ['29', 0, 0, 1, 0],
            ['30', 0, 0, 1, 0],
            ['31', 0, 0.5, 0, 0],
            ['32', 0, 1, 0, 0],
            ['', 0, 1, 0, 0]
        ]);

        // Set chart options
        var options = {

            hAxis: {
                title: 'Suhu'
            },
            vAxis: {
                title: 'Nilai Keanggotaan'
            },
            'width': 600,
            'height': 200,
            pointsVisible: true
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.LineChart(document.getElementById('suhu'));
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(suhuChart);

    function tdsChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string');
        data.addColumn('number', 'Sedang');
        data.addColumn('number', 'Sangat Buruk');
        data.addColumn('number', 'Buruk');
        data.addColumn('number', 'Baik');
        data.addRows([
            ['', 1, 0, 0, 0],
            ['0', 1, 0, 0, 0],
            ['125', 0.5, 0, 0, 0],
            ['250', 0, 0, 0, 1],
            ['300', 0, 0, 0, 1],
            ['325', 1, 0, 0, 0],
            ['350', 1, 0, 0, 0],
            ['400', 0, 0, 1, 0],
            ['450', 0, 0, 1, 0],
            ['475', 0, 0.5, 0, 0],
            ['500', 0, 1, 0, 0],
            ['', 0, 1, 0, 0]
        ]);

        // Set chart options
        var options = {

            hAxis: {
                title: 'TDS'
            },
            vAxis: {
                title: 'Nilai Keanggotaan'
            },
            'width': 600,
            'height': 200,
            pointsVisible: true
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.LineChart(document.getElementById('tds'));
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(tdsChart);

    function dosChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string');
        data.addColumn('number', 'Sedang');
        data.addColumn('number', 'Sangat Buruk');
        data.addColumn('number', 'Buruk');
        data.addColumn('number', 'Baik');
        data.addRows([
            ['0', 0, 1, 0, 0],
            ['2', 0, 1, 0, 0],
            ['3', 0, 0.5, 0, 0],
            ['3.5', 0, 0, 1, 0],
            ['4', 0, 0, 1, 0],
            ['5', 1, 0, 0, 0],
            ['6', 1, 0, 0, 0],
            ['7', 0, 0, 0, 1],
            ['', 0, 0, 0, 1]
        ]);

        // Set chart options
        var options = {

            hAxis: {
                title: 'd.o'
            },
            vAxis: {
                title: 'Nilai Keanggotaan'
            },
            'width': 600,
            'height': 200,
            pointsVisible: true
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.LineChart(document.getElementById('dos'));
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(dosChart);

    function phChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string');
        data.addColumn('number', 'Sedang');
        data.addColumn('number', 'Sangat Buruk');
        data.addColumn('number', 'Buruk');
        data.addColumn('number', 'Baik');
        data.addRows([
            ['0', 0, 1, 0, 0],
            ['5', 0, 1, 0, 0],
            ['5.25', 0, 0.5, 0, 0],
            ['5.5', 0, 0, 1, 0],
            ['6', 0, 0, 1, 0],
            ['6.5', 1, 0, 0, 0],
            ['6.65', 1, 0, 0, 0],
            ['6.8', 0, 0, 0, 1],
            ['7.4', 0, 0, 0, 1],
            ['7.7', 1, 0, 0, 0],
            ['8', 1, 0, 0, 0],
            ['8.25', 0, 0, 1, 0],
            ['8.5', 0, 0, 1, 0],
            ['8.6', 0, 0.5, 0, 0],
            ['8.7', 0, 1, 0, 0],
            ['', 0, 1, 0, 0]
        ]);

        // Set chart options
        var options = {

            hAxis: {
                title: 'PH'
            },
            vAxis: {
                title: 'Nilai Keanggotaan'
            },
            'width': 1000,
            'height': 200,
            pointsVisible: true
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.LineChart(document.getElementById('ph'));
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(phChart);

    function salinityChart() {
        // Define the chart to be drawn.
        var data = new google.visualization.DataTable();
        data.addColumn('string');
        data.addColumn('number', 'Sedang');
        data.addColumn('number', 'Sangat Buruk');
        data.addColumn('number', 'Buruk');
        data.addColumn('number', 'Baik');
        data.addRows([
            ['', 1, 0, 0, 0],
            ['0.025', 1, 0, 0, 0],
            ['0.05', 0, 0, 0, 1],
            ['0.15', 0, 0, 0, 1],
            ['0.175', 1, 0, 0, 0],
            ['0.2', 1, 0, 0, 0],
            ['0.225', 0, 0, 1, 0],
            ['0.25', 0, 0, 1, 0],
            ['0.3', 0, 0, 1, 0],
            ['0.35', 0, 1, 0, 0],
            ['0.4', 0, 1, 0, 0],
        ]);

        // Set chart options
        var options = {

            hAxis: {
                title: 'Salinity'
            },
            vAxis: {
                title: 'Nilai Keanggotaan'
            },
            'width': 600,
            'height': 200,
            pointsVisible: true
        };

        // Instantiate and draw the chart.
        var chart = new google.visualization.LineChart(document.getElementById('salinity'));
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(salinityChart);
</script>

</html>