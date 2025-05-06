<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- lang means language en for english -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- The charset attribute specifies the character encoding for the HTML document.
		 The HTML5 specification encourages web developers to use the UTF-8 character set,
		  which covers almost all of the characters and symbols in the world! -->
	<title>Event management website</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<link rel="stylesheet" href="𝘴𝘰𝘮𝘦𝘵𝘩𝘪𝘯𝘨">
	<link rel="stylesheet" href="styles/event.css">

</head>

<body>

	<!-- header section starts -->
	<header class="header">
		<a href="#" class="logo"><span>O</span>ccasion<span>T</span>rack</a>
		<nav class="navbar">
			<a href="#home"><i class="fa fa-home"></i>home</a>
			<a href="#about"><i class="fa fa-clone"></i>about</a>
			<a href="#service"><i class="fa fa-users"></i>service</a>
			<a href="#gallery"><i class="fa fa-images"></i>Gallery</a>
			<a href="#price"><i class="fa fa-inr"></i>price</a>
			<a href="contact.php"><i class="fa fa-phone"></i>contact</a>
		    <a href="login.php"><i class="fa fa-sign-in"></i>Login</a>
			<button class="box-contain"></button>
		</nav>

		<div id="menu-bars" class="fas fa-bars"></div>
		<!-- Used on a button: -->
	</header>
	<!-- header section ends -->
	<!-- home section starts here -->

	<section class="home" id="home">
		<div class="content">
			<h3> Its time to honoring ! the best <span>event organizers!!</span></h3>
		</div>
		<div class="swiper home-slider">
			<div class="swiper-wrapper">
				<div class="swiper-slide"><img src="Images/ganpati1.jpeg" alt="" style="width:500px;height:600px;"></div>
				<div class="swiper-slide"><img src="Images/hoil.avif" alt="" style="width:500px;height:600px;"></div>
				<div class="swiper-slide"><img src="Images/cristmus.webp" alt="" style="width:500px;height:600px;"></div>
				<div class="swiper-slide"><img src="Images/d4.avif" alt="" style="width:500px;height:600px;"></div>
				<div class="swiper-slide"><img src="Images/nauratra.jpg" alt="" style="width:500px;height:600px;"></div>
				<div class="swiper-slide"><img src="Images/dashehara.jpg" alt="" style="width:500px;height:600px;"></div>
				<div class="swiper-slide"><img src="Images/republic1.jpg" alt="" style="width:500px;height:600px;"></div>
			</div>
		</div>

	</section>

	<!-- home section ends -->

	<!-- about section starts -->

	<section class="about" id="about">

		<h1 class="heading"><span> About </span> us </h1>

		<div class="row">

			<div class="image">
				<img src="imgabout" alt="">
			</div>

			<div class="content">
				<h3>We will creating memorable experiences-our event management team</h3>
				<p>We are a team of experienced event managers who are passionate about creating memorable experiences for our clients.
					We specialize in planning and executing corporate events, weddings, and private parties.Our main goal as an event management team is to create unforgettable experiences for our clients.
					We work closely with our clients to understand their vision and bring it to life. </p>
				<p>We offers complete event planning and management solutions ranging from theme events,
					private weddings, conferences, fashion shows, product launches, brand activation, award ceremonies, outdoor events etc.</p>

				<a href="contact.php" class="btn"> Contact us </a>
			</div>

		</div>

	</section>

	<!-- about section ends -->

	<!-- Service section starts -->

	<section class="service" id="service">

		<h1 class="heading"> our <span>services</span></h1>

		<div class="box-container">

			<div class="box">
				<i class="fas fa-map-marker-alt"></i>
				<center>
					<h3>venue selection</h3>
					<p>Emphasise keywords or phrases by simply highlighting, underlining or colouring them. Keep paragraphs brief.</p>
				</center>
			</div>

			<div class="box">
				<i class="fas fa-envelope"></i>
				<center>
					<h3>invitation card</h3>
					<p>Whatever your reason for throwing a party, you're getting into the mood to celebrate.</p>
				</center>
			</div>

			<div class="box">
				<i class="fas fa-music"></i>
				<center>
					<h3>Entertainment</h3>
					<p>As for entertainment, you can hire a DJ or a live band, depending on your budget and the type of event you are hosting.</p>
				</center>
			</div>

			<div class="box">
				<i class="fas fa-utensils"></i>
				<center>
					<h3>food and drinks</h3>
					<p>Incorporate locally sourced food options, Ask for Chef Selections to explore customizable menus.</p>
				</center>
			</div>


			<div class="box">
				<i class="fas fa-photo-video"></i>
				<center>
					<h3>photos and videos</h3>
					<p> when potential attendees have a taste of what an event is going to be like from photos.</p>
				</center>
			</div>

			<div class="box">
				<i class="fas fa-birthday-cake"></i>
				<center>
					<h3>custom food</h3>
					<p>Know Your Guest Demographics, Take Note of the Ages to Attend, Give Attendees a Choice.</p>
				</center>
			</div>

		</div>

	</section>

	<!-- Service section ends -->

	<!-- gallery section starts -->
	<link rel="stylesheet" href="styles/event.css">
	<section class="gallery" id="gallery">
		<h1 class="heading">our <span>gallery</span></h1>
		<div class="box-contain">
			<div class="box">
				<img src="Images/holi1.jpg" alt="">
				<h3 class="title">Photos and festivals</h3>
				<!--<div class="icons">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-share"></a>
				<a href="#" class="fas fa-eye"></a>
			
			</div>
			-->
			</div>

			<div class="box">
				<img src="Images/diwali3.jpg" alt="">
				<h3 class="title">Photos and festivals</h3>
				<!--<div class="icons">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-share"></a>
				<a href="#" class="fas fa-eye"></a>
			
			</div>
			-->
			</div>
			<div class="box">
				<img src="Images/img2.webp" alt="">
				<h3 class="title">Photos and festivals</h3>
				<!--<div class="icons">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-share"></a>
				<a href="#" class="fas fa-eye"></a>
			
			</div>
			-->
			</div>
			<div class="box">
				<img src="Images/img3.jpg" alt="">
				<h3 class="title">Photos and festivals</h3>
				<!--<div class="icons">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-share"></a>
				<a href="#" class="fas fa-eye"></a>
			
			</div>
			-->
			</div>
			<div class="box">
				<img src="Images/img4.jpg" alt="">
				<h3 class="title">Photos and festivals</h3>
				<!--<div class="icons">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-share"></a>
				<a href="#" class="fas fa-eye"></a>
			
			</div>
			-->
			</div>
			<div class="box">
				<img src="Images/img5.jpg" alt="">
				<h3 class="title">Photos and festivals</h3>
				<!--<div class="icons">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-share"></a>
				<a href="#" class="fas fa-eye"></a>
			
			</div>
			-->
			</div>
			<div class="box">
				<img src="Images/img6.jpg" alt="">
				<h3 class="title">Photos and festivals</h3>
				<!--<div class="icons">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-share"></a>
				<a href="#" class="fas fa-eye"></a>
			
			</div>
			-->
			</div>
			<div class="box">
				<img src="Images/img7.jpg" alt="">
				<h3 class="title">Photos and festivals</h3>

				<!--<div class="icons">
				<a href="#" class="fas fa-heart"></a>
				<a href="#" class="fas fa-share"></a>
				<a href="#" class="fas fa-eye"></a>
			
			</div>
			-->
			</div>
		</div>

		</form>
	</section>
	<!-- gallery section ends -->



	<!-- price section starts -->
	<section class="price" id="price">
		<h1 class="heading">our <span>price</span> </h1>
		<div class="box-container">
			<div class="box">
				<h3 class="title">for domestic events </h3>
				<h3 class="amount">$250.99</h3>
				<ul>
					<li><i class="fas fa-check"></i>full services</li>
					<li><i class="fas fa-check"></i>Decoration</li>
					<li><i class="fas fa-check"></i>Food</li>
					<li><i class="fas fa-check"></i>music and photos</li>
					<li><i class="fas fa-check"></i>invitation cards</li>
				</ul>
				<a href="pages/check1.html" class="btn">check out</a>
			</div>

			<div class="box">
				<h3 class="title">for large events </h3>
				<h3 class="amount">$450.90</h3>
				<ul>
					<li><i class="fas fa-check"></i>full services</li>
					<li><i class="fas fa-check"></i>Decoration</li>
					<li><i class="fas fa-check"></i>Food</li>
					<li><i class="fas fa-check"></i>music and photos</li>
					<li><i class="fas fa-check"></i>invitation cards</li>
				</ul>
				<a href="pages/check2.html" class="btn">check out</a>
			</div>

			<div class="box">
				<h3 class="title">for public events </h3>
				<h3 class="amount">$760.59</h3>
				<ul>
					<li><i class="fas fa-check"></i>full services</li>
					<li><i class="fas fa-check"></i>Decoration</li>
					<li><i class="fas fa-check"></i>Food</li>
					<li><i class="fas fa-check"></i>music and photos</li>
					<li><i class="fas fa-check"></i>invitation cards</li>
				</ul>
				<a href="pages/check3.html" class="btn">check out</a>
			</div>

			<div class="box">
				<h3 class="title">for others </h3>
				<h3 class="amount">$150.99</h3>
				<ul>
					<li><i class="fas fa-check"></i>full services</li>
					<li><i class="fas fa-check"></i>Decoration</li>
					<li><i class="fas fa-check"></i>Food</li>
					<li><i class="fas fa-check"></i>music and photos</li>
					<li><i class="fas fa-check"></i>invitation cards</li>
				</ul>
				<a href="pages/check4.html" class="btn">check out</a>
			</div>
		</div>

	</section>

	<!-- price section ends -->





















	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

	<script src="js/script.js"></script>

</body>

</html>