<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Octavian Yudha Mahendra</title>
	<meta content="" name="descriptison">
	<meta content="Octavian Yudha Mahendra, Yudha, Mahendra" name="keywords">

	<!-- <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

	<?php $this->load->view("_partials/css.php") ?>

</head>

<body>

	<!-- ======= Mobile nav toggle button ======= -->
	<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex flex-column justify-content-center">

		<nav class="nav-menu">
			<ul>
				<li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
				<li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
				<li><a href="#skills"><i class="bx bx-file-blank"></i> <span>Skills</span></a></li>
				<li><a href="#projects"><i class="bx bxl-android"></i> <span>Projects</span></a></li>
				<li><a href="#portfolio"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
				<li><a href="#contact"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
			</ul>
		</nav>

	</header>

	<!-- ======= Hero Section ======= -->
	<section id="hero" class="d-flex flex-column justify-content-center">
		<div class="container" data-aos="zoom-in" data-aos-delay="100">
			<?php foreach ($hero as $h) { ?>
				<h1><?= $h['name'] ?></h1>
				<p>I'm <span class="typed" data-typed-items="<?= $h['profession'] ?>"></span></p>
			<?php } ?>
			<div class="social-links">
			<?php foreach($kontak as $k){?>
				<a href="https://twitter.com/<?=$k['twitter']?>/" class="twitter"><i class="bx bxl-twitter"></i></a>
				<a href="https://www.facebook.com/<?=$k['fb']?>/" class="facebook"><i class="bx bxl-facebook"></i></a>
				<a href="https://www.instagram.com/<?=$k['ig']?>/" class="instagram"><i class="bx bxl-instagram"></i></a>
				<a href="https://github.com/<?=$k['github']?>" class="github"><i class="bx bxl-github"></i></a>
				<a href="https://www.linkedin.com/in/<?=$k['linkedin']?>/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
				<?php } ?>
			</div>
		</div>
	</section>

	<main id="main">

		<!-- ======= About Section ======= -->
		<section id="about" class="about">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>About</h2>
				</div>

				<div class="row">
					<div class="col-lg-4">
					<?php foreach ($about as $q) { ?>
						<img src="<?=base_url()?>uploads/about/<?= $q['gambar']?>" class="img-fluid" alt="">
						<?php } ?>
					</div>
					<div class="col-lg-8 pt-4 pt-lg-0 content">
						<div class="row">
							<?php foreach ($about as $a) { ?>
								<div class="col-lg-6">
									<ul>

										<li><i class="icofont-rounded-right"></i> <strong>Birthday: </strong> <?= $a['birthday'] ?></li>
										<li><i class="icofont-rounded-right"></i> <strong>Website: </strong> <?= $a['website'] ?></li>
										<?php foreach($kontak as $k){?>
										<li><i class="icofont-rounded-right"></i> <strong>Phone: </strong> <?= $k['telepon'] ?></li>
										<?php } ?>
										<li><i class="icofont-rounded-right"></i> <strong>City: </strong> <?= $a['kota'] ?></li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul>
										<li><i class="icofont-rounded-right"></i> <strong>Age: </strong> <?= $a['umur'] ?></li>
										<li><i class="icofont-rounded-right"></i> <strong>Email: </strong> yudhaoctavian01@gmail.com</li>
										<li><i class="icofont-rounded-right"></i> <strong>Freelance: </strong> <?= $a['freelance'] ?></li>
									</ul>
								</div>
							<?php } ?>
						</div>
						<?php foreach ($about as $a) { ?>
							<p>
								<?= $a['deskripsi'] ?>
							</p>
						<?php } ?>
						<!-- <p>
							I am a frontend Android developer. I am a junior programmer with good knowledge of front-end techniques.
							I love simple and minimalist design and I also stand for quality. I love spending time on fixing little details and
							optimizing Android apps. Also I like working in a team, you'll learn faster and much more.
							As the saying goes: 'two heads are better than one'.
						</p> -->
					</div>
				</div>

			</div>
		</section>

		<!-- ======= Skills Section ======= -->
		<section id="skills" class="skills section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Skills</h2>
					<?php foreach($qSkill as $q){?>
					<p><?= $q['quote'] ?></p>
					<?php } ?>
				</div>

				<div class="row skills-content">
					<?php foreach ($skill as $skill) { ?>
						<div class="col-lg-6">

							<div class="progress">
								<span class="skill"><?= $skill['name'] ?> <i class="val"><?= $skill['persentase'] ?>%</i></span>
								<div class="progress-bar-wrap">
									<div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['persentase'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>


						</div>
					<?php } ?>
				</div>

			</div>
		</section>

		<!-- ======= Resume Section ======= -->
		<!-- <section id="resume" class="resume">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Resume</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<h3 class="resume-title">Education</h3>
				<div class="resume-item">
					<h4>SD Negeri Jember Lor 1</h4>
					<h5>2006 - 2012</h5>
				</div>
				<div class="resume-item">
					<h4>SMP Negeri 6 Jember</h4>
					<h5>2012 - 2015</h5>
				</div>
				<div class="resume-item">
					<h4>SMA Negeri 4 Jember</h4>
					<h5>2015 - 2018</h5>
				</div>
				<div class="resume-item">
					<h4>Politeknik Negeri Jember</h4>
					<h5>2018 - 2022</h5>
					<p>Teknologi Informasi - D4 Teknik Informatika</p>
				</div>

			</div>
		</section> -->

		<!-- ======= Projects Section ======= -->
		<section id="projects" class="projects">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Projects</h2>
				</div>
				<?php foreach($category as $a){?>
				<h3 class="projects-title"><?=$a['name'] ?></h3>
					<?php 
						$q = $this->db->query("SELECT * FROM portofolio WHERE id_kategori = '$a[id]'")->result_array();
						foreach($q as $b){
					?>
						<div class="projects-item">
							<h4><?= $b['name']?></h4>
							<h5><?= $b['tanggal']?></h5>
							<p><?= $b['deskripsi']?></p>
						</div>
					<?php } ?>

				<?php } ?>
				<!-- <div class="projects-item">
					<h4>Optima UKM</h4>
					<h5>February 2020 - March 2020</h5>
					<p><em>Sampoerna Untuk Indonesia, Bussiness &amp; Export Development Organization</em></p>
					<p>Optima UKM is a platform that contains information and online training for MSMEs as a means of
						improving MSME quality and quality that can be accessed anytime and anywhere with an easy-to-use
						application format.</p>
				</div>
				<div class="projects-item">
					<h4>EJSC Jember</h4>
					<h5>March 2020 - June 2020</h5>
					<p><em>BAKORWIL V Jember, EJSC Jember</em></p>
					<p>East Java Super Corridor (EJSC) is a room rental information system application for co-working space,
						training rooms, meeting rooms, and conference rooms that are website-based on the admin panel and mobile-based
						for users.</p>
				</div>

				<h3 class="projects-title">Website</h3>
				<div class="projects-item">
					<h4>Web Company Profile &amp; Admin Panel Naura Farm</h4>
					<h5>November 2019 - January 2020</h5>
					<p><em>CV. Naura Farm</em></p>
					<p>A company profile website and place to buy dragon fruit products of CV. Naura Farm</p>
				</div>
				<div class="projects-item">
					<h4>Web Company Profile &amp; Admin Panel CV. Bima Technologies</h4>
					<h5>January 2020 - February 2020</h5>
					<p><em>CV. Bima Technologies</em></p>
					<p>A company profile of CV. Bima Technologies</p>
				</div>
				<div class="projects-item">
					<h4>Admin Panel EJSC Jember</h4>
					<h5>March 2020 - June 2020</h5>
					<p><em>BAKORWIL V Jember, EJSC Jember</em></p>
					<p>East Java Super Corridor (EJSC) is a room rental information system application for co-working space, training rooms, meeting rooms, and conference rooms that are website-based on the admin panel and mobile-based for users.</p>
				</div> -->

			</div>
		</section>

		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Portfolio</h2>
					<p>Some projects that I have worked on individually and as a team</p>
				</div>

				<div class="row">
					<div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<?php foreach($category as $a){?>
								<li data-filter=".filter-<?=$a['id'] ?>"><?=$a['name'] ?></li>
							<?php } ?>
						
						</ul>
					</div>
				</div>

				<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
					<?php foreach($portofolio as $q){?>
					<div class="col-lg-4 col-md-6 portfolio-item filter-<?= $q['id_kategori']?>">
						<div class="portfolio-wrap">
							<img src="<?=base_url()?>uploads/portofolio/<?= $q['gambar']?>" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4><?= $q['name']?></h4>
								<p><?= $q['kategori']?></p>
								<div class="portfolio-links">
									<a href="<?=base_url()?>uploads/portofolio/<?= $q['gambar']?>" data-gall="portfolioGallery" class="venobox" title="Preview"><i class="bx bx-plus"></i></a>
									<?php if($q['url'] != ""){?>
										<a href="<?= $q['url']?>" title="Go to Playstore"><i class="bx bx-link"></i></a>
									<?php } ?>
								</div>
							</div>
						</div>
					</div>
					<?php } ?>

					<!-- <div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="img/portfolio/bimatech_web.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Company Profile CV. Bima Technologies</h4>
								<p>Web</p>
								<div class="portfolio-links">
									<a href="img/portfolio/bimatech_web.jpg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
									<a href="https://www.bimatech.co.id/" title="Go to website"><i class="bx bx-link"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="img/portfolio/admin_bimatech_web.png" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Admin Panel CV. Bima Technologies</h4>
								<p>Web</p>
								<div class="portfolio-links">
									<a href="img/portfolio/admin_bimatech_web.png" data-gall="portfolioGallery" class="venobox" title="Preview"><i class="bx bx-plus"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="img/portfolio/ejsc_web.png" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Admin Panel EJSC Jember</h4>
								<p>Web</p>
								<div class="portfolio-links">
									<a href="img/portfolio/ejsc_web.png" data-gall="portfolioGallery" class="venobox" title="Preview"><i class="bx bx-plus"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-android">
						<div class="portfolio-wrap">
							<img src="img/portfolio/ejsc_apps.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>EJSC Jember</h4>
								<p>Android</p>
								<div class="portfolio-links">
									<a href="img/portfolio/ejsc_apps.jpg" data-gall="portfolioGallery" class="venobox" title="Preview"><i class="bx bx-plus"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-android">
						<div class="portfolio-wrap">
							<img src="img/portfolio/modalin_apps.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Modal.in</h4>
								<p>Android</p>
								<div class="portfolio-links">
									<a href="img/portfolio/modalin_apps.jpg" data-gall="portfolioGallery" class="venobox" title="Preview"><i class="bx bx-plus"></i></a>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<div class="portfolio-wrap">
							<img src="img/portfolio/naurafarm_web.jpg" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4>Company Profile Naura Farm</h4>
								<p>Web</p>
								<div class="portfolio-links">
									<a href="img/portfolio/naurafarm_web.jpg" data-gall="portfolioGallery" class="venobox" title="Preview"><i class="bx bx-plus"></i></a>
									<a href="http://www.naurafarm.polije.com" title="Go to website"><i class="bx bx-link"></i></a>
								</div>
							</div>
						</div>
					</div> -->

				</div>

			</div>
		</section>

		<!-- ======= Testimonials Section ======= -->
		<!-- <section id="testimonials" class="testimonials section-bg">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Testimonials</h2>
				</div>

				<div class="owl-carousel testimonials-carousel" data-aos="zoom-in" data-aos-delay="100">

					<div class="testimonial-item">
						<img src="img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
						<h3>Saul Goodman</h3>
						<h4>Ceo &amp; Founder</h4>
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
					</div>

					<div class="testimonial-item">
						<img src="img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
						<h3>Sara Wilsson</h3>
						<h4>Designer</h4>
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
					</div>

					<div class="testimonial-item">
						<img src="img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
						<h3>Jena Karlis</h3>
						<h4>Store Owner</h4>
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
					</div>

					<div class="testimonial-item">
						<img src="img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
						<h3>Matt Brandon</h3>
						<h4>Freelancer</h4>
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
					</div>

					<div class="testimonial-item">
						<img src="img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
						<h3>John Larson</h3>
						<h4>Entrepreneur</h4>
						<p>
							<i class="bx bxs-quote-alt-left quote-icon-left"></i>
							Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
							<i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
					</div>

				</div>

			</div>
		</section> -->

		<!-- ======= Contact Section ======= -->
		<section id="contact" class="contact">
			<div class="container" data-aos="fade-up">

				<div class="section-title">
					<h2>Contact</h2>
				</div>

				<div class="row my-auto">
				<?php foreach($kontak as $k){?>
					<div class="col-lg-4">
						<div class="info">
							<div class="email">
								<i class="icofont-envelope"></i>
								<h4>Email:</h4>
								<p><?=$k['email']?></p>
							</div>

							<div class="icon">
								<i class="icofont-phone"></i>
								<h4>Call:</h4>
								<p><?=$k['telepon']?></p>
							</div>

							<div class="icon">
								<i class="icofont-github"></i>
								<h4>Github:</h4>
								<p>https://github.com/<?=$k['github']?></p>
							</div>

						</div>
					</div>

					<div class="col-lg-4">
						<div class="info">
							<div class="twitter">
								<i class="icofont-twitter"></i>
								<h4>Twitter:</h4>
								<p>https://twitter.com/<?=$k['twitter']?>/</p>
							</div>

							<div class="icon">
								<i class="icofont-facebook"></i>
								<h4>Facebook:</h4>
								<p>https://www.facebook.com/<?=$k['fb']?>/</p>
							</div>

							<div class="icon">
								<i class="icofont-instagram"></i>
								<h4>Instagram:</h4>
								<p>https://www.instagram.com/<?=$k['ig']?>/</p>
							</div>

						</div>
					</div>

					<div class="col-lg-4">
						<div class="info">
							<div class="whatsapp">
								<i class="icofont-google-map"></i>
								<h4>Whatsapp:</h4>
								<p><?=$k['wa']?></p>
							</div>

							<div class="icon">
								<i class="icofont-linkedin"></i>
								<h4>Linkedin:</h4>
								<p>https://www.linkedin.com/in/<?=$k['linkedin']?>/</p>
							</div>

						</div>
					</div>
				<?php } ?>
				</div>

			</div>
		</section>

	</main>

	<?php $this->load->view("_partials/footer.php") ?>

	<a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
	<div id="preloader"></div>

	<?php $this->load->view("_partials/js.php") ?>

</body>

</html>