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
                                        Detail Ikan
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
                                    Detail Ikan
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2 d-flex align-items-center justify-content-center">
                                            <img class="img-fluid" style="max-width: 10rem" src="<?= base_url("uploads/ikan/") . $ikan->gambar ?>" alt="">
                                        </div>
                                        <div class="col-lg-10 pt-4 pt-lg-0 content">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li class="pb-2"><strong>Jenis Ikan: </strong> <?= $ikan->nama_ikan ?></li>

                                                    </ul>
                                                </div>

                                            </div>
                                            <!-- <p><?= $p['profil'] ?></p> -->
                                            <h3>Deskripsi</h3>
                                            <p><?= $ikan->deskripsi ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    Kriteria
                                </div>
                                <div class="card-body">
                                    <div class="datatable table-responsive">
                                        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Nomor</th>
                                                    <th>pH</th>
                                                    <th>Tds</th>
                                                    <th>Suhu</th>
                                                    <th>Do</th>
                                                    <th>Salinity</th>
                                                    <th>Grade</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($karakteristik as $d) { ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $d['ph_min'] ?> - <?= $d['ph_max'] ?></td>
                                                        <td><?= $d['tds_min'] ?> - <?= $d['tds_max'] ?></td>
                                                        <td><?= $d['suhu_min'] ?> - <?= $d['suhu_max'] ?></td>
                                                        <td><?= $d['do_min'] ?> - <?= $d['do_max'] ?></td>
                                                        <td><?= $d['salinity_min'] ?> - <?= $d['salinity_max'] ?></td>
                                                        <td><?= $d['grade'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

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

</html>