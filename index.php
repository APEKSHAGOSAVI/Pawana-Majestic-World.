<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PAWANA-HOME</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
	<?php require('inc/links.php');?>
	<style>
		.availability-form {
			margin-top: -50px;
			z-index: 2;
			position: relative;
		}

		@media screen and (max-width:575px) {
			.availability-form {
				margin-top: -25px;
				padding: 0 35px;
			}
		}
	</style>
</head>

<body class="bg-light">
	<?php include('inc/header.php');?>

	<div class="container fluid px-lg-4mt-4">
		<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/coursal3.webp" width="1900px" height="560px">
				</div>
				<div class="swiper-slide">
					<img src="images/coursal1.webp" width="1900px" height="560px">
				</div>
				<div class="swiper-slide">
					<img src="images/coursal2.webp" width="1900px" height="560px">
				</div>
				<div class="swiper-slide">
					<img src="images/pg8.webp" width="1900px" height="560px">
				</div>
				<div class="swiper-slide">
					<img src="images/pg7.webp" width="1900px" height="560px">
				</div>
			</div>
		</div>
	</div>


	<?php include ('inc/links.php');?>






	<div class="clearfix"> </div>
	</div>


	<!--sevices-->
	<div class="advantages">
		<div class="container">
			<div class="advantages-main">
				<h3 class="title-black text-center">Our campsite package..!</h3><br>
				<div class="advantage-bottom">
					<div class="col-md-6 advantage-grid left-w3ls wow bounceInLeft" data-wow-delay="0.3s">
						<div class="advantage-block ">
							<i class="fa fa-credit-card" aria-hidden="true"></i>
							<h4>1st day of camping ..! </h4>
							<p>Our support team will help you 24/7 for any query. you can also mail us for any query and
								feedback.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>04.00pm : Check-in to campsite.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>05.00pm : Refreshment on arrival at
								campsite with tea & snacks.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>05.00pm : Play arrchery, volleyball with
								our campers.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>06.30pm : Enjoy sunset and short walk
								arround pawana lake campsite.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>07.00pm : Roast (BBQ - veg/non veg).</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>08.00pm : Enjoy music and dance.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>09.00pm : warmy camp fire.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>10.00pm : Dinner (Veg & non veg).</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>11.30pm : Stare the million of stars and
								get relaxed.</p>


						</div>
					</div>
					<div class="col-md-6 advantage-grid right-w3ls wow zoomIn" data-wow-delay="0.3s">
						<div class="advantage-block">
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<h4>2nd day of camping..!</h4>
							<p><i class="fa fa-check" aria-hidden="true"></i>07.00am : Morning tea / coffee.</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>08.00am : Breakfast
								(bread/butter/jam/poha).</p>
							<p><i class="fa fa-check" aria-hidden="true"></i>11.00am : Group picture and checkout with
								memories.</p>

						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
	</div>
	<!--//sevices-->
	<!-- team -->

	<!-- //team -->
	<!-- Gallery -->

	<section class="portfolio-w3ls mb-4" id="gallery">
		<h3 class="title-w3-agileits title-black-wthree mb-4">Our Gallery</h3>

		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox ms-4">
					<h4 class="m-0 ms-3">PAWANA</h4>
					<p><i class="fa fa-picture-o mb-4" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>


		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g5.jpg" class="swipebox"><img src="images/g5.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>PAWANA</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g6.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>PAWANA</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>

		<div class="col-md-3 gallery-grid gallery1">
			<a href="images/g6.jpg" class="swipebox"><img src="images/g8.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>PAWANA</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>

		<div class="col-md-3 gallery-grid gallery1 ">
			<a href="images/g10.jpg" class="swipebox"><img src="images/g10.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>PAWANA</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1 ">
			<a href="images/g4.jpg" class="swipebox"><img src="images/g4.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>PAWANA</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="col-md-3 gallery-grid gallery1 ">
			<a href="images/g2.jpg" class="swipebox"><img src="images/g2.jpg" class="img-responsive" alt="/">
				<div class="textbox">
					<h4>PAWANA</h4>
					<p><i class="fa fa-picture-o" aria-hidden="true"></i></p>
				</div>
			</a>
		</div>
		<div class="clearfix"> </div>
	</section><br>

	<!-- //gallery -->
	<!-- camping -->
	<div class="container">
		<h3 class="title-w3-agileits title-black-wthree"> CAMPING </h3>

		<div class="row">
			<div class="col-lg-4 price-grid-lost">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/camp2.jpg" class="card-img-top" style="height: 235px;">
					<div class="card-body"><br>
						<h5 class="text-center fw-bold">CAMP</h5>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

								</ul>
							</div>
							<div class="price-selet">
								<h3><span>₹</span>999</h3>
								<a href="admin/reservation.php">Book Now</a>
							</div>
						</div>


						<div class="rating mb-4">
							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>

					</div>
				</div>
			</div>

			<div class="col-lg-4 price-grid-lost">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/camp1.jpg" class="card-img-top" style="height: 235px;">
					<div class="card-body"><br>
						<h5 class="text-center fw-bold">ALPINE TRIANGLE</h5>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

								</ul>
							</div>
							<div class="price-selet">
								<h3><span>₹</span>999</h3>
								<a href="admin/reservation.php">Book Now</a>
							</div>
						</div>


						<div class="rating mb-4">
							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>

					</div>
				</div>
			</div>

			<div class="col-lg-4 price-grid-lost">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/camp3.jpg" class="card-img-top" style="height: 235px;">
					<div class="card-body"><br>
						<h5 class="text-center fw-bold">DIAMOND COTTAGE</h5>
						<div class="price-gd-bottom mt-0">
							<div class="price-list">
								<ul>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star" aria-hidden="true"></i></li>
									<li><i class="fa fa-star-o" aria-hidden="true"></i></li>

								</ul>
							</div>
							<div class="price-selet">
								<h3><span>₹</span>1199</h3>
								<a href="admin/reservation.php">Book Now</a>
							</div>
						</div>


						<div class="rating mb-4">
							<h6 class="mb-1">Rating</h6>
							<span class="badge rounded-pill bg-light">
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
								<i class="bi bi-star-fill text-warning"></i>
							</span>
						</div>

					</div>
				</div>
			</div>



		</div>
	</div><br>

	<!--camping -->

	<div class="my-5 px-4">
		<h2 class="fw-bold h-font text-center">OUR DESTINATION</h2><br>
		<div class="h-line bg-dark"></div>
	</div>


	<div class="container">
		<div class="row">

			<div class="col-lg-4 col-md-6 my-3 ">
				<div class="card border-0 shadow" style="max-width: 450px; margin:auto;">
					<img src="images/lohagad.jpg" class="card-img-top" style="height:200px; width:350px;"><br>
					<div class="card-body"><br>
						<h5 class="text-bold">LOHAGAD FORT</h5><br>
						<p class="card-text ">Lohagad is one of the many hill forts of Maharashtra state in India.
							Situated close to the hill station Lonavala and 52 km (32 mi) northwest of Pune,
							Lohagad rises to an elevation of 1,033 m above sea level.</p>

					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
					<img src="images/pratipandharpoor.avif" class="card-img-top" style="height:200px; width:350px;"><br>
					<div class="card-body"><br>
						<h5>PRATI PANDHARPUR</h5><br>
						<p class="card-text">Prati Pandharpur is an exquisite homage to Vitthal and Rukmini.
							It is located at Dudhiware Khind near Pavana Dam.
							This temple is nestled on the back side of Lohgad fort and it is surrounded by natural
							beauty.</p>

					</div>
				</div>
			</div>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
					<img src="images/tungi.jpg" class="card-img-top" style="height:200px; width:350px;"><br>
					<div class="card-body"><br>
						<h5>TUNG FORT</h5><br>
						<p class="card-text">It is about 12 km from Malavli railway station and can also be
							approached
							from Lonavala.
							Tung Fort has an elevation of 1075 m above sea level.
							Since Pawna was built, it is now surrounded by water on three sides.</p>

					</div>
				</div>
			</div>

			<br>
			<div class="col-lg-4 col-md-6 my-3 ">
				<div class="card border-0 shadow" style="max-width: 450px; margin:auto;">
					<img src="images/pawanalake.jpg" class="card-img-top" style="height:200px; width:350px;"><br>
					<div class="card-body"><br>
						<h5 class="text-bold">BOATING CLUB</h5><br>
						<p class="card-text">As the location is besides the lake, you get a chance to do water
							sports activities such as boating and kayaking.
							The location has Pawna lake cottages that are surrounded by trees and have
							breathtakingly beautiful views of Tikona and Tung forts.</p>

					</div>
				</div>
			</div><br>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
					<img src="images/dam.jpg" class="card-img-top" style="height:200px; width:350px;"><br>
					<div class="card-body"><br>
						<h5>PAWANA DAM</h5><br>
						<p class="card-text">Pavana Lake, also known as Pavana Dam Reservoir and Pawna Lake,
							is a reservoir turned artificial lake in the Indian state of Maharashtra,
							formed by the Pavana Dam across the Pavana River in Pune district.</p>

					</div>
				</div>
			</div><br>

			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
					<img src="images/wageshwar.jpg" class="card-img-top" style="height:200px; width:350px;"><br>
					<div class="card-body"><br>
						<h5>WAGHESHWAR TEMPLE
						</h5><br>
						<p class="card-text">The Wagheshwar Temple Pawna Lake is located at Pawna Lake.
							this temple is famous in Pavna Lake reason behind it only visible for two months
							otherwise still underwater for Ten months. visibility from may, june and jully months.
							temple is built in Pandava's time. its a God Shivas temple.</p>

					</div>
				</div>
			</div><br>



		</div>
	</div><br>









	<!-- visitors -->



	<!-- visitors -->
	<!-- contact -->
	<section class="contact-w3ls" id="contact">
		<div class="container">
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile2" data-aos="flip-left">
				<div class="contact-agileits">
					<h4>Contact Us</h4>
					<p class="contact-agile2">Sign Up For Our News Letters</p>
					<form method="post" name="sentMessage" id="contactForm">
						<div class="control-group form-group">

							<label class="contact-p1">Full Name:</label>
							<input type="text" class="form-control" name="name" id="name" required>
							<p class="help-block"></p>

						</div>
						<div class="control-group form-group">

							<label class="contact-p1">Phone Number:</label>
							<input type="tel" class="form-control" name="phone" id="phone" required>
							<p class="help-block"></p>

						</div>
						<div class="control-group form-group">

							<label class="contact-p1">Email Address:</label>
							<input type="email" class="form-control" name="email" id="email" required>
							<p class="help-block"></p>

						</div>


						<input type="submit" name="sub" value="Send Now" class="btn btn-primary">
					</form>
					<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($con,$sql))
					echo"OK";
					
				}
				?>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 contact-w3-agile1" data-aos="flip-right">
				<h4>Connect With Us</h4>
				<p class="contact-agile1"><strong>Phone :</strong>+91 8983288419</p>
				<p class="contact-agile1"><strong>Email :</strong><a href=""></a></p>
				<p class="contact-agile1"><strong>Address :</strong> Pawana Maharashtra</p>

				<div class="social-bnr-agileits footer-icons-agileinfo">
					<ul class="social-icons3">
						<li><a href="#" class="fa fa-facebook icon-border facebook"> </a></li>
						<li><a href="#" class="fa fa-twitter icon-border twitter"> </a></li>
						<li><a href="#" class="fa fa-google-plus icon-border googleplus"> </a></li>

					</ul>
				</div>
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3074.7905052320443!2d-77.84987248482734!3d39.586871613613056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c9f6a80ccf0661%3A0x7210426c67abc40!2sVirginia+Welcome+Center%2FSafety+Rest+Area!5e0!3m2!1sen!2sin!4v1485760915662"></iframe>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
	<!-- /contact -->
	<div class="copy">
		<p>Designed and Developed by .....<a href="index.php"></a> </p>
	</div>
	<!--/footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- contact form -->
	<script src="js/jqBootstrapValidation.js"></script>

	<!-- /contact form -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	<!-- gallery popup -->
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function ($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!-- //gallery popup -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
			});
		});
	</script>

	<!--search-bar-->
	<script src="js/main.js"></script>
	<!--//search-bar-->
	<!--tabs-->
	<script src="js/easy-responsive-tabs.js"></script>
	<script>
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true,   // 100% fit in a container
				closed: 'accordion', // Start closed if in accordion view
				activate: function (event) { // Callback function if tab is switched
					var $tab = $(this);
					var $info = $('#tabInfo');
					var $name = $('span', $info);
					$name.text($tab.text());
					$info.show();
				}
			});
			$('#verticalTab').easyResponsiveTabs({
				type: 'vertical',
				width: 'auto',
				fit: true
			});
		});
	</script>
	<!--//tabs-->
	<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
			$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>

	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
	<!-- //smooth scrolling -->
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<script>
		var swiper = new Swiper(".swiper-container", {
			spaceBetween: 30,
			effect: "fade",
			loop: true,
			autoplay: {
				delay: 2500,
				disableOnInteraction: false,
			},
		});
	</script>
</body>

</html>