<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description"
		content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title><?= $judul; ?></title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url('assets/front/'); ?>assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url('assets/front/'); ?>assets/css/responsive.css">

</head>

<body>


	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<span class="text-primary"><?= $konfig->judul_website; ?></span>
							<a href="index.html">
								<img src="<?= base_url('assets/front/'); ?>assets/img/logo.png">

							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="<?= base_url() ?>">Home</a></li>
								<?php foreach ($kategori as $kate) { ?>
								<li>
									<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
										<?= $kate['nama_kategori'] ?>
									</a>
								</li>
								<?php } ?>
								<li class="current-list-item"><a href="<?= base_url('auth') ?>">Login</a></li>
							</ul>
						</nav>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- hero area -->
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<?php $no=1; foreach ($caraousel as $aa) { ?>
			<div class="carousel-item <?php if($no==1){ echo 'active'; } ?>">
				<img src="<?= base_url('assets/upload/caraousel/'.$aa['foto'])?>" class="d-block w-100">
			</div>
			<?php $no++; }?>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- end hero area -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Project</span>Kolaborasi</h3>
					</div>
				</div>
			</div>

			<div class="row">

				<?php foreach ($konten as $uu) { ?>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<img class="card-img-top mb-2" src="<?= base_url('assets/upload/konten/'.$uu['foto'])?>" />
						</a>
						<div class="news-text-box">
							<h3><a href="<?= base_url('assets/upload/konten/'.$uu['foto'])?>"><?= $uu['judul'] ?></a>
							</h3>
							<p class="blog-meta">
								<span class="author"><i class="fas fa-user"></i><?= $uu['nama'] ?></span>
								<span class="date"><i class="fas fa-calendar"></i><?= $uu['nama_kategori'] ?></span>
							</p>
							<a href="<?= base_url('home/artikel/'.$uu['slug']) ?>" class="read-more-btn">Baca
								Selengkapnya<i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<!-- end latest news -->

	<!-- footer -->
	<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title"><?= $konfig->judul_website; ?></h2>
						<p><?= $konfig->profil_website; ?></p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Contact Us</h2>
						<ul>
							<li class="fa fa-map-marker-alt "> <?= $konfig->alamat; ?></li><br>
							<li class="fa fa-envelope"> <?= $konfig->email; ?></li><br>
							<li class="fa fa-phone"> <?= $konfig->no_wa; ?></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Pages</h2>
						<ul>
							<li><a href="<?= base_url() ?>">Home</a></li>
							<?php foreach ($kategori as $kate) { ?>
							<li>
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori']) ?>">
									<?= $kate['nama_kategori'] ?></a>
							</li>
							<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->

	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="<?= $konfig->facebook; ?>" target="_blank"><i
										class="fab fa-facebook-f"></i></a></li>
							<li><a href="<?= $konfig->instagram; ?>" target="_blank"><i
										class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url('assets/front/'); ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="<?= base_url('assets/front/'); ?>assets/js/main.js"></script>

</body>

</html>
