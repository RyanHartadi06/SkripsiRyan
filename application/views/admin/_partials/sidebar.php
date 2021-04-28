<div id="layoutSidenav_nav">
    <nav class="sidenav shadow-right sidenav-light">
        <div class="sidenav-menu">
            <div class="nav accordion" id="accordionSidenav">
                <div class="sidenav-menu-heading">Dashboard</div>
                <a class="nav-link collapsed" href="javascript:void(0);" data-toggle="collapse" data-target="#collapseDashboards" aria-expanded="false" aria-controls="collapseDashboards">
                    <div class="nav-link-icon"><i data-feather="activity"></i></div>
                    Halaman Utama
                    <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse show" id="collapseDashboards" data-parent="#accordionSidenav">
                    <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPages">
                        <a class="nav-link" href="<?= base_url("Dashboard") ?>">Dashboard</a>
                        <a class="nav-link" href="<?= base_url("frontend/About") ?>">Profil Author</a>
                    </nav>
                </div>
                <div class="sidenav-menu-heading">Pengetahuan</div>
                <a class="nav-link collapsed" href="<?php echo base_url('frontend/DataIkan') ?>">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Data Ikan Koi
                </a>
                <a class="nav-link collapsed" href="<?php echo base_url('frontend/DataIkan') ?>">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Data Kriteria Kolam Ikan Koi
                </a>
                <div class="sidenav-menu-heading">Master Data</div>
                <a class="nav-link collapsed" href="<?php echo base_url('frontend/Proses') ?>">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Monitoring Data
                </a>
                <a class="nav-link collapsed" href="<?php echo base_url('frontend/Data') ?>">
                    <div class="nav-link-icon"><i data-feather="grid"></i></div>
                    Proses Data
                </a>
            </div>
        </div>
        <div class="sidenav-footer">
            <div class="sidenav-footer-content">
                <div class="sidenav-footer-subtitle">Logged in as:</div>
                <div class="sidenav-footer-title">Admin</div>
            </div>
        </div>
    </nav>
</div>