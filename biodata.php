<?php
session_start();

// Include database connection
include ("db.php");

?>

<!DOCTYPE html>
<html lang="en">

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

        .background .container {
            padding: 20px;
            text-align: center;
            /* Center the text within the container */
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
            padding-top: 50px;
            display: inline-block;
            vertical-align: middle;
        }

        .background h2 {
            display: inline-block;
            vertical-align: middle;
            padding-left: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: white;
            color: black;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }

        .background {
            background: url(wallpaper2.jpg) no-repeat;
            background-position: center;
            background-size: cover;
            height: 100vh;
            width: 100%;
            filter: blur(10px);
        }

        .header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 25px 13%;
            background: transparent;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: white;
            color: black;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .button:hover {
            background-color: black;
            color: white;
        }

        .container {
            position: absolute;
            text-align: center;
            top: 20%;
            width: 100%;
            height: auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.5);
            /* Semi-transparent background */
            backdrop-filter: blur(10px);
            /* Apply the blur effect */
            border-radius: 20px;
            overflow: hidden;
        }

        .btn-container {
            display: flex;
            justify-content: center;
        }

        .btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: white;
            color: black;
            border: 1px solid #ccc;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s, color 0.3s, border-color 0.3s;
        }

        .btn:hover {
            background-color: white;
            color: black;
            border-color: black;
        }

        form {
            margin-top: 20px;
            text-align: left;
        }

        .form-line {
            display: flex;
            flex-direction: column;
            padding-left: 15px;
            text-align: left;
        }

        .form-line span,
        .form-line select {
            padding-left: 20px;
            /* Adjust as needed */
        }

        label {
            display: inline-block;
            margin-bottom: 10px;
            margin-right: 50px;
        }

        select {
            width: calc(50%);
            /* Adjust width to fill remaining space */
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
            font-size: 16px;
            outline: none;
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
    <div class="background"></div>

    <div class="container">

        <h3>USER BIODATA</h3>
        <div class="form-line">
            <label for="name">STUDENT'S ID &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp;:
                <span>
                    <?php echo $_SESSION['uname']; ?>
                </span> </label>
            <label for="email">EMAIL &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; :
                <span>
                    <?php echo $_SESSION['email']; ?>
                </span> </label>
            <label for="num">PHONE NUMBER &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp;&nbsp;:
                <span>
                    <?php echo $_SESSION['num']; ?>
                </span> </label>
            <label for="club">JOINED CLUB &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp;&nbsp;:
                <span>
                    <?php echo $_SESSION['club']; ?>
                </span> </label>
        </div>
    </div>
</body>

</html>