<!DOCTYPE html>
<html lang="en">

<head>

	<title>Rumah Sakit - Arif Wijianto</title>
	<!--

Template 2098 Health

http://www.tooplate.com/view/2098-health

-->
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
				<a href="<?=base_url()?>front" class="navbar-brand"><i class="fa fa-h-square"></i>Rumah Sakit</a>
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





	<!-- ABOUT -->
	<section id="about">
		<div class="container">
			<div class="row">

				<div class="col-md-6 col-sm-6">
					<div class="about-info">
						<h2 class="wow fadeInUp" data-wow-delay="0.6s">Daftar Janji Rumah Sakit Arif Wijianto
						</h2>
						<div class="wow fadeInUp" data-wow-delay="0.8s">
							<p>Aenean luctus lobortis tellus, vel ornare enim molestie condimentum. Curabitur lacinia nisi vitae velit
								volutpat venenatis.</p>
							<p>Sed a dignissim lacus. Quisque fermentum est non orci commodo, a luctus urna mattis. Ut placerat, diam
								a tempus vehicula.</p>
						</div>
						
					</div>
				</div>

			</div>
		</div>
	</section>

<!-- LIST -->
<br>
<br>
<section id="list">
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                    <thead>
                    <tr>
                    <th>#</th>
                        <th>Nama Pasien</th>
                        <th>Nama Dokter</th>
                        <th>Spesialis</th>
                        <th>Jadwal Temu</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $no=1;?>
 					<?php foreach($list_reservasi as $list): ?>
                    <tr>
                       <td><?php echo $no; ?></td>
 						<td><?php echo $list['nama_pasien'] ?></td>
 						<td><?php echo $list['nama_dokter'] ?></td>
 						<td><?php echo $list['spesialis'] ?></td>
 						<td><?php echo $list['tgl_janji'] ?></td>
                    </tr>
                    <?php $no++;?>
 					<?php endforeach; ?>
                    </tbody>
            </table>    
        </div>
    </div>
</div>
</section>

	<!-- FOOTER -->
	<footer data-stellar-background-ratio="5">
		<div class="container">
			<div class="row">

				<div class="col-md-4 col-sm-4">
					<div class="footer-thumb">
						<h4 class="wow fadeInUp" data-wow-delay="0.4s">Contact Info</h4>
						<p>Fusce at libero iaculis, venenatis augue quis, pharetra lorem. Curabitur ut dolor eu elit consequat
							ultricies.</p>

						<div class="contact-info">
							<p><i class="fa fa-phone"></i> 010-070-0170</p>
							<p><i class="fa fa-envelope-o"></i> <a href="#">info@company.com</a></p>
						</div>
					</div>
				</div>

				<div class="col-md-4 col-sm-4">
					<div class="footer-thumb">
						<h4 class="wow fadeInUp" data-wow-delay="0.4s">Latest News</h4>
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
							<h4 class="wow fadeInUp" data-wow-delay="0.4s">Opening Hours</h4>
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
							<p>Copyright &copy; 2017 Your Company

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
