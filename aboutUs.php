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

        .navbar header img {
            height: 60px;
            /* Set the height of the icon */
            width: 150px;
            /* Set the width of the icon */
            margin-top: -20px;
            /* Move the icon slightly higher */
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

        .container {
            max-width: 800px;
            /* Set a maximum width for the content container */
            margin: 0 auto;
            /* Center the container horizontally */
        }

        #AboutUs h2 {
            padding: 20px;
            /* Add any other styling you want for the h2 element */
        }

        #AboutUs .paragraph-container {
            border: 1px solid #ccc;
            /* Add a border for the box */
            padding: 40px;
            /* Add padding to the box */
            margin-bottom: 20px;
            /* Add margin to separate boxes */
        }

        .logo {
            height: 300px;
            padding-bottom: 15px;
            width: 75%;
            /* Adjust width as needed */
            margin: 0 auto;
            /* Center horizontally */
            display: block;
            /* Ensures margin: 0 auto; works */
        }


        .centered-image {
            padding: 10px;
            float: left;
            display: block;
            margin: 0 auto;
            /* Center the image horizontally */
            width: 400px;
            max-width: 100%;
            /* Ensure the image doesn't exceed its original size */
            height: 450x;
            /* Maintain the aspect ratio of the image */
            margin-left: 15px;
            /* Add margin to separate the image from paragraphs */
            margin-top: -38px;
        }

        .paragraph-container {
            border: 1px solid #ccc;
            padding: 20px;
            margin-bottom: 20px;
        }

        .paragraph-container p {
            margin-bottom: 15px;
            /* Add margin to separate paragraphs */
        }


        .white .paragraph-container p {
            color: burlywood;
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
        <section id="AboutUs">
            <h2>About Us</h2>

            <div class="paragraph-container">
                <p>Universiti Poly-Tech Malaysia (UPTM) is a leading institution of higher learning with a vision to
                    become the university of choice for nurturing professionals who will make a positive impact on the
                    nation. It is dedicated to nurturing the next generation of professionals by offering personalised
                    education that emphasises the development of human attributes and the integration of contemporary
                    technologies into every field of its education. It also upholds the concept that every student
                    should be empowered to be their best selves, as future contributors to a better tomorrow for our
                    nation and beyond. UPTM's commitment to its motto of Trustworthy, Caring, Resilient, Respected is
                    reflected in its efforts to develop highly skilled and knowledgeable professionals who possess the
                    essential qualities of professionalism, ethical responsibility, and social awareness. Indeed, UPTM
                    is a university that prepares graduates who are not only highly skilled and knowledgeable, but also
                    possess the essential qualities of professionalism, ethical responsibility, and social awareness.
                </p>
            </div>

            <img src="banner.png" alt="Image description" class="logo">
            <div class="white">

                <div class="paragraph-container">
                    <img src="img.jpg" alt="Image description" class="centered-image" style="height=15">
                    <p>Mission
                        Our mission is to be part of the lives of all our customers and help them on their path to a
                        better tomorrow by offering the latest products and services, providing a comfortable shopping
                        experience, and creating a diverse and inclusive workplace.
                        Vision
                        At FamilyMart, we strive for a future in which, together with all of our customers, staff, and
                        partners, we create new value and realize a sustainable and prosperous society by continuously
                        innovating and evolving our operations.
                        Key Team
                        Mr. Chien-Hsing Lee (SVP of Admin. Division, Director of Admin. Division & Corp. Governance
                        Officer)

                        Mr. Sheng-Fu Wu (Exec. VP)

                        Recognition and Awards
                        FamilyMart has been acknowledged for its commitment to sustainability, diversity and inclusion,
                        and customer service in the convenience store industry. It has been awarded Japan’s Top
                        Convenience Store in 2020, Customer Service Excellence Award in 2019, and Best Convenience Store
                        Chain in 2018.
                    </p>
                </div>
            </div>
        </section>

    </div>

</body>