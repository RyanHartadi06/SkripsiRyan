<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("user/_partials/head.php") ?>

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
                                <div class="page-header-icon"><i data-feather="user"></i></div>
                                <span>Perhitungan Fuzzy</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
                    <form action="<?= base_url('User/Perhitungan/hitung') ?>" method="post" enctype="multipart/form-data">
                        <div class="card mb-4">
                            <div class="card-header">Perhitungan Fuzzy</div>
                            <div class="card-body">
                                <div class="col">
                                    <?php echo $this->session->flashdata('pesan') ?>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>PH</label>
                                        <input class="form-control" id="ph" name="ph" type="text" placeholder="PH" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>TDS</label>
                                        <input class="form-control" id="tds" name="tds" type="text" placeholder="TDS" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>Suhu</label>
                                        <input class="form-control" id="suhu" name="suhu" type="text" placeholder="Suhu" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>DO</label>
                                        <input class="form-control" id="do" name="do" type="text" placeholder="DO" required />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-lg-12 col-sm-12">
                                        <label>Salinity</label>
                                        <input class="form-control" id="salinity" name="salinity" type="text" placeholder="Salinity" required />
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