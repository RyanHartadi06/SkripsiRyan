<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("user/_partials/head.php") ?>

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
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                <span>Detail Akun</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card mb-4">
                            <div class="card-header">Detail Akun</div>
                            <div class="card-body">
                                <div class="col">
                                    <?php echo $this->session->flashdata('message') ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Nama</label>
                                        <br>
                                        <b><?= $users->nama ?></b>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Username</label>
                                        <br>
                                        <b><?= $users->username ?></b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>NIK</label>
                                        <br>
                                        <b><?= $users->nik ?></b>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Nomor Telepon</label>
                                        <br>
                                        <b><?= $users->no_telp ?></b>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Alamat</label>
                                        <br>
                                        <b><?= $users->alamat ?></b>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Is Active</label>
                                        <br>
                                        <?php if ($users->is_active == 1) { ?>
                                            <span class="badge badge-primary">Aktif</span>
                                        <?php } ?>
                                        <?php if ($users->is_active == 2) { ?>
                                            <span class="badge badge-danger">Off</span>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label for="">Foto</label>
                                        <br>
                                        <img src="<?= base_url('uploads/user/' . $users->foto) ?>" alt="" width="120">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if ($users->is_active == 1) { ?>
                            <a href="<?= base_url('Admin/Akun/off/' .  $users->id_pengguna) ?>" type="submit" class="btn btn-primary mr-2">
                                Nonaktifkan
                            </a>
                        <?php } ?>
                        <?php if ($users->is_active == 2) { ?>
                            <a href="<?= base_url('Admin/Akun/on/' .  $users->id_pengguna) ?>" type="submit" class="btn btn-primary mr-2">
                                Aktifkan
                            </a>
                        <?php } ?>


                    </form>
                </div>
            </main>

            <!-- Footer -->
            <?php $this->load->view("user/_partials/footer.php") ?>

        </div>
    </div>

    <!-- JS -->
    <?php $this->load->view("user/_partials/js.php") ?>

</body>

</html>