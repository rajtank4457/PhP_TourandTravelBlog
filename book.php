<!DOCTYPE html> 
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<title>Book</title>
	
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

<div class="heading" style="background:url(images/bg3.jpg) no-repeat">
	<h1>Book </h1>
</div>

<!-- booking section starts -->

	<section class="booking">
		<h1 class="heading-title">Book your Trip!</h1>
		<form action="book_form.php" method="post" class="book-form">
			<div class="flex">
				<div class="inputBox">
					<span>Name:</span>
					<input type="text" placeholder="Enter Your Name" name="name">
				</div>
				<div class="inputBox">
					<span>Email:</span>
					<input type="email" placeholder="Enter Your Email" name="email">
				</div>
				<div class="inputBox">
					<span>Phone:</span>
					<input type="number" placeholder="Enter Your Number" name="phone">
				</div>
				<div class="inputBox">
					<span>Address:</span>
					<input type="text" placeholder="Enter Your Address" name="address">
				</div>
				<div class="inputBox">
					<span>Where to:</span>
					<input type="text" placeholder="Enter Your Place to Visit" name="location">
				</div>
				<div class="inputBox">
					<span>Member:</span>
					<input type="number" placeholder="Enter Number of members" name="member">
				</div>
				<div class="inputBox">
					<span>Arrivals:</span>
					<input type="date" name="arrivals">
				</div>
				<div class="inputBox">
					<span>Leaving:</span>
					<input type="date" name="leaving">
				</div>
			</div>
			<input type="submit" value="Submit" class="btn" name="send">
		</form>
	</section>

<!-- booking section ends -->


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
