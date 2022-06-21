<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
		<?php include('connection.php') ?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>RailTicketing</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
		
		<!-- Animate.css -->
		<link rel="stylesheet" href="css/animate.css">
		<!-- Icomoon Icon Fonts-->
		<link rel="stylesheet" href="css/icomoon.css">
		<!-- Themify Icons-->
		<link rel="stylesheet" href="css/themify-icons.css">
		<!-- Bootstrap  -->
		<link rel="stylesheet" href="css/bootstrap.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">

		<!-- Magnific Popup -->
		<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

		<!-- Owl Carousel  -->
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">

		<!-- Theme style  -->
		<link rel="stylesheet" href="css/style.css">

		<!-- Modernizr JS -->
		<script src="js/modernizr-2.6.2.min.js"></script>
	</head>

	<body>
		<div class="gtco-loader"></div>
		<div id="page">		
			<!-- <div class="page-inner"> -->
			<nav class="gtco-nav" role="navigation">
				<div class="gtco-container">
					
					<div class="row">
						<div class="col-sm-4 col-xs-12">
							<div id="gtco-logo"><a href="index.html">RailTicketing <em>.</em></a></div>
						</div>
					</div>
					
				</div>
			</nav>
		
			<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_bg_2.jpg)">
				<div class="overlay"></div>
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-12 col-md-offset-0 text-left">
							

							<div class="row row-mt-15em">
								<div class="col-md-4 mt-text animate-box" data-animate-effect="fadeInUp">
									<h1>Planing Trip To Anywhere in The World?</h1>	
								</div>
								<div class="col-md-8 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
									<div class="form-wrap">
										<div class="tab">
											<div class="tab-content">
												<div class="tab-content-inner active" data-content="signup">
													<h3>Book Your Trip</h3>
													<form action="transaction.php" method="POST">
														<div class="row form-group">
															<div class="col-md-12">
																<label for="fullname">Your Name</label>
																<input type="text" id="fullname" name="fullname" class="form-control">
															</div>
														</div>
														<hr />
														<div class="row form-group">
															<div class="col-md-12">
																<label for="fullname">Asal</label>
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-6 col-sm-12">
																<label for="activities">Provinsi</label>
																<?php
																	$sql_provinsi = mysqli_query($con, "SELECT * FROM provinces");
																?>
																<select name="provinces" id="provinces" class="form-control">
																	<option value="">Pilih Provinsi</option>
																	<?php
																		while ($row_provinsi = mysqli_fetch_array($sql_provinsi)) {
																	?>

																	<option value="<?php echo $row_provinsi['id_provinsi'] ?>">
																		<?php echo $row_provinsi['nama_provinsi']; ?>
																	</option>

																	<?php } ?>
																</select>
															</div>
															<div class="col-md-6 col-sm-12">
																<label for="activities">Kota</label>
																<select name="regencies" id="regencies" class="form-control">
																	<option value="">Pilih Kota</option>
																</select>
															</div>
														</div>
														<hr />
														<div class="row form-group">
															<div class="col-md-12">
																<label for="fullname">Tujuan</label>
															</div>
														</div>
														<div class="row form-group">
															<div class="col-md-6 col-sm-12">
																<label for="activities">Provinsi</label>
																<?php
																	$sql_provinsi = mysqli_query($con, "SELECT * FROM provinces");
																?>
																<select name="provincess" id="provincess" class="form-control">
																	<option value="">Pilih Provinsi</option>
																	<?php
																		while ($row_provinsi = mysqli_fetch_array($sql_provinsi)) {
																	?>

																	<option value="<?php echo $row_provinsi['id_provinsi'] ?>">
																		<?php echo $row_provinsi['nama_provinsi']; ?>
																	</option>

																	<?php } ?>
																</select>
															</div>
															<div class="col-md-6 col-sm-12">
																<label for="activities">Kota</label>
																<select name="regenciess" id="regenciess" class="form-control">
																	<option value="">Pilih Kota</option>
																</select>
															</div>
														</div>
														<hr />
														<div class="row form-group">
															<div class="col-md-12">
																<label for="date-start">Date Travel</label>
																<input type="text" id="date-start" name="travel_date" class="form-control">
															</div>
														</div>

														<div class="row form-group">
															<div class="col-md-12">
																<input type="submit" class="btn btn-primary btn-block" value="Submit">
															</div>
														</div>
													</form>	
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
		
			<div class="gtco-section">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
							<h2>Most Popular Destination</h2>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="images/img_2.jpg" class="fh5co-card-item image-popup">
								<figure>
									<div class="overlay"><i class="ti-plus"></i></div>
									<img src="images/img_2.jpg" alt="Image" class="img-responsive">
								</figure>
								<div class="fh5co-text">
									<h2>Seoul, South Korea</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
									<p><span class="btn btn-primary">Schedule a Trip</span></p>
								</div>
							</a>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="images/img_3.jpg" class="fh5co-card-item image-popup">
								<figure>
									<div class="overlay"><i class="ti-plus"></i></div>
									<img src="images/img_3.jpg" alt="Image" class="img-responsive">
								</figure>
								<div class="fh5co-text">
									<h2>Paris, France</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
									<p><span class="btn btn-primary">Schedule a Trip</span></p>
								</div>
							</a>
						</div>


						<div class="col-lg-4 col-md-4 col-sm-6">
							<a href="images/img_4.jpg" class="fh5co-card-item image-popup">
								<figure>
									<div class="overlay"><i class="ti-plus"></i></div>
									<img src="images/img_4.jpg" alt="Image" class="img-responsive">
								</figure>
								<div class="fh5co-text">
									<h2>Sydney, Australia</h2>
									<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
									<p><span class="btn btn-primary">Schedule a Trip</span></p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
		
			<div id="gtco-features">
				<div class="gtco-container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
							<h2>How It Works</h2>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i>1</i>
								</span>
								<h3>Lorem ipsum dolor sit amet</h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i>2</i>
								</span>
								<h3>Consectetur adipisicing elit</h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6">
							<div class="feature-center animate-box" data-animate-effect="fadeIn">
								<span class="icon">
									<i>3</i>
								</span>
								<h3>Dignissimos asperiores vitae</h3>
								<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
				<div class="overlay"></div>
				<div class="gtco-container text-center">
					<div class="display-t">
						<div class="display-tc">
							<h1>We have high quality services that you will surely love!</h1>
						</div>	
					</div>
				</div>
			</div>

			<div id="gtco-counter" class="gtco-section">
				<div class="gtco-container">

					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
							<h2>Our Success</h2>
							<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
						</div>
					</div>

					<div class="row">
						
						<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-center">
								<span class="counter js-counter" data-from="0" data-to="196" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Destination</span>

							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-center">
								<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Hotels</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-center">
								<span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Travelers</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
							<div class="feature-center">
								<span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
								<span class="counter-label">Happy Customer</span>

							</div>
						</div>
							
					</div>
				</div>
			</div>

			
		<!-- </div> --><footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)">
			<div class="overlay"></div>
				<div class="gtco-container">
					<div class="row row-pb-md">

						<div class="col-md-4">
							<div class="gtco-widget">
								<h3>About Us</h3>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore eos molestias quod sint ipsum possimus temporibus officia iste perspiciatis consectetur in fugiat repudiandae cum. Totam cupiditate nostrum ut neque ab?</p>
							</div>
						</div>

						<div class="col-md-2 col-md-push-1">
							<div class="gtco-widget">
								<h3>Destination</h3>
								<ul class="gtco-footer-links">
									<li><a href="#">Europe</a></li>
									<li><a href="#">Australia</a></li>
									<li><a href="#">Asia</a></li>
									<li><a href="#">Canada</a></li>
									<li><a href="#">Dubai</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-2 col-md-push-1">
							<div class="gtco-widget">
								<h3>Hotels</h3>
								<ul class="gtco-footer-links">
									<li><a href="#">Luxe Hotel</a></li>
									<li><a href="#">Italy 5 Star hotel</a></li>
									<li><a href="#">Dubai Hotel</a></li>
									<li><a href="#">Deluxe Hotel</a></li>
									<li><a href="#">BoraBora Hotel</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-md-push-1">
							<div class="gtco-widget">
								<h3>Get In Touch</h3>
								<ul class="gtco-quick-contact">
									<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
									<li><a href="#"><i class="icon-mail2"></i> info@freehtml5.co</a></li>
									<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
								</ul>
							</div>
						</div>

					</div>

					<div class="row copyright">
						<div class="col-md-12">
							<p class="pull-right">
								<ul class="gtco-social-icons pull-right">
									<li><a href="#"><i class="icon-twitter"></i></a></li>
									<li><a href="#"><i class="icon-facebook"></i></a></li>
									<li><a href="#"><i class="icon-linkedin"></i></a></li>
									<li><a href="#"><i class="icon-dribbble"></i></a></li>
								</ul>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
		</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#provinces').change(function() {
				var provinsi_id = $(this).val();

				$.ajax({
					type: 'POST', // method
					url: 'regencies.php', // action
					data: 'id_provinsi='+provinsi_id, // $_POST['id_provinsi']
					success: function (response) {
						$('#regencies').html(response);
					}
				});
			})
		});
	</script>

	<script>
		$(document).ready(function() {
			$('#provincess').change(function() {
				var provinsi_id = $(this).val();

				$.ajax({
					type: 'POST', // method
					url: 'regencies.php', // action
					data: 'id_provinsi='+provinsi_id, // $_POST['id_provinsi']
					success: function (response) {
						$('#regenciess').html(response);
					}
				});
			})
		});
	</script>

	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	
	<!-- Main -->
	<script src="js/main.js"></script>
	</body>
</html>

