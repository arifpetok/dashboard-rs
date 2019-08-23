<!DOCTYPE html>
<html lang="en">

<head>

	<title>Rumah Sakit - Arif Wijianto</title>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Tooplate">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" href="<?=base_url()?>assets/front/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/front/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/front/css/animate.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/front/css/owl.carousel.css">
	<link rel="stylesheet" href="<?=base_url()?>assets/front/css/owl.theme.default.min.css">

	<!-- MAIN CSS -->
	<link rel="stylesheet" href="<?=base_url()?>assets/front/css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

	<!-- PRE LOADER -->
	<section class="preloader">
		<div class="spinner">

			<span class="spinner-rotate"></span>

		</div>
	</section>


	<!-- HEADER -->
	<header>
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-5">
					<p>Welcome to a Professional Rumah Sakit</p>
				</div>

				<div class="col-md-8 col-sm-7 text-align-right">
					<span class="phone-icon"><i class="fa fa-phone"></i> 0877-3691-3004</span>
					<span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 6:00 AM - 10:00 PM (Mon-Fri)</span>
					<span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></span>
				</div>

			</div>
		</div>
	</header>


	<!-- MENU -->
	<section class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>

				<!-- lOGO TEXT HERE -->
				<a href="<?=base_url()?>front" class="navbar-brand"><i class="fa fa-h-square"></i>ospital</a>
			</div>

			<!-- MENU LINKS -->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#top" class="smoothScroll">Home</a></li>
					<li><a href="#about" class="smoothScroll">About Us</a></li>
					<li><a href="#team" class="smoothScroll">Doctors</a></li>
					<li><a href="#news" class="smoothScroll">News</a></li>
					<li><a href="#google-map" class="smoothScroll">Contact</a></li>
					<li class="appointment-btn"><a href="#appointment">Make an appointment</a></li>
				</ul>
			</div>

		</div>
	</section>


	<!-- HOME -->
	<section id="home" class="slider" data-stellar-background-ratio="0.5">
		<div class="container">
			<div class="row">

				<div class="owl-carousel owl-theme">
					<div class="item item-first">
						<div class="caption">
							<div class="col-md-offset-1 col-md-10">
								<h3>Let's make your life happier</h3>
								<h1>Healthy Living</h1>
								<a href="#team" class="section-btn btn btn-default smoothScroll">Meet Our Doctors</a>
							</div>
						</div>
					</div>

					<div class="item item-second">
						<div class="caption">
							<div class="col-md-offset-1 col-md-10">
								<h3>Aenean luctus lobortis tellus</h3>
								<h1>New Lifestyle</h1>
								<a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">More About Us</a>
							</div>
						</div>
					</div>

					<div class="item item-third">
						<div class="caption">
							<div class="col-md-offset-1 col-md-10">
								<h3>Pellentesque nec libero nisi</h3>
								<h1>Your Health Benefits</h1>
								<a href="#news" class="section-btn btn btn-default btn-blue smoothScroll">Read Stories</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- ABOUT -->
	<section id="about">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6">
					<div class="about-info">
						<h2 class="wow fadeInUp" data-wow-delay="0.6s">Welcome to Your <i class="fa fa-h-square"></i>ospital Arif Wijianto
						</h2>
						<div class="wow fadeInUp" data-wow-delay="0.8s">
							<p>Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit
								volutpat venenatis.</p>
							<p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam
								a tempus vehicula.</p>
						</div>
						<figure class="profile wow fadeInUp" data-wow-delay="1s">
							<img src="<?=base_url()?>assets/front/images/author-image.jpg" class="img-responsive" alt="">
							<figcaption>
								<h3>Dr. Arif Wijianto</h3>
								<p>Umum</p>
							</figcaption>
						</figure>
					</div>
				</div>

			</div>
		</div>
	</section>


	<!-- TEAM -->
	<section id="team" data-stellar-background-ratio="1">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6">
					<div class="about-info">
						<h2 class="wow fadeInUp" >Our Doctors</h2>
					</div>
				</div>

        <div class="clearfix"></div>

        <?php foreach($dokters as $key=>$dokter): ?>
				<div class="col-md-4 col-sm-6">
					<div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
						<img src="<?=base_url()?>assets/front/images/team-image<?=$key+1?>.jpg" class="img-responsive" alt="">

						<div class="team-info">
							<h3><?php echo $dokter['nama_dokter'] ?></h3>
							<p><?php echo $dokter['spesialis'] ?></p>
							<div class="team-contact-info">
								<p><i class="fa fa-phone"></i> <?php echo $dokter['no_telp'] ?></p>
								<!-- <a><i class="fa fa-envelope-o"></i> <a href="#">general@company.com</a></p> -->
							</div>
							<ul class="social-icon">
								<li><a href="#" class="fa fa-linkedin-square"></a></li>
								<li><a href="#" class="fa fa-envelope-o"></a></li>
							</ul>
						</div>

					</div>
        </div>
        <?php endforeach; ?>

			</div>
		</div>
	</section>


	<!-- NEWS -->
	<section id="news" data-stellar-background-ratio="2.5">
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<!-- SECTION TITLE -->
					<div class="section-title wow fadeInUp" >
						<h2>Latest News</h2>
					</div>
				</div>
 <?php foreach($posts as $key=>$post): ?>
				<div class="col-md-4 col-sm-6">
					<!-- NEWS THUMB -->
					<div class="news-thumb wow fadeInUp" >
						<a href="<?=base_url()?>front">
							<img src="<?=base_url()?>assets/front/images/news-image<?=$key+1?>.jpg" class="img-responsive" alt="">
						</a>
						<div class="news-info">
							<span><?php echo $post['create_time'] ?></span>
							<h3><a href="<?=base_url()?>front"><?php echo $post['title'] ?></a></h3>
							<p><?php echo $post['content'] ?></p>
							<div class="author">
								<img src="<?=base_url()?>assets/front/images/author-image.jpg" class="img-responsive" alt="">
								<div class="author-info">
									<h5><?php echo $post['name'] ?></h5>
									<p>CEO / Founder</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				 <?php endforeach; ?>
			</div>
		</div>
	</section>


	<!-- MAKE AN APPOINTMENT -->
	<section id="appointment" data-stellar-background-ratio="3">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6">
					<img src="<?=base_url()?>assets/front/images/appointment-image.jpg" class="img-responsive" alt="">
				</div>

				<div class="col-md-6 col-sm-6">
					<!-- CONTACT FORM HERE -->
					<form id="appointment-form" role="form" method="post" action="<?php echo base_url('apointment/add'); ?>">

						<!-- SECTION TITLE -->
						<div class="section-title wow fadeInUp" >
							<h2>Make an appointment</h2>
						</div>

						<div class="wow fadeInUp" data-wow-delay="0.8s">
							<div class="col-md-6 col-sm-6">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="nama_pasien" placeholder="Full Name">
							</div>

							<div class="col-md-6 col-sm-6">
								<label for="email">Nomer Identitas</label>
								<input type="text" class="form-control" id="email" name="nomor_identitas" placeholder="Nomor Identitas">
							</div>

							<div class="col-md-6 col-sm-6">
								<label for="date">Select Date</label>
								<input type="date" name="tgl_janji" value="" class="form-control">
							</div>

							<div class="col-md-6 col-sm-6">
							

								<label for="">Jenis Kelamin</label>
 						<select name="jenis_kelamin" class="form-control" id="">
 							<option value="">- Jenis Kelamin -</option>
 							<option value="laki-laki">Laki - Laki</option>
 							<option value="perempuan">Perempuan</option>
 						</select>
							</div>

							<div class="col-md-6 col-sm-6">
								<label for="select">Pilih Dokter</label>
								<select class="form-control" name="id_dokter">
									<option value="">- Pilih Dokter -</option>
 							<?php foreach ($dokters as $dr) { ?>
							 <option value="<?= $dr['id_dokter']?>"><?=$dr['nama_dokter']?></option>
							 <?php } ?>
								</select>
							</div>

							<div class="col-md-6 col-sm-6">
								<label for="telephone">Phone Number</label>
								<input type="tel" class="form-control" id="phone" name="no_telp" placeholder="Phone">
							</div>

							<div class="col-md-12 col-sm-12">
								
								<label for="telephone">Alamat</label>
								<input type="text" class="form-control" id="phone" name="alamat" placeholder="Alamat">
								
								<label for="Message">Pesan</label>
								<textarea class="form-control" rows="5" id="message" name="pesan" placeholder="Message"></textarea>
								<button type="submit" class="form-control" id="cf-submit" name="submit">Submit Button</button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</section>


	<!-- GOOGLE MAP -->
	<section id="google-map">
		<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
		<iframe
			src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7905.357103473319!2d110.42767269999999!3d-7.823807099999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1561972943903!5m2!1sen!2sid"
			width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
	</section>


	<!-- FOOTER -->
	<footer data-stellar-background-ratio="5">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="footer-thumb">
						<h4 class="wow fadeInUp" >Contact Info</h4>
						<p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat
							ultricies.</p>

						<div class="contact-info">
							<p><i class="fa fa-phone"></i> 0877-3691-3004</p>
							<p><i class="fa fa-envelope-o"></i> <a href="#">arifwijianto@company.com</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="footer-thumb">
						<h4 class="wow fadeInUp" >Latest News</h4>
						<div class="latest-stories">
							<div class="stories-image">
								<a href="#"><img src="<?=base_url()?>assets/front/images/news-image.jpg" class="img-responsive"
										alt=""></a>
							</div>
							<div class="stories-info">
								<a href="#">
									<h5>Amazing Technology</h5>
								</a>
								<span>March 08, 2018</span>
							</div>
						</div>

						<div class="latest-stories">
							<div class="stories-image">
								<a href="#"><img src="<?=base_url()?>assets/front/images/news-image.jpg" class="img-responsive"
										alt=""></a>
							</div>
							<div class="stories-info">
								<a href="#">
									<h5>New Healing Process</h5>
								</a>
								<span>February 20, 2018</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="footer-thumb">
						<div class="opening-hours">
							<h4 class="wow fadeInUp" >Opening Hours</h4>
							<p>Monday - Friday <span>06:00 AM - 10:00 PM</span></p>
							<p>Saturday <span>09:00 AM - 08:00 PM</span></p>
							<p>Sunday <span>Closed</span></p>
						</div>

						<ul class="social-icon">
							<li><a href="https://www.facebook.com/tooplate" class="fa fa-facebook-square" attr="facebook icon"></a>
							</li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-12 col-sm-12 border-top">
					<div class="col-md-4 col-sm-6">
						<div class="copyright-text">
							<p>Copyright &copy; 16111130 Arif Wijianto

								| Design: <a href="http://www.tooplate.com" target="_parent">Tooplate</a></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="footer-link">
							<a href="#">Laboratory Tests</a>
							<a href="#">Departments</a>
							<a href="#">Insurance Policy</a>
							<a href="#">Careers</a>
						</div>
					</div>
					<div class="col-md-2 col-sm-2 text-align-center">
						<div class="angle-up-btn">
							<a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</footer>

	<!-- SCRIPTS -->
	<script src="<?=base_url()?>assets/front/js/jquery.js"></script>
	<script src="<?=base_url()?>assets/front/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>assets/front/js/jquery.sticky.js"></script>
	<script src="<?=base_url()?>assets/front/js/jquery.stellar.min.js"></script>
	<script src="<?=base_url()?>assets/front/js/wow.min.js"></script>
	<script src="<?=base_url()?>assets/front/js/smoothscroll.js"></script>
	<script src="<?=base_url()?>assets/front/js/owl.carousel.min.js"></script>
	<script src="<?=base_url()?>assets/front/js/custom.js"></script>

</body>

</html>
