<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("user/_partials/head.php") ?>
<!-- <?php $this->load->view("user/_partials/modal/delete.php") ?> -->

<body class="nav-fixed">

    <!-- Topbar -->
    <?php $this->load->view("user/_partials/topbar.php") ?>

    <div id="layoutSidenav">

        <!-- Sidebar -->
        <?php $this->load->view("user/_partials/sidebar_admin.php") ?>


        <div id="layoutSidenav_content">
            <main>
                <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="grid"></i></div>
                                <span>Nilai Output</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-2 d-flex align-items-center justify-content-center">
                                    <img class="img-fluid" style="max-width: 10rem" src="<?= base_url("img/admin/logo/statistics-pana.svg") ?>" alt="">
                                </div>
                                <div class="col-lg-10 pt-4 pt-lg-0 content">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="list-unstyled">
                                                <li class="pb-2"><strong>PH: </strong> <?= $ikan->ph ?></li>
                                                <li class="pb-2"><strong>TDS: </strong> <?= $ikan->tds ?></li>
                                                <li class="pb-2"><strong>Suhu: </strong> <?= $ikan->suhu ?></li>
                                                <li class="pb-2"><strong>Salinity: </strong> <?= $ikan->salinity ?></li>
                                                <li class="pb-2"><strong>DO: </strong> <?= $ikan->do ?></li>

                                            </ul>
                                        </div>

                                    </div>

                                    <h3>Output Nilai: <b><?php if ($ikan->nilai != 9999) {
                                                                echo $ikan->nilai;
                                                            } else {
                                                                echo "Kualitas Buruk";
                                                                // echo $output;
                                                            } ?></b>

                                    </h3>
                                    <h5> Grade : <b>
                                            <?= $ikan->grade ?>
                                        </b> </h5>
                                    <input type="text" name="nilai" id="nilai" value="<?= $ikan->nilai ?>" hidden>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header">Output Pemilihan Jenis Ikan Koi</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-12 col-lg-12">
                                    <table class="table" id="dataTable" cellspacing="0">
                                        <thead>
                                            <tr class="text-center">
                                                <th>Jenis Ikan Koi</th>
                                                <th>Kualitas Air Untuk Ikan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <p>Kohaku</p>
                                                    <input type="hidden" name="koh" id="koh" class="koh" style=" border:none; text-align:center;" readonly />
                                                </td>
                                                <td id="kohaku"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Sanke</p>
                                                    <input type="hidden" name="san" id="san" class="san" style=" border:none; text-align:center;" readonly />
                                                </td>
                                                <td id="sanke"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Sowa</p>
                                                    <input type="hidden" name="sow" id="sow" class="sow" style=" border:none; text-align:center;" readonly />
                                                </td>
                                                <td id="sowa"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Shiro</p>
                                                    <input type="hidden" name="shi" id="shi" class="shi" style=" border:none; text-align:center;" readonly />
                                                </td>
                                                <td id="shiro"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Ogan</p>
                                                    <input type="hidden" name="oga" id="oga" class="oga" style=" border:none; text-align:center;" readonly />
                                                </td>
                                                <td id="ogan"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p>Yamabuki</p>
                                                    <input type="hidden" name="yam" id="yam" class="yam" style=" border:none; text-align:center;" readonly />
                                                </td>
                                                <td id="yamabuki"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="col">
                                <?php echo $this->session->flashdata('message') ?>
                            </div>
                            <div class="datatable table-responsive">
                                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>Ph</th>
                                            <th>Suhu</th>
                                            <th>TDS</th>
                                            <th>Do</th>
                                            <th>Salinity</th>
                                            <th>Grade</th>
                                            <th>Min</th>
                                            <th>Inference</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($data as $d) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $d['ph'] ?></td>
                                                <td><?= $d['suhu'] ?></td>
                                                <td><?= $d['tds'] ?></td>
                                                <td><?= $d['do'] ?></td>
                                                <td><?= $d['salinity'] ?></td>
                                                <td><?= $d['grade'] ?></td>
                                                <td><?= $d['nilai_min'] ?></td>
                                                <td><?= $d['inference'] ?></td>

                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="modal fade" id="modalDelete" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">Apakah Anda yakin untuk hapus data?</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                                                <a class="btn btn-danger" id="delete_link" type="button" href="">Hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>

            <!-- Footer -->
            <?php $this->load->view("user/_partials/footer.php") ?>

        </div>
    </div>

    <!-- JS -->
    <?php $this->load->view("user/_partials/js.php") ?>

</body>
<script>
    function confirm_hapus(add) {
        $('#modalDelete').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('delete_link').setAttribute('href', add);
    }

    var nilaiHasil = document.getElementById("nilai").value;
    console.log(nilaiHasil);

    function gradeKohaku() {
        if (nilaiHasil <= 201) {
            return "<p class='bold text-success'>Optimal (A)</p>"
        } else if (nilaiHasil >= 200 && nilaiHasil <= 300) {
            return "<p class='bold text-primary'>Sedang (B)</p>"
        } else if (nilaiHasil >= 300 && nilaiHasil <= 400) {
            return "<p class='bold text-warning'>Buruk (C)</p>"
        } else {
            return "<p class='bold text-danger'>Sangat Buruk (D)</p>"
        }
    }

    function gradeKoh() {
        if (nilaiHasil <= 201) {
            return "Optimal (A)"
        } else if (nilaiHasil >= 200 && nilaiHasil <= 300) {
            return "Sedang (B)"
        } else if (nilaiHasil >= 300 && nilaiHasil <= 400) {
            return "Buruk (C)"
        } else {
            return "Sangat Buruk (D)"
        }
    }

    function gradeSowaSanke() {
        if (nilaiHasil <= 201) {
            return "<p class='bold text-success'>Optimal (A)</p>"
        } else if (nilaiHasil >= 200 && nilaiHasil <= 300) {
            return "<p class='bold text-primary'>Sedang (B)</p>"
        } else if (nilaiHasil >= 300 && nilaiHasil <= 400) {
            return "<p class='bold text-warning'>Buruk (C)</p>"
        } else {
            return "<p class='bold text-danger'>Sangat Buruk (D)</p>"
        }
    }

    function gradeSow() {
        if (nilaiHasil <= 201) {
            return "Optimal (A)"
        } else if (nilaiHasil >= 200 && nilaiHasil <= 300) {
            return "Sedang (B)"
        } else if (nilaiHasil >= 300 && nilaiHasil <= 400) {
            return "Buruk (C)"
        } else {
            return "Sangat Buruk (D)"
        }
    }

    function gradeShiro() {
        if (nilaiHasil <= 232) {
            return "<p class='bold text-success'>Optimal (A)</p>"
        } else if (nilaiHasil >= 233 && nilaiHasil <= 350) {
            return "<p class='bold text-primary'>Sedang (B)</p>"
        } else if (nilaiHasil >= 300 && nilaiHasil <= 440) {
            return "<p class='bold text-warning'>Buruk (C)</p>"
        } else {
            return "<p class='bold text-danger'>Sangat Buruk (D)</p>"
        }
    }

    function gradeShi() {
        if (nilaiHasil <= 232) {
            return "Optimal (A)"
        } else if (nilaiHasil >= 233 && nilaiHasil <= 350) {
            return "Sedang (B)"
        } else if (nilaiHasil >= 300 && nilaiHasil <= 440) {
            return "Buruk (C)"
        } else {
            return "Sangat Buruk (D)"
        }
    }

    function gradeOganYamabuki() {
        if (nilaiHasil <= 201) {
            return "<p class='bold text-success'>Optimal (A)</p>"
        } else if (nilaiHasil >= 200 && nilaiHasil <= 300) {
            return "<p class='bold text-primary'>Sedang (B)</p>"
        } else if (nilaiHasil >= 300 && nilaiHasil <= 400) {
            return "<p class='bold text-warning'>Buruk (C)</p>"
        } else {
            return "<p class='bold text-danger'>Sangat Buruk (D)</p>"
        }
    }

    function gradeOga() {
        if (nilaiHasil <= 201) {
            return "Optimal (A)"
        } else if (nilaiHasil >= 200 && nilaiHasil <= 300) {
            return "Sedang (B)"
        } else if (nilaiHasil >= 300 && nilaiHasil <= 400) {
            return "Buruk (C)"
        } else {
            return "Sangat Buruk (D)"
        }
    }
    var kohaku = gradeKohaku();
    $('#kohaku').html(kohaku);
    var sowasanke = gradeSowaSanke();
    $('#sowa').html(sowasanke);
    $('#sanke').html(sowasanke);
    var shiro = gradeShiro();
    $('#shiro').html(shiro);
    var oganyamabuki = gradeOganYamabuki();
    $('#ogan').html(oganyamabuki);
    $('#yamabuki').html(oganyamabuki);
</script>

</html>