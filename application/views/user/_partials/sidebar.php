<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Dashboard</div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseUser/Dashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Halaman Utama
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapseDashboards" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="<?= base_url("User/Dashboard") ?>">Dashboard</a>
                        <a class="nav-link" href="<?= base_url("User/About") ?>">Profil Author</a>
                    </nav>
                </div>
                <div class="sidenav-menu-heading">Pengetahuan</div>
                <a class="nav-link collapsed" href="<?= base_url('User/DataIkan') ?>">
                    <div class="nav-link-icon"><i data-feather="box"></i></div>
                    Data Ikan Koi
                </a>
                <a class="nav-link collapsed" href="<?= base_url('User/Alat') ?>">
                    <div class="nav-link-icon"><i data-feather="tool"></i></div>
                    Alat IoT
                </a>
                <a class="nav-link collapsed" href="<?= base_url('User/Fuzzy') ?>">
                    <div class="nav-link-icon"><i data-feather="airplay"></i></div>
                    Fuzzy Tsukamoto
                </a>
                <a class="nav-link collapsed" href="<?= base_url('User/Fuzzy/rules') ?>">
                    <div class="nav-link-icon"><i data-feather="columns"></i></div>
                    Fuzzy Rules
                </a>
                <div class="sidenav-menu-heading">Perhitungan</div>
                <a class="nav-link collapsed" href="<?php echo base_url('User/Data') ?>">
                    <div class="nav-link-icon"><i data-feather="briefcase"></i></div>
                    Proses Data
                </a>
                <!-- <a class="nav-link collapsed" href="<?php echo base_url('User/Perhitungan') ?>">
                    <div class="nav-link-icon"><i data-feather="code"></i></div>
                    Perhitungan Sistem
                </a> -->
                <a class="nav-link collapsed" href="<?php echo base_url('User/History') ?>">
                    <div class="nav-link-icon"><i data-feather="git-commit"></i></div>
                    History
                </a>
                <div class="sidenav-menu-heading">Pengaturan Akun</div>
                <a class="nav-link collapsed" href="<?php echo base_url('User/Akun') ?>">
                    <div class="nav-link-icon"><i data-feather="user"></i></div>
                    Pengaturan Akun
                </a>
                <a class="nav-link collapsed" href="onclick=" confirm_modal() data-toggle="modal" data-target="#modalLogout">
                    <div class="nav-link-icon"><i data-feather="log-out"></i></div>
                    Logout
                </a>

            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title"><?= $Pengguna['nama'] ?></div>
            </div>
        </div>
    </nav>
</div>
<div class="modal fade" id="modalLogout" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure to logout?</div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" type="button" href="<?= base_url('Login/logout') ?>">Yes</a>
            </div>
        </div>
    </div>
</div>