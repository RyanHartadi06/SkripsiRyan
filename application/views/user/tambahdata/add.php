<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php $this->load->view("user/_partials/head.php") ?>

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
								<div class="page-header-icon"><i data-feather="user"></i></div>
								<span>Tambah Data</span>
							</h1>
						</div>
					</div>
				</div>
				<div class="container-fluid mt-n10">
					<form action="<?= base_url('User/Data/post') ?>" method="post" enctype="multipart/form-data">
						<div class="card mb-4">
							<div class="card-header">Tambah Data</div>
							<div class="card-body">
								<div class="col">
									<?php echo $this->session->flashdata('pesan') ?>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Judul Penelitian</label>
										<input class="form-control" id="name" name="name" type="text" placeholder="Judul Penelitian" required />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Lokasi</label>
										<input class="form-control" id="lokasi" name="lokasi" type="text" placeholder="Lokasi" required />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Nama Kolam</label>
										<input class="form-control" id="nama_kolam" name="nama_kolam" type="text" placeholder="Nama Kolam" required />
									</div>
								</div>
								<div class="row">
									<div class="form-group col-lg-12 col-sm-12">
										<label>Deskripsi</label>
										<textarea class="form-control" id="desc" name="desc" type="text" placeholder="Deskripsi"></textarea>
									</div>
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
			</main>

			<!-- Footer -->
			<?php $this->load->view("user/_partials/footer.php") ?>

		</div>
	</div>

	<!-- JS -->
	<?php $this->load->view("user/_partials/js.php") ?>

</body>
<script>
	CKEDITOR.replace('desc');
</script>

</html>