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
                                <span>Edit Data Alat</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card mb-4">
                            <div class="card-header">Edit Data Alat</div>
                            <div class="card-body">
                                <div class="col">
                                    <?php echo $this->session->flashdata('pesan') ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>Nama Alat</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="Nama Alat" value="<?= $alat->nama_alat ?>" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>Gambar</label>
                                        <input class="form-control" id="gambar" name="gambar" type="file" placeholder="Gambar" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>Deskripsi</label>
                                        <textarea class="form-control" id="desc" name="desc" type="text" placeholder="Deskripsi"><?= $alat->deskripsi ?></textarea>
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
<script>
    CKEDITOR.replace('desc');
</script>

</html>