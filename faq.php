<!DOCTYPE html>
<html lang="en">

<?php
session_start();
?>

<head>
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;1,500&display=swap');

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
			height: 100vh;
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

		.navbar header img {
			height: 60px;
			/* Set the height of the icon */
			width: 150px;
			/* Set the width of the icon */
			margin-top: -20px;
			/* Move the icon slightly higher */
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
			/* Adjust the thickness of the line */
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
			/* Center the text within the container */
		}

		.header a img {
			height: 60px;
			/* Adjust the height as needed */
		}

		.icon {
			padding-top: 50px;
			display: inline-block;
			vertical-align: middle;
		}

		.background h2 {
			display: inline-block;
			vertical-align: middle;
			padding-left: 20px;
		}

		.title {
			font-size: 2rem;
			margin: 2rem 0;
			text-align: center;
			/* Center the title */
		}

		.faq-wrapper {
			max-width: 75%;
			margin: auto;
		}

		.faq-wrapper>p,
		.faq-wrapper>h1 {
			margin: 1.5rem 0;
			text-align: center;
		}

		.faq-wrapper>h1 {
			letter-spacing: 3px;
		}

		.accordion {
			background-color: white;
			color: rgba(0, 0, 0, 0.8);
			cursor: pointer;
			font-size: 1.2rem;
			width: 100%;
			padding: 2rem 2.5rem;
			border: none;
			outline: none;
			transition: 0.4s;
			display: flex;
			justify-content: space-between;
			align-items: center;
			font-weight: bold;
		}

		.accordion i {
			font-size: 1.6rem;
		}

		.active,
		.accordion:hover {
			background-color: #f1f7f5;
		}

		.pannel {
			padding: 0 2rem 2.5rem 2rem;
			background-color: white;
			overflow: hidden;
			background-color: #f1f7f5;
			display: none;
		}

		.pannel p {
			color: rgba(0, 0, 0, 0.7);
			font-size: 1.2rem;
			line-height: 1.4;
		}

		.faq {
			border: 1px solid rgba(0, 0, 0, 0.2);
			margin: 10px 0;
		}

		.faq:hover {
			border-color: crimson;
		}

		.faq.active {
			background-color: black;
		}
	</style>
	<title>STUDENT SPHERE</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<header>
	<div class="navbar">
		<header> <a href="index.html"><img src="uptm.png" alt=""></a> </header>

		<a class="underline" href="home.php"><i class="fa fa-address-card"></i> Home</a>
		<a class="underline" href="newClub.php"><i class="fa fa-pencil"></i> Register New Club</a>
		<a class="underline" href="aboutUs.php"><i class="fa fa-university"></i> About Club</a>
		<a class="underline" href="biodata.php"><i class="	fa fa-address-book"></i> Profile</a>
		<a class="underline" href="faq.php"><i class="fa fa-book"></i> FAQ</a>
		<a class="underline" href="logout.php"><i class="fa fa-sign-out"></i> Log Out</a>
	</div>
</header>

<body>
	<div class="background">
		<section>
			<h2 class="title">FAQs</h2>

			<div class="faq-wrapper">
				<div class="faq">
					<button class="accordion">
						What is Student Sphere about?
						<i class="fa fa-chevron-down"></i>
					</button>
					<div class="pannel">
						<p>
							Student Sphere is an innovative platform designed to facilitate club registration and
							management for university students. Our platform aims to streamline the process of creating
							and managing clubs, providing a centralized hub where students can easily register their
							clubs, access information about existing clubs, and engage with club activities. Whether
							you're interested in joining an existing club or starting your own, Student Sphere
							offers a user-friendly interface and robust features to support your club-related endeavors.
						</p>
					</div>
				</div>

				<div class="faq">
					<button class="accordion">
						Is Student Sphere available for use by students from all universities?
						<i class="fa fa-chevron-down"></i>
					</button>
					<div class="pannel">
						<p>
							No, Student Sphere is exclusively available for students from Poly-Tech Malaysia. Our
							platform is tailored to meet the specific needs and requirements of students enrolled at
							Poly-Tech Malaysia, providing them with a dedicated space to register, manage, and explore
							clubs within their institution. We strive to enhance the student experience at Poly-Tech
							Malaysia by offering comprehensive club management tools and fostering a vibrant club
							community.
						</p>
					</div>
				</div>

				<div class="faq">
					<button class="accordion">
						How can I learn more about clubs registered on Student Sphere?
						<i class="fa fa-chevron-down"></i>
					</button>
					<div class="pannel">
						<p>
							To learn more about the clubs registered on Student Sphere, you can explore our club
							directory. Navigate to the "Clubs" section of our website, where you'll find a comprehensive
							list of all registered clubs at UPTM (Poly-Tech Mara Malaysia). Each club listing provides
							detailed information about the club's mission, activities, membership requirements, and
							contact details. Additionally, you can visit our footer, where we've included a link to the
							real server for UPTM (Poly-Tech Mara Malaysia), providing direct access to the university's
							official resources and information. Through Student Sphere, students can discover,
							connect, and engage with clubs, enhancing their university experience at UPTM.
						</p>
					</div>
				</div>

				<div class="faq">
					<button class="accordion">
						How can I contact the support team of Student Sphere?
						<i class="fa fa-chevron-down"></i>
					</button>
					<div class="pannel">
						<p>
							You can easily reach out to the support team of Student Sphere for assistance or
							inquiries. Simply visit our website footer, where you'll find links to our official social
							media pages, including Instagram, Twitter, and Facebook. You can send us a direct message on
							any of these platforms, and our dedicated support team will promptly assist you with any
							questions or concerns you may have. Additionally, you can also find contact information for
							UPTM (Poly-Tech Mara Malaysia) on our footer, providing access to the university's official
							resources and support channels. At Student Sphere, we're committed to providing
							excellent service and support to our users, ensuring a seamless and enjoyable experience.
						</p>
					</div>
				</div>
			</div>
		</section>
	</div>

	<script>
		var acc = document.getElementsByClassName("accordion");
		var i;

		for (i = 0; i < acc.length; i++) {
			acc[i].addEventListener("click", function () {
				this.classList.toggle("active");
				this.parentElement.classList.toggle("active");

				var pannel = this.nextElementSibling;

				if (pannel.style.display === "block") {
					pannel.style.display = "none";
				} else {
					pannel.style.display = "block";
				}
			});
		}
	</script>
</body>

</html>