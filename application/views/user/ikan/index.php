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
                                <span>Data Ikan Koi</span>
                            </h1>
                            <div class="page-header-subtitle">Berikut adalah jenis ikan koi yang diteliti pada skripsi saat ini berdasarkan jenis ikan yang banyak diminati oleh masyarakat</div>
                        </div>
                    </div>
                </div>
                <!-- Main page content-->
                <div class="container col-12">
                    <h4 class="mb-0 mt-3">Data Ikan</h4>
                    <hr class="mt-2 mb-4" />
                    <!-- Knowledge base main category card 1-->
                    <?php foreach ($ikan as $ikan) { ?>
                        <a class="card card-icon lift lift-sm mb-4" href="<?= base_url('User/DataIkan/detail/') . $ikan['id_jenis'] ?>">
                            <div class="row no-gutters">
                                <div class="col-auto card-icon-aside bg-primary"><img src="<?= base_url('uploads/ikan/') . $ikan['gambar'] ?>" alt="" style="width:50px"></div>
                                <div class="col">
                                    <div class="card-body py-4">
                                        <h5 class="card-title text-primary mb-2"><?= $ikan['nama_ikan'] ?></h5>
                                        <p class="card-text mb-1"><?= $ikan['deskripsi'] ?></p>
                                        <!-- <div class="small text-muted">5 articles in this category</div> -->
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- Knowledge base main category card 2-->
                    <?php } ?>
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