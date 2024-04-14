<!DOCTYPE html>
<html lang="en">

<?php
session_start();



?>

<head>
	<meta charset="utf-8">
	<title>STUDENT SPHERE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-family: "Poppins", sans-serif;
		}

		body {
			font-family: Georgia, 'Times New Roman', Times, serif;
			height: 100vh;
			width: 100%;
			background: #000;
		}

		.background {
			background: url(wallpaper2.jpg) no-repeat;
			background-position: center;
			background-size: cover;
			height: 320vh;
			width: 100%;
		}

		.navbar {
			font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
			padding-top: 30px;
			align-content: top;
			background: #fff;
			display: flex;
			justify-content: space-around;
			width: 100%;
			box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 1);
			position: relative;
		}

		.navbar a {
			color: #000000;
			padding: 1px 10px;
			text-decoration: none;
			position: relative;
		}

		.navbar a.underline::before {
			content: "";
			position: absolute;
			top: 25px;
			width: 0;
			height: 5px;
			bottom: 0;
			left: 2;
			background-color: crimson;
			transition: width 0.3s;
		}

		.navbar a.underline:hover::before {
			width: 25%;
		}

		.background .container {
			padding: 20px;
			text-align: center;
		}

		.navbar header img {
			height: 60px;
			/* Set the height of the icon */
			width: 150px;
			/* Set the width of the icon */
			margin-top: -20px;
			/* Move the icon slightly higher */
		}

		.icon {
			display: inline-block;
			padding-left: 25px;
			vertical-align: middle;
			padding-top: 15px;
			padding-right: 5px;
		}

		.background h2 {
			display: inline-block;
			vertical-align: middle;
			padding-top: 25px;
			padding-bottom: 10px;
		}

		/* Slideshow CSS */
		.slideshow-container {
			max-width: 1000px;
			position: relative;
			margin: auto;
		}

		.mySlides {
			display: none;
		}

		.prev,
		.next {
			cursor: pointer;
			position: absolute;
			top: 50%;
			width: auto;
			margin-top: -22px;
			padding: 16px;
			color: white;
			font-weight: bold;
			font-size: 18px;
			transition: 0.6s ease;
			border-radius: 0 3px 3px 0;
			user-select: none;
		}

		.prev {
			left: 10px;
		}

		.next {
			right: 10px;
			border-radius: 3px 0 0 3px;
		}

		.prev:hover,
		.next:hover {
			background-color: rgba(0, 0, 0, 0.8);
		}

		.numbertext {
			color: #f2f2f2;
			font-size: 12px;
			padding: 8px 12px;
			position: absolute;
			top: 0;
		}

		.dot {
			cursor: pointer;
			height: 15px;
			width: 15px;
			margin: 0 2px;
			background-color: #bbb;
			border-radius: 50%;
			display: inline-block;
			transition: background-color 0.6s ease;
		}

		.active,
		.dot:hover {
			background-color: #717171;
		}

		.fade {
			animation-name: fade;
			animation-duration: 1.5s;
		}

		@keyframes fade {
			from {
				opacity: .4
			}

			to {
				opacity: 1
			}
		}

		/* Card CSS */
		.container {
			display: flex;
			flex-wrap: wrap;
			justify-content: center;
			gap: 20px;
		}

		.card {
			height: 400px;
			width: 250px;
			margin: 35px;
			box-shadow: 5px 5px 20px black;
			overflow: hidden;
			position: relative;
			transition: all 0.3s ease;
		}

		img {
			height: 100%;
			width: 100%;
			border-radius: 3px;
			transition: transform 0.3s ease;
		}

		.overlay {
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.7);
			padding: 20px;
			box-sizing: border-box;
			transform: translateY(100%);
			transition: transform 0.3s ease;
		}

		.card:hover .overlay {
			transform: translateY(0);
		}

		h1,
		p {
			color: white;
		}

		h1 {
			text-align: center;
			margin: 10px 0;
			font-size: 24px;
		}

		p {
			font-size: 16px;
			margin-bottom: 20px;
		}

		.hover-button {
			display: block;
			margin-top: 10px;
			background-color: #3498db;
			color: #fff;
			padding: 5px 10px;
			border-radius: 5px;
			text-decoration: none;
			text-align: center;
			transition: background-color 0.3s ease;
		}

		.hover-button:hover {
			background-color: #2980b9;
		}

		.card:hover img {
			transform: scale(1.1);
		}

		.card:hover {
			box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.6);
		}

		.menu {
			font-family: Verdana, Geneva, Tahoma, sans-serif;
		}

		#ContactUs {
			padding: 2rem 9%;
			background-color: #f0f0f0;
			text-align: center;
			font-size: 18px;
		}

		.menu h2,
		.menu p {
			padding-top: 10px;
			color: black;
			/* Set text color to black */
		}

		.social-icons {
			text-align: center;
			margin-top: 20px;
		}

		.social-icons a {
			color: #0000FF;

			margin: 0 10px;
			/* Adjust spacing between icons */
			font-size: 24px;
			/* Adjust icon size */
		}
	</style>
</head>

<body>
	<header>
		<div class="navbar">
			<header> <a href="home.php"><img src="uptm.png" alt=""></a> </header>
			<a class="underline" href="home.php"><i class="fa fa-address-card"></i> Home</a>
			<a class="underline" href="newClub.php"><i class="fa fa-pencil"></i> Register New Club</a>
			<a class="underline" href="aboutUs.php"><i class="fa fa-university"></i> About Club</a>
			<a class="underline" href="biodata.php"><i class="	fa fa-address-book"></i> Profile</a>
			<a class="underline" href="faq.php"><i class="fa fa-book"></i> FAQ</a>
			<a class="underline" href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a>
	</header>

	<div class="background">
		<div class="slide">
			<div class="icon">
				<i class="fa fa-home" style="font-size:25px"></i>
			</div>
			<h2> Welcome Home,
				<?php echo isset($_SESSION['uname']) ? $_SESSION['uname'] : 'Guest'; ?>
			</h2>

			<div class="slideshow-container">
				<div class="mySlides fade">
					<div class="numbertext">1 / 2</div>
					<img src="slide1.jpg" style="width:100%" height="100%">
				</div>
				<div class="mySlides fade">
					<div class="numbertext">2 / 2</div>
					<img src="slide70.jpg" style="width:100%" height="100%">
				</div>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</div>
			<br>
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
			</div>
			<div class="container">
				<div class="card">
					<img src="badminton1.jpg" alt="badminton">
					<div class="overlay">
						<h1>BADMINTON</h1>
						<p>Badminton is a dynamic racquet sport played with lightweight racquets and a shuttlecock, a
							feathered projectile. Players hit the shuttlecock back and forth over a net, aiming to land
							it in the opposing side's court. It can be played in singles (one player per side) or
							doubles (two players per side) formats.</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
				<div class="card">
					<img src="hockey.jpg" alt="hockey">
					<div class="overlay">
						<h1>HOCKEY</h1>
						<p>Hockey is an exhilarating team sport played on ice, characterized by its fast-paced action
							and intense competition. Players, equipped with skates and hockey sticks, maneuver across
							the ice rink, aiming to propel a small, hard rubber disc known as a puck into the opposing
							team's net to score goals.</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
				<div class="card">
					<img src="esport.jpg" alt="esport">
					<div class="overlay">
						<h1>ESPORT</h1>
						<p>
							Esports is competitive video gaming, where players or teams compete in various video games
							like shooters, MOBAs, and sports simulations. It's akin to traditional sports, with
							professional players, tournaments, and a large fan base.</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="card">
					<img src="chess1.jpg" alt="chess">
					<div class="overlay">
						<h1>CHESS</h1>
						<p>Badminton is a fun game where you hit a little feathered ball called a shuttlecock back and
							forth over a net. You can play it by yourself or with a friend. The goal is to make the
							shuttlecock land in the other person's side of the court without them being able to hit it
							back.</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
				<div class="card">
					<img src="netball1.jpg" alt="netball">
					<div class="overlay">
						<h1>NETBALL</h1>
						<p>Netball is a team sport played by two teams of seven players each. The objective is to score
							points by shooting the ball through a hoop at the opponent's end of the court. Players must
							pass the ball to teammates while adhering to rules such as no running with the ball</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
				<div class="card">
					<img src="futsal1.jpg" alt="futsal">
					<div class="overlay">
						<h1>FUTSAL</h1>
						<p>
							Futsal is a fast-paced indoor variant of soccer played on a smaller pitch with a smaller,
							heavier ball. It emphasizes skillful dribbling, precise passing, and quick decision-making.
							Teams typically consist of five players, including a goalkeeper.</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="card">
					<img src="medic1.jpg" alt="medic">
					<div class="overlay">
						<h1>MEDIC</h1>
						<p>The Medic Club is a community of students passionate about healthcare and medical
							professions. We focus on learning essential medical skills such as first aid, emergency
							response, and healthcare education. </p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
				<div class="card">
					<img src="music.jpg" alt="hockey">
					<div class="overlay">
						<h1>VOCALISM</h1>
						<p>The Vocalism Club is a gathering of individuals who share a passion for singing and vocal
							performance. Our club provides a platform for members to explore and develop their vocal
							talents in a supportive and encouraging environment.</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
				<div class="card">
					<img src="cs.jpg" alt="esport">
					<div class="overlay">
						<h1>CYBER SECURITY</h1>
						<p>
							The Cyber Security Club is where enthusiasts gather to learn and practice cybersecurity
							skills. From threat detection to ethical hacking, we offer workshops and activities to help
							members stay ahead in the digital security realm.</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="card">
					<img src="faci.jpg" alt="chess">
					<div class="overlay">
						<h1>FASILITATOR</h1>
						<p>A facilitator club is a group focused on improving facilitation skills. Members engage in
							workshops, practice sessions, and peer learning to enhance their ability to guide group
							activities effectively, promote collaboration, and achieve goals efficiently. </p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
				<div class="card">
					<img src="account.jpg" alt="netball">
					<div class="overlay">
						<h1>ACCOUNTING</h1>
						<p>The Accounting Club is a dynamic community where students come together to explore accounting
							concepts, develop practical skills, and connect with industry professionals. Through
							workshops, seminars, networking events, and community service projects.</p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
				<div class="card">
					<img src="enter.jpg" alt="futsal">
					<div class="overlay">
						<h1>ENTERPRENEUR</h1>
						<p>
							The Entrepreneur Club is a dynamic community where aspiring entrepreneurs come together to
							learn, collaborate, and innovate. Through workshops, guest speaker events, and networking
							opportunities, members gain valuable insights into starting and growing businesses. </p>
						<a href="newClub.php" class="hover-button">Press to join</a>
					</div>
				</div>
			</div>
		</div>
		<div class="menu">
		<section id="ContactUs">
			<div class="container">
				<div class="contact-box">
						<h2 class="text-start">CONTACT US</h2>
						<p class="text-start">UNIVERSITI POLY-TECH MALAYSIA DU060 (W)</p>
						<p class="text-start">Jalan 6/91, Taman Shamelin Perkasa, 56100 Cheras, Kuala Lumpur</p>
						<p class="text-start">General Line: +603 9206 9700</p>
						<p class="text-start">Tel : +603 92837186 (Marketing)</p>
						<p class="text-start">Fax : +603 92810475</p>
						<p class="text-start">E-mail : marketing@uptm.edu.my</p>
						<div class="social-icons">
							<a href="https://www.facebook.com/uptm.official"><i class='bx bxl-facebook'></i></a>
							<a href="https://www.instagram.com/uptm_official/"><i class='bx bxl-instagram'></i></a>
							<a href="https://twitter.com/MPPUPTM"><i class='bx bxl-twitter'></i></a>
						</div>
						<p class="text-start">Please follow our official page to get more information about UPTM
							university </p>
					</section>
				</div>
			</div>
		</div>

	</div>

	<!-- Script for Slideshow -->
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = slides.length
			}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex - 1].style.display = "block";
			dots[slideIndex - 1].className += " active";
		}
	</script>
</body>

</html>