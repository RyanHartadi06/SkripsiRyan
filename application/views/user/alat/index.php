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
                                <span>Alat Internet of Things</span>
                            </h1>
                            <div class="page-header-subtitle">Berikut adalah Hardware yang digunakan pada penelitian saat ini</div>
                        </div>
                    </div>
                </div>
                <!-- Main page content-->
                <div class="container col-12">
                    <h4 class="mb-0 mt-3">Alat IoT</h4>
                    <hr class="mt-2 mb-4" />
                    <!-- Knowledge base main category card 1-->
                    <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
                        <div class="row no-gutters">
                            <div class="col-auto card-icon-aside bg-primary"><i class="text-white-50" data-feather="compass"></i></div>
                            <div class="col">
                                <div class="card-body py-4">
                                    <h5 class="card-title text-primary mb-2">Getting Started</h5>
                                    <p class="card-text mb-1">Basic information about getting started including installation instructions, setup, and basic usage.</p>
                                    <div class="small text-muted">5 articles in this category</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Knowledge base main category card 2-->
                    <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
                        <div class="row no-gutters">
                            <div class="col-auto card-icon-aside bg-secondary"><i class="text-white-50" data-feather="users"></i></div>
                            <div class="col">
                                <div class="card-body py-4">
                                    <h5 class="card-title text-secondary mb-2">Account Information</h5>
                                    <p class="card-text mb-1">Troubleshooting guides specific to your account including creating new accounts, modifying existing accounts, and deleting accounts.</p>
                                    <div class="small text-muted">3 articles in this category</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <!-- Knowledge base main category card 3-->
                    <a class="card card-icon lift lift-sm mb-4" href="knowledge-base-category.html">
                        <div class="row no-gutters">
                            <div class="col-auto card-icon-aside bg-teal"><i class="text-white-50" data-feather="book"></i></div>
                            <div class="col">
                                <div class="card-body py-4">
                                    <h5 class="card-title text-teal mb-2">Terms of Service</h5>
                                    <p class="card-text mb-1">Our terms, licensing, and other legal documentation.</p>
                                    <div class="small text-muted">7 articles in this category</div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </main> <!-- Footer -->

            <!-- Footer -->
            <?php $this->load->view("user/_partials/footer.php") ?>

        </div>
    </div>

    <!-- JS -->
    <?php $this->load->view("user/_partials/js.php") ?>

</body>

</html>