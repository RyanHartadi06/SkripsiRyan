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
                                <span>Fuzzy Rules</span>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-n10">
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
                                            <th>Tds</th>
                                            <th>Do</th>
                                            <th>Salinity</th>
                                            <th>Grade</th>
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
</script>

</html>