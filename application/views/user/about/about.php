<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("user/_partials/head.php") ?>
<!-- <?php $this->load->view("user/_partials/modal/save.php") ?> -->

<body class="nav-fixed">

    <!-- Topbar -->
    <?php $this->load->view("user/_partials/topbar.php") ?>

    <div id="layoutSidenav">

        <!-- Sidebar -->
        <?php $this->load->view("user/_partials/sidebar.php") ?>
        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="user"></i></div>
                                        Profil Author
                                    </h1>
                                    <div class="page-header-subtitle">Sistem Kendali Kualitas Air Kolam Koi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <div class="container mt-n10">
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    Biodata
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-2 d-flex align-items-center justify-content-center">
                                            <img class="img-fluid" style="max-width: 10rem" src="<?= base_url("uploads/about/profile.JPG") ?>" alt="">
                                        </div>
                                        <div class="col-lg-10 pt-4 pt-lg-0 content">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li class="pb-2"><strong>Nama: </strong> Ryan Hartadi</li>
                                                        <li class="pb-2"><strong>Tempat, Tanggal Lahir: </strong>Jember, 7 Januari 2000</li>
                                                        <li class="pb-2"><strong>Institusi: </strong> Politeknik Negeri Jember</li>
                                                        <li class="pb-2"><strong>Jurusan: </strong>Teknologi Informasi</li>
                                                        <li class="pb-2"><strong>Program Studi: </strong> Teknik Informatika</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6">
                                                    <ul class="list-unstyled">
                                                        <li class="pb-2"><strong>Jenis Kelamin: </strong> Laki Laki</li>
                                                        <li class="pb-2"><strong>Usia: </strong> 21 Tahun </li>
                                                        <li class="pb-2"><strong>Email: </strong> <a class="a-link" target="_blank" href="mailto:Ryanhartadi999@gmail.com">Ryanhartadi999@gmail.com</a></li>
                                                        <li class="pb-2"><strong>Website: </strong> <a class="a-link" target="_blank" href="https://ryan.flow-byte.com">Ryan.flow-byte.com</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- <p><?= $p['profil'] ?></p> -->
                                            <h3>Profil Singkat</h3>
                                            <p>Halo saya Ryan Hartadi dan saat ini kuliah di Politeknik Negeri Jember Jurusan Teknologi Informasi Program Studi Teknik Informatika. Untuk mendapatkan pengalaman kerja, saya membuat tim developer dengan mengerjakan proyek kecil hingga menengah.

                                                Saya adalah Backend Developer. Saya seorang programmer junior dengan pengetahuan yang baik tentang teknik backend. Saya suka code, saya suka code bersih. Dan saya menyukai Javascript. Karena Javascript sangat cepat.
                                                Saya Menyukai framework React sebagai Client Side dan Nodejs untuk sisi Server Side.
                                                Saya sangat menyukai sebuah tantangan hidup.


                                                Visi hidup saya adalah 'Jangan pernah menyerah, jika Anda menyerah, itu hilang'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 mb-3">
                            <div class="card">
                                <div class="card-header">
                                    Kontak
                                </div>
                                <div class="card-body">
                                    <div class="align-items-center justify-content-between row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center mb-3">
                                            <i class="fab fa fa-envelope fa-2x cc-color-gmail"></i>
                                            <div class="ml-4">
                                                <a class="a-link" href="mailto:Ryanhartadi999@gmail.com">
                                                    <div class="small text-black">Ryanhartadi999@gmail.com</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center mb-3">
                                            <i class="fab fa-twitter fa-2x cc-color-twitter"></i>
                                            <div class="ml-4">
                                                <a class="a-link" target="_blank" href="@ryanhartadi07">
                                                    <div class="small text-black">@ryanhartadi07</div>
                                                    <div class="text-xs">@ryanhartadi07</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center mb-3">
                                            <i class="fab fa-instagram fa-2x cc-color-instagram"></i>
                                            <div class="ml-4">
                                                <a class="a-link" target="_blank" href="@Ryanhartadi999">
                                                    <div class="small text-black">Ryanhartadi999</div>
                                                    <div class="text-xs">@Ryanhartadi999</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center mb-3">
                                            <i class="fab fa-facebook fa-2x cc-color-facebook"></i>
                                            <div class="ml-4">
                                                <a class="a-link" target="_blank" href="Ryanhartadi32">
                                                    <div class="small text-black">Ryan Hartadi</div>
                                                    <div class="text-xs">Ryanhartadi32</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center mb-3">
                                            <i class="fab fa-github fa-2x cc-color-github"></i>
                                            <div class="ml-4">
                                                <a class="a-link" target="_blank" href="Ryanhartadi06">
                                                    <div class="small text-black">Ryanhartadi06</div>
                                                    <div class="text-xs">Ryanhartadi06</div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-xs-12 d-flex align-items-center mb-3">
                                            <i class="fab fa-linkedin fa-2x cc-color-linkedin"></i>
                                            <div class="ml-4">
                                                <a class="a-link" target="_blank" href="Ryanhartadi06">
                                                    <div class="small text-black">Ryanhartadi06</div>
                                                    <div class="text-xs">Ryanhartadi06</div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <?php $this->load->view("user/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("user/_partials/js.php") ?>
</body>

</html>