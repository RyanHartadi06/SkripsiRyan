<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("admin/_partials/head.php") ?>

<body class="nav-fixed">

    <!-- Topbar -->
    <?php $this->load->view("admin/_partials/topbar.php") ?>

    <div id="layoutSidenav">

        <!-- Sidebar -->
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="page-header pb-10 d-flex page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="activity"></i>
                                </div>
                                <span>Detail Monitoring Data</span>
                            </h1>
                            <div class="page-header-subtitle">Sistem Kendali Kualitas Air Kolam Koi</div>
                        </div>
                    </div>
                    <div class="col-3 d-flex justify-content-end mt-4 mr-2">
                        <div class="card bg-white text-black mb-4">
                            <div class="card-body">
                                <div class="d-flex justify-content-end">
                                    <div class="mr-3">
                                        <div class="text-lg font-weight-bold"><a href="<?php echo base_url('User/Proses/run?id=' . $_GET['id']) ?>"> <i class="fas fa-play"></i> Play </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container-fluid mt-n10">
                    <div class="row">
                        <div class="col-xl-3 col-md-4 mt-4">
                            <!-- User/Dashboard info widget 4-->
                            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-info h-100">
                                <div class="card-body" style="height: 8rem;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <div class="small font-weight-bold text-info mb-2">Diambil Tanggal</div>
                                            <div class="h5" id="tanggal">
                                                <?php
                                                $qq = $_GET['id'];
                                                $data = $this->db->query("SELECT createdDate FROM data_sensor WHERE id = '$qq' ORDER BY id DESC LIMIT 1")->row();

                                                if ($data) {
                                                    $tgl = $data->createdDate;
                                                    echo date_format(date_create($tgl), "Y-m-d");
                                                } else {
                                                    echo "Belum Terdeteksi";
                                                }
                                                ?>
                                            </div>
                                            <div class="h5" id="waktu">
                                                <?php
                                                $qq = $_GET['id'];
                                                $data = $this->db->query("SELECT createdDate FROM data_sensor WHERE id = '$qq' ORDER BY id DESC LIMIT 1")->row();

                                                if ($data) {
                                                    $waktu = $data->createdDate;
                                                    echo date_format(date_create($waktu), "H:i:s");
                                                } else {
                                                    echo "Belum Terdeteksi";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mt-4">
                            <!-- User/Dashboard info widget 1-->
                            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-primary h-100">
                                <div class="card-body" style="height: 8rem;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <div class="small font-weight-bold text-primary mb-1">pH Air</div>
                                            <div class="h5" id="cek_ph">
                                                <?php
                                                $qq = $_GET['id'];
                                                $data = $this->db->query("SELECT ph FROM data_sensor WHERE id = '$qq' ORDER BY id DESC LIMIT 1")->row();

                                                if ($data) {
                                                    echo "{$data->ph} pH";
                                                } else {
                                                    echo "Belum Terdeteksi";
                                                }
                                                ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mt-4">
                            <!-- User/Dashboard info widget 1-->
                            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-success h-100">
                                <div class="card-body" style="height: 8rem;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <div class="small font-weight-bold text-primary mb-1">Kemurnian Air ( TDS )</div>
                                            <div class="h5" id="cek_kelembaban">
                                                <?php
                                                $qq = $_GET['id'];
                                                $data = $this->db->query("SELECT tds FROM data_sensor WHERE id = '$qq' ORDER BY id DESC LIMIT 1")->row();

                                                if ($data) {
                                                    echo "{$data->tds} ppm";
                                                } else {
                                                    echo "Belum Terdeteksi";
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-4 mt-4">
                            <!-- User/Dashboard info widget 4-->
                            <div class="card border-top-0 border-bottom-0 border-right-0 border-left-lg border-info h-100">
                                <div class="card-body" style="height: 8rem;">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-grow-1">
                                            <div class="small font-weight-bold text-info mb-1">Temperature Air</div>
                                            <div class="h5" id="cek_suhu">
                                                <?php
                                                $qq = $_GET['id'];
                                                $data = $this->db->query("SELECT suhu FROM data_sensor WHERE id = '$qq' ORDER BY id DESC LIMIT 1")->row();

                                                if ($data) {
                                                    echo "{$data->suhu} &#176;C";
                                                } else {
                                                    echo "Belum Terdeteksi";
                                                }
                                                ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-4 mb-4">Monitoring Sensor By Grafik</h3>
                    <input type="text" id="id" value="<?= $_GET['id'] ?>" hidden>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    Data Sensor
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2 d-flex align-items-center justify-content-center">
                                            <img class="img-fluid" style="max-width: 10rem" src="<?= base_url('img/admin/logo/data-report-pana.svg') ?>" alt="">
                                        </div>
                                        <div class="col-lg-10 pt-4 pt-lg-0 content">
                                            <?php foreach ($qwe as $data) { ?>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <ul class="list-unstyled">
                                                            <li class="pb-2"><strong>Judul: </strong> <?= $data['judul'] ?></li>
                                                            <li class="pb-2"><strong>Lokasi: </strong><?= $data['lokasi'] ?></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <ul class="list-unstyled">
                                                            <li class="pb-2"><strong>Nama Kolam: </strong> <?= $data['nama_kolam'] ?>i</li>
                                                            <li class="pb-2"><strong>Dibuat Tanggal: </strong> <?= $data['CreatedDate'] ?> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <h3>Deskripsi</h3>
                                                <p><?= $data['deskripsi'] ?></p>
                                            <?php } ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 mb-4">
                            <div class="card">
                                <div class="card-header">Grafik Sensor Suhu</div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas id="grafik_suhu" width="100%" height="30"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 mb-4">
                            <div class="card">
                                <div class="card-header">Grafik Sensor Kemurnian Air ( TDS )</div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas id="grafik_tds" width="100%" height="30"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12 mb-4">
                            <div class="card">
                                <div class="card-header">Grafik Sensor pH</div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas id="grafik_ph" width="100%" height="30"></canvas></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>

            <!-- Footer -->
            <?php $this->load->view("admin/_partials/footer.php") ?>

        </div>
    </div>

    <!-- JS -->
    <?php $this->load->view("admin/_partials/js.php") ?>

</body>


<script>
    grafikPh();
    grafiksuhu();
    grafikTds();
    //grafik 
    function grafikPh() {
        // ### GRAFIK PH ### //
        var ctx = document.getElementById("grafik_ph");
        var cData = JSON.parse(`<?php echo $grafik_ph; ?>`);
        var myLineChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: cData.waktu,
                datasets: [{
                    // label: cData.suhu,
                    lineTension: 0.3,
                    backgroundColor: "rgba(0, 97, 242, 0.05)",
                    borderColor: "rgba(0, 97, 242, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(0, 97, 242, 1)",
                    pointBorderColor: "rgba(0, 97, 242, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
                    pointHoverBorderColor: "rgba(0, 97, 242, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: cData.ph
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "date"
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            callback: function(value, index, values) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: "index",
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    }

    function grafikTds() {
        var ctx = document.getElementById("grafik_tds");
        var cData = JSON.parse(`<?php echo $grafik_tds; ?>`);
        var myLineChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: cData.waktu,
                datasets: [{
                    // label: cData.suhu,
                    lineTension: 0.3,
                    backgroundColor: "rgba(0, 97, 242, 0.05)",
                    borderColor: "rgba(0, 97, 242, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(0, 97, 242, 1)",
                    pointBorderColor: "rgba(0, 97, 242, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
                    pointHoverBorderColor: "rgba(0, 97, 242, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: cData.tds
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "date"
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            callback: function(value, index, values) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: "index",
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    }

    function grafiksuhu() {
        var ctx = document.getElementById("grafik_suhu");
        var cData = JSON.parse(`<?php echo $grafik_suhu; ?>`);
        var myLineChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: cData.waktu,
                datasets: [{
                    // label: cData.suhu,
                    lineTension: 0.3,
                    backgroundColor: "rgba(0, 97, 242, 0.05)",
                    borderColor: "rgba(0, 97, 242, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(0, 97, 242, 1)",
                    pointBorderColor: "rgba(0, 97, 242, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(0, 97, 242, 1)",
                    pointHoverBorderColor: "rgba(0, 97, 242, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: cData.suhu
                }]
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: "date"
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 7
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            callback: function(value, index, values) {
                                return number_format(value);
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }]
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: "#6e707e",
                    titleFontSize: 14,
                    borderColor: "#dddfeb",
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: "index",
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + number_format(tooltipItem.yLabel);
                        }
                    }
                }
            }
        });
    }
</script>

</html>