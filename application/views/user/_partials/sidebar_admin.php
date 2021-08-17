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
                <a class="nav-link collapsed" href="<?= base_url('Admin/Alat') ?>">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Fuzzy Rules
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