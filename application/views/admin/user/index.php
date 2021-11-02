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
                                <span>Edit Akun</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card mb-4">
                            <div class="card-header">Edit Akun</div>
                            <div class="card-body">
                                <div class="col">
                                    <?php echo $this->session->flashdata('message') ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Nama</label>
                                        <input class="form-control" id="nama" name="nama" type="text" value="<?= $users->nama ?>" />
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Username</label>
                                        <input class="form-control" id="username" name="username" type="text" value="<?= $users->username ?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>NIK</label>
                                        <input class="form-control" id="nik" name="nik" type="text" value="<?= $users->nik ?>" />
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Nomor Telepon</label>
                                        <input class="form-control" id="no_telp" name="no_telp" type="text" value="<?= $users->no_telp ?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Alamat</label>
                                        <input class="form-control" id="alamat" name="alamat" type="text" value="<?= $users->alamat ?>" />
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>foto</label>
                                        <input class="form-control" id="gambar" name="gambar" type="file" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Password</label>
                                        <input class="form-control" id="password" name="password" type="password" />
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Konfirmasi Password</label>
                                        <input class="form-control" id="konfirmasi" name="konfirmasi" type="password" />
                                    </div>
                                </div>

                            </div>
                        </div>
                        <button name="save" id="save" type="submit" class="btn btn-primary mr-2" href="#" data-toggle="modal" data-target="#modalSave">
                            Save
                        </button>
                        <a class="btn btn-danger" href="javascript:history.go(-1)">
                            Cancel
                        </a>
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