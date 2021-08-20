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
        <?php $this->load->view("user/_partials/sidebar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
                    <div class="container-fluid">
                        <div class="page-header-content">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="grid"></i></div>
                                <span>Alat Internet of Things</span>
                            </h1>
                            <div class="page-header-subtitle">Berikut adalah Hardware yang digunakan pada penelitian saat ini</div>
                        </div>
                    </div>
                </div>
                <!-- Main page content-->
                <div class="container col-12">
                    <h4 class="mb-0 mt-3">Alat IoT</h4>
                    <hr class="mt-2 mb-4" />
                    <!-- Knowledge base main category card 1-->
                    <?php foreach ($alat as $key) { ?>
                        <a class="card card-icon lift lift-sm mb-4">
                            <div class="row no-gutters">
                                <div class="col-auto card-icon-aside bg-primary"><img src="<?= base_url('uploads/alat/') . $key['gambar'] ?>" style="width:150px" alt=""></div>
                                <div class="col">
                                    <div class="card-body py-4">
                                        <h5 class="card-title text-primary mb-2"><?= $key['nama_alat'] ?></h5>
                                        <div class="small text-muted">Deskripsi</div>
                                        <p class="card-text mb-1"><?= $key['deskripsi'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>

                    <!-- Knowledge base main category card 2-->


                </div>
            </main> <!-- Footer -->

            <!-- Footer -->
            <?php $this->load->view("user/_partials/footer.php") ?>

        </div>
    </div>

    <!-- JS -->
    <?php $this->load->view("user/_partials/js.php") ?>

</body>

</html>