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
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header justify-content-center">
                                    <h3 class="font-weight-bold my-4">Lupa Password Akun</h3>
                                </div>
                                <div class="card-body">
                                    <div class="col">
                                        <?php echo $this->session->flashdata('message') ?>
                                    </div>
                                    <form method="post" action="updatepass" autocomplete="off">
                                        <!-- <?php echo validation_errors(); ?> -->
                                        <div class="form-group">
                                            <label class="small mb-1" for="pass1">Password</label>
                                            <input class="form-control py-4" id="pass1" name="pass1" type="password" placeholder="Enter Password" required />
                                            <input class="form-control py-4" id="email" name="email" value="<?= $_GET['email'] ?>" hidden />
                                        </div>
                                        <div class="form-group">
                                            <label class="small mb-1" for="pass2">Konfirmasi Password</label>
                                            <input class="form-control py-4" id="pass2" name="pass2" type="password" placeholder="Enter Confirm Password" required />
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary mx-auto">Kirim</button>

                                        </div>
                                    </form>
                                    <div class="mt-4">
                                        <a href="<?= base_url('Login') ?>">Kembali Ke Halaman Login</a>
                                    </div>
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