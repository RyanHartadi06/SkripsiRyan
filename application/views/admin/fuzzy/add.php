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
                                <span>Tambah Fuzzy Rules</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card mb-4">
                            <div class="card-header">Tambah Fuzzy Rules</div>
                            <div class="card-body">
                                <div class="col">
                                    <?php echo $this->session->flashdata('pesan') ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Ph</label>
                                        <select class="form-control" id="ph" name="ph">
                                            <?php foreach ($var as $d) { ?>
                                                <option value="<?= $d['nama_variabel'] ?>"><?= $d['nama_variabel'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Suhu</label>
                                        <select class="form-control" id="suhu" name="suhu">
                                            <?php foreach ($var as $d) { ?>
                                                <option value="<?= $d['nama_variabel'] ?>"><?= $d['nama_variabel'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Tds</label>
                                        <select class="form-control" id="tds" name="tds">
                                            <?php foreach ($var as $d) { ?>
                                                <option value="<?= $d['nama_variabel'] ?>"><?= $d['nama_variabel'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Do</label>
                                        <select class="form-control" id="do" name="do">
                                            <?php foreach ($var as $d) { ?>
                                                <option value="<?= $d['nama_variabel'] ?>"><?= $d['nama_variabel'] ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Salinity</label>
                                        <select class="form-control" id="salinity" name="salinity">
                                            <?php foreach ($var as $d) { ?>
                                                <option value="<?= $d['nama_variabel'] ?>"><?= $d['nama_variabel'] ?></option>
                                            <?php } ?>

                                        </select>
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Grade</label>
                                        <select class="form-control" id="grade" name="grade">

                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                        </select>
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