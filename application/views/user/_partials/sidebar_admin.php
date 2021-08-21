<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Master Data</div>
                <a class="nav-link collapsed" href="<?= base_url('Admin/Profil') ?>">
                    <div class="nav-link-icon"><i data-feather="user"></i></div>
                    Profile
                </a>

                <a class="nav-link collapsed" href="<?= base_url('Admin/Ikan') ?>">
                    <div class="nav-link-icon"><i data-feather="box"></i></div>
                    Data Ikan Koi
                </a>
                <a class="nav-link collapsed" href="<?= base_url('Admin/Alat') ?>">
                    <div class="nav-link-icon"><i data-feather="tool"></i></div>
                    Alat IoT
                </a>
                <a class="nav-link collapsed" href="<?= base_url('Admin/Fuzzy') ?>">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Fuzzy Rules
                </a>
                <a class="nav-link collapsed" href="<?= base_url('Admin/Karakter') ?>">
                    <div class="nav-link-icon"><i data-feather="folder-plus"></i></div>
                    Karakteristik Kolam
                </a>
                <div class="sidenav-menu-heading">Pengaturan Akun</div>
                <a class="nav-link collapsed" href="<?= base_url('Admin/Akun') ?>">
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