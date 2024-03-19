<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Home</title>
	
	<!-- swiper css link -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
	
	<!-- font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	
	<!-- custom css file link -->
	<link rel="stylesheet" href="css/style.css">
</head> 
<body>

<!-- Header section starts -->
<section class="header">
	<a href="home.php" class="logo">Tour & Travel Blog</a>
	<nav class="navbar">
		<a href="home.php">Home</a>
		<a href="about.php">About</a>
		<a href="package.php">Package</a>
		<a href="book.php">Book</a>
		<a href="login.php">Log Out</a>
	</nav>
	<div id="menu-btn" class="fas fa-bars" ></div>
	
</section>
<!-- Header section end -->

<!-- home section starts -->
<section class="home">

	<div class="swiper home-slider">
		<div class="swiper-wrapper">
			<div class="swiper-slide slide" style="background:url(images/hs1.jpg) no-repeat">
				<div class="content">
					<span>Explore, Discover, Travel</span>
					<h3>Travel Around the World</h3>
					<a href="package.php" class="btn">Discover More</a>
				</div>
			</div>
			<div class="swiper-slide slide" style="background:url(images/hs2.jpg) no-repeat">
				<div class="content">
					<span>Explore, Discover, Travel</span>
					<h3>Discover the New Places</h3>
					<a href="package.php" class="btn">Discover More</a>
				</div>
			</div>
			<div class="swiper-slide slide" style="background:url(images/hs3.jpg) no-repeat">
				<div class="content">
					<span>Explore, Discover, Travel</span>
					<h3>Make your Tour Worthwhile</h3>
					<a href="package.php" class="btn">Discover More</a>
				</div>
			</div>
		</div>
		<div class="swiper-button-next"></div>
   		<div class="swiper-button-prev"></div>

	</div>

</section>
<!-- home section end -->

<!-- services section starts -->
	<section class="services">

		<h1 class="heading-title">Our Services</h1>
		<div class="box-container">

			<div class="box">
				<img src="images/icon1.jpg" alt=""></img>
				<h3>Adventure</h3>
			</div>
			<div class="box">
				<img src="images/icon2.png" alt=""></img>
				<h3>Tour Guide</h3>
			</div>
			<div class="box">
				<img src="images/icon3.jpg" alt=""></img>
				<h3>Trekking</h3>
			</div>
			<div class="box">
				<img src="images/icon4.png" alt=""></img>
				<h3>Camp Fire</h3>
			</div>
		</div>

	</section>
<!-- services section end -->

<!-- home about section starts -->
<section class="home-about">
	<div class="image">
		<img src="images/about1.jpg" alt=""></img>
	</div>
	<div class="content">
		<h3>About Us</h3>
		<p>Welcome to Tour & Travel Blog, where every journey is an adventure waiting to be explored. We are passionate about travel and dedicated to helping you embark on unforgettable voyages to some of the world's most captivating destinations.</p>
		<a href="about.php" class="btn">Read More</a>
	</div>

</section>
<!-- home about section end -->

<!-- home package section starts -->
<section class="home-package">

	<h1 class="heading-title">Our Packages</h1>
	<div class="box-container">
		<div class="box">
			<div class="image">
				<img src="images/p1.jpg" alt=""></img>
			</div>
			<div class="content">
				<h3>Adventure & Tour</h3>
				<p>Are you ready to embark on a journey that will ignite your sense of adventure and leave you with stories to last a lifetime? Welcome to Tour & Travel Blog, where we specialize in crafting adrenaline-pumping adventures and awe-inspiring tours.</p>
				<a href="book.php" class="btn">Book Now</a>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="images/p2.jpg" alt=""></img>
			</div>
			<div class="content">
				<h3>Adventure & Tour</h3>
				<p>Are you ready to embark on a journey that will ignite your sense of adventure and leave you with stories to last a lifetime? Welcome to Tour & Travel Blog, where we specialize in crafting adrenaline-pumping adventures and awe-inspiring tours.</p>
				<a href="book.php" class="btn">Book Now</a>
			</div>
		</div>
		<div class="box">
			<div class="image">
				<img src="images/p3.jpg" alt=""></img>
			</div>
			<div class="content">
				<h3>Adventure & Tour</h3>
				<p>Are you ready to embark on a journey that will ignite your sense of adventure and leave you with stories to last a lifetime? Welcome to Tour & Travel Blog, where we specialize in crafting adrenaline-pumping adventures and awe-inspiring tours.</p>
				<a href="book.php" class="btn">Book Now</a>
			</div>
		</div>
	</div>
	<div class="load-more"><a href="package.php" class="btn">Load More</a></div>

</section>
<!-- home package section end -->

<!-- home offer section starts -->
<section class="home-offer">
	<div class="content">
		<h3>Upto 50% off</h3>
		<p>Explore the world without breaking the bank with our exclusive travel offers and promotions. At Tour & Travel Blog, we believe that unforgettable journeys should be accessible to all. Check out our current offers and start planning your next adventure today.</p>
		<a href="book.php" class="btn">Book Now</a>
	</div>
</section>
<!-- home offer ection end -->

<!-- Footer section starts -->
<section class="footer">
	<div class="box-container">
		<div class="box">
			<h3>Quick Links</h3>
			<a href="home.php"><i class="fas fa-angle-right"></i> Home</a>
			<a href="about.php"><i class="fas fa-angle-right"></i> About</a>
			<a href="package.php"><i class="fas fa-angle-right"></i> Package</a>
			<a href="book.php"><i class="fas fa-angle-right"></i> Book</a>
		</div>
		<div class="box">
			<h3>Extra Links</h3>
			<a href="#"><i class="fas fa-angle-right"></i>Ask Question</a>
			<a href="#"><i class="fas fa-angle-right"></i>About Us</a>
			<a href="#"><i class="fas fa-angle-right"></i>Privacy Policy</a>
			<a href="#"><i class="fas fa-angle-right"></i>Terms of Use</a>
		</div>
		<div class="box">
			<h3>Contact Info</h3>
			<a href="#"><i class="fas fa-phone"></i>+91 12345 67890</a>
			<a href="#"><i class="fas fa-phone"></i>+91 67890 12345</a>
			<a href="#"><i class="fas fa-envelope"></i>rajtank123@gmail.com</a>
			<a href="#"><i class="fas fa-map"></i>Gujarat,India - 390093</a>
		</div>
		<div class="box">
			<h3>Follow Us</h3>
			<a href="#"><i class="fab fa-facebook-f"></i>  Facebook</a>
			<a href="#"><i class="fab fa-twitter"></i>  Twitter</a>
			<a href="https://www.instagram.com/raj_tank_9789/" target="_blank"><i class="fab fa-instagram"></i>  Instagram</a>
		</div>
	</div>
	<div class="credit">created by <span>raj tank</span> | all rights reserved! </div>
	
</section>
<!-- Footer section end -->

<!-- swiper js link -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Custom js file links -->
<script src="js/script.js"></script>

</body> 
</html>
