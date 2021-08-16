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
                <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <h1 class="page-header-title">
                                <div class="page-header-icon">
                                    <i data-feather="activity"></i>
                                </div>
                                <span>Monitoring Data</span>
                            </h1>
                            <div class="page-header-subtitle">Sistem Kendali Kualitas Air Kolam Koi</div>
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
                                            <div class="h5" id="tanggal"></div>
                                            <div class="h5" id="waktu"></div>
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
                                            <div class="h5" id="cek_ph"></div>
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
                                            <div class="h5" id="cek_kelembaban"></div>
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
                                            <div class="h5" id="cek_suhu"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <h3 class="mt-4 mb-4">Monitoring Sensor By Grafik</h3>
                    <div class="row mt-5">
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-header">Grafik Sensor Suhu</div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas id="grafik_suhu" width="100%" height="30"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="card">
                                <div class="card-header">Grafik Sensor Kemurnian Air ( TDS )</div>
                                <div class="card-body">
                                    <div class="chart-area"><canvas id="grafik_tds" width="100%" height="30"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
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
    var ph = [];
    //buat refresh
    var auto_refresh = setInterval(function() {
        $('#cek_suhu').fadeOut(function() {
            $(this).load('Proses/refreshSuhu', function() {
                $(this).fadeIn();
            });
        });
        $('#waktu').fadeOut(function() {
            $(this).load('Proses/refreshWaktu', function() {
                $(this).fadeIn();
            });
        });
        $('#tanggal').fadeOut(function() {
            $(this).load('Proses/refreshTanggal', function() {
                $(this).fadeIn();
            });
        });
        $('#cek_kelembaban').fadeOut(function() {
            $(this).load('Proses/refreshTds', function() {
                $(this).fadeIn();
            });
        });
        $('#cek_ph').fadeOut(function() {
            $(this).load('Proses/refreshph', function() {
                $(this).fadeIn();
            });
        });
        ajaxPh();
        ajaxSuhu();
        ajaxTds();
    }, 2000);
    //end buat refresh
    function ajaxPh() {
        $.ajax({
            url: "<?= base_url('User/Proses/pHajax') ?>",
            dataType: "json",
            success: function(result) {
                var output = Object.entries(result).map(([key, value]) => (value.ph));
                const propertyNames = Object.values(output);
                var outputDate = Object.entries(result).map(([key, value]) => (value.createdDate));
                const propertyDate = Object.values(outputDate);
                grafikPh(propertyNames, outputDate);
            }
        });
    }

    function ajaxSuhu() {
        $.ajax({
            url: "<?= base_url('User/Proses/suhuAjax') ?>",
            dataType: "json",
            success: function(result) {
                var output = Object.entries(result).map(([key, value]) => (value.suhu));
                const suhu = Object.values(output);
                var outputDate = Object.entries(result).map(([key, value]) => (value.createdDate));
                const createdDate = Object.values(outputDate);
                grafiksuhu(suhu, createdDate);
            }
        });
    }

    function ajaxTds() {
        $.ajax({
            url: "<?= base_url('User/Proses/tdsajax') ?>",
            dataType: "json",
            success: function(result) {
                var output = Object.entries(result).map(([key, value]) => (value.tds));
                const tds = Object.values(output);
                var outputDate = Object.entries(result).map(([key, value]) => (value.createdDate));
                const createdDate = Object.values(outputDate);
                grafikTds(tds, createdDate);
            }
        });
    }
    //grafik 
    function grafikPh(ph, createdDate) {
        // ### GRAFIK PH ### //
        var ctx = document.getElementById("grafik_ph");
        // var cData = JSON.parse(`<?php echo $grafik_ph; ?>`);
        var myLineChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: createdDate,
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
                    data: ph
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

    function grafikTds(tds, createdDate) {
        var ctx = document.getElementById("grafik_tds");
        // var cData = JSON.parse(`<?php echo $grafik_tds; ?>`);
        var myLineChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: createdDate,
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
                    data: tds
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

    function grafiksuhu(suhu, createdDate) {
        var ctx = document.getElementById("grafik_suhu");
        var cData = JSON.parse(`<?php echo $grafik_suhu; ?>`);
        var myLineChart = new Chart(ctx, {
            type: "line",
            data: {
                labels: createdDate,
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
                    data: suhu
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
    //grafik
</script>

</html>