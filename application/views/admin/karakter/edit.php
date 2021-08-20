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
                                <span>Edit Karakter Kolam</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card mb-4">
                            <div class="card-header">Edit Karakter Kolam</div>
                            <div class="card-body">
                                <div class="col">
                                    <?php echo $this->session->flashdata('message') ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>Jenis Ikan</label>
                                        <select class="form-control" id="ikan" name="ikan">
                                            <?php foreach ($ikan as $key) { ?>
                                                <option value="<?= $key['id_jenis'] ?>" <?= ($data->id_ikan == $key['id_jenis'] ? 'selected' : '') ?>><?= $key['nama_ikan'] ?></option>
                                            <?php } ?>
                                        </select> </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Ph</label>
                                        <input class="form-control" id="ph" name="ph" type="text" placeholder="Input Ph" value="<?= $data->ph ?>" />
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Tds</label>
                                        <input class="form-control" id="tds" name="tds" type="text" placeholder="Input Tds" value="<?= $data->tds ?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Suhu</label>
                                        <input class="form-control" id="suhu" name="suhu" type="text" placeholder="Input Suhu" value="<?= $data->suhu ?>" />
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Do</label>
                                        <input class="form-control" id="do" name="do" type="text" placeholder="Input DO" value="<?= $data->do ?>" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Salinity</label>
                                        <input class="form-control" id="salinity" name="salinity" type="text" placeholder="Input Salinity" value="<?= $data->salinity ?>" />
                                    </div>
                                    <div class="form-group col-lg-6 col-sm-6">
                                        <label>Grade</label>
                                        <select class="form-control" id="grade" name="grade">
                                            <?php if ($data->grade == "A") { ?>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            <?php } else if ($data->grade == "B") { ?>
                                                <option value="B">B</option>
                                                <option value="A">A</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            <?php } else if ($data->grade == "C") { ?>
                                                <option value="C">C</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="D">D</option>
                                            <?php } elseif ($data->grade == "D") {  ?>
                                                <option value="D">D</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                            <?php } ?>

                                        </select> </div>
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