<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("user/_partials/head.php") ?>

<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="font-weight-bold my-4">Register Akun</h3>
                                </div>
                                <div class="card-body">
                                    <div class="col">
                                        <?php echo $this->session->flashdata('message') ?>
                                    </div>
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="col">
                                                <?php echo $this->session->flashdata('pesan') ?>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-12 col-sm-12">
                                                    <label>Email</label>
                                                    <input class="form-control" id="email" name="email" type="email" placeholder="Email" />
                                                    <?php echo form_error('email'); ?>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-12 col-sm-12">
                                                    <label>Password</label>
                                                    <input class="form-control" id="password" name="password" type="password" placeholder="Password" />
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-6 col-sm-12">
                                                    <label>Nama Lengkap</label>
                                                    <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama User" />
                                                    <?php echo form_error('nama'); ?>
                                                </div>
                                                <div class="form-group col-lg-6 col-sm-12">
                                                    <label>Nomor Telepon</label>
                                                    <input class="form-control" id="no_telp" name="no_telp" type="text" placeholder="Nomor Telepon" />
                                                    <?php echo form_error('no_telp'); ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-12 col-sm-12">
                                                    <label>Alamat</label>
                                                    <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat" />
                                                    <?php echo form_error('alamat'); ?>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-lg-12 col-sm-12">
                                                    <label>Foto</label>
                                                    <input class="form-control" id="gambar" name="gambar" type="file" placeholder="Foto" />
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
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="footer mt-auto footer-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-md-center small">
                            <?= SITE_NAME ?> |
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    </div>

    <!-- JS -->
    <?php $this->load->view("user/_partials/js.php") ?>

</body>

</html>