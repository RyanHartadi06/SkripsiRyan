<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("admin/_partials/head.php") ?>
<!-- <?php $this->load->view("admin/_partials/modal/delete.php") ?> -->

<body class="nav-fixed">

  <!-- Topbar -->
  <?php $this->load->view("admin/_partials/topbar.php") ?>

  <div id="layoutSidenav">

    <!-- Sidebar -->
    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="layoutSidenav_content">
      <main>
        <div class="page-header pb-10 page-header-dark bg-gradient-primary-to-secondary">
          <div class="container-fluid">
            <div class="page-header-content">
              <h1 class="page-header-title">
                <div class="page-header-icon">
                  <i data-feather="activity"></i>
                </div>
                <span>Dashboard</span>
              </h1>
              <div class="page-header-subtitle">Sistem Kendali Kualitas Air Kolam Koi</div>
            </div>
            <div class="card col-md-4 col-lg-4 col-sm-4 mt-4">
              <div class="card-body bg-white p-3" id="reportrange">
                <div id="date" class="text-lg text-black font-weight-bold"></div>
                <div id="time" class="text-sm text-black-75 font-weight-bold"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid mt-n10">
          <div class="card card-waves mb-4 mt-5">
            <div class="card-body p-5">
              <div class="col">
                <?php echo $this->session->flashdata('message') ?>
              </div>
              <div class="row align-items-center justify-content-between">
                <div class="col">
                  <h2 class="text-primary">Selamat Datang, di Sistem Kendali Kualitas Kolam Koi </h2>
                  <p class="text-gray-700">Sistem Kendali Kualitas Kolam Koi ini di tujukan untuk para peternak Ikan Koi untuk memilih Ikan Koi yang cocok di tempati di dalam air tersebut. Sistem Kendali ini Berbasis IOT dengan menggunakan metode Fuzzy Tsukamoto </p>
                  <a class="btn btn-primary p-3" href="<?= base_url('frontend/Proses') ?>">
                    Lihat Monitoring
                    <i class="ml-1" data-feather="arrow-right"></i>
                  </a>
                </div>
                <div class="col d-none d-lg-block mt-xxl-n4"><img class="img-fluid px-xl-4 mt-xxl-n5" src="<?= base_url('img/admin/logo/data-report-pana.svg') ?>" /></div>
              </div>
            </div>
          </div>
        </div>
        <div class="row ml-2">
          <div class="col-lg-4 mb-4">
            <!-- Illustration card example-->
            <div class="card mb-4">
              <div class="card-body text-center p-5">
                <img class="img-fluid mb-5" src="<?= base_url('img/admin/logo/statistics-pana.svg') ?>" />
                <h4>Report generation</h4>
                <p class="mb-4">Ready to get started? Let us know now! It's time to start building that dashboard you've been waiting to create!</p>
                <a class="btn btn-primary p-3" href="#!">Continue</a>
              </div>
            </div>
          </div>
          <div class="col-lg-8">
            <div class="card">
              <div class="card-body text-center p-5">
                <img class="img-fluid" src="<?= base_url('img/admin/logo/team-spirit-pana.svg') ?>" alt="" style="max-width: 14.25rem" />
                <h5>Profile Authors</h5>
                <p class="mb-4">Upgrade your plan to get access to team collaboration tools.</p>
                <a class="btn btn-primary p-3" href="<?= base_url('frontend/About') ?>">Lihat Profile</a>
              </div>
            </div>
          </div>

        </div>
      </main>

      <!-- Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
  </div>

  <!-- JS -->
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>
<script>
  function clockTick() {
    var d = new Date();
    var day = d.getDay();
    var date = d.getDate();
    var year = d.getFullYear();
    var month = d.getMonth();
    var dayArr = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
    var monthArr = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
    day = dayArr[day];
    month = monthArr[month];
    document.getElementById("date").innerHTML = day + ", " + date + " " + month + " " + year;

    var t = new Date();
    var hour = t.getHours();
    var minute = t.getMinutes();
    var second = t.getSeconds();
    document.getElementById("time").innerHTML = hour + ":" + minute + ":" + second;
  }
  setInterval(clockTick, 1000);
</script>

</html>