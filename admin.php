<?php
session_start();
include("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['uname'] ?? '';
    $email = $_POST['email'] ?? '';
    $number = $_POST['num'] ?? '';
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentsphere";

    $con = new mysqli($servername, $username, $password, $dbname);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $query = "INSERT INTO user (uname, email, num) VALUES (?, ?, ?)";
    $stmt = $con->prepare($query);

    $stmt->bind_param("sss", $username, $email, $number);

    if ($stmt->execute()) {
        echo "<script type='text/javascript'>alert('Successfully added a new product')</script>";
    } else {
        echo "<script type='text/javascript'>alert('Failed to add a new product')</script>";
    }

    $stmt->close();
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>STUDENT INFORMATION</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
		body {
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
            margin: 0;
			font-family: Georgia, 'Times New Roman', Times, serif; 
        }
		
		.header {
			justify-content: center;
			display: flex;
			margin: 10px;
			border-radius: 15px;
			padding-bottom: 15px;
			padding-top: 15px;
			}
		
			.navbar {
			padding: 10px;
			align-content: top;
			background: #fff;
			padding-top: 10px;
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
			transition: background-color 0.3s, color 0.3s; 
		    }

		.navbar a:hover {
			background-color: #000000;
			color: #ffffff; 
		    }
            
        .h1 {
            font-family: "poppins",sans-serif; 
        }

        .content {
        display: flex;
        flex-direction: column;
        align-items: center;
        }


        </style>

        </style>
        </head>
        <body>
            <header class="header">
            <img src="uptm.png" width="350" height="150" alt="" />
            </header>

            <nav class="navbar">
            <a href="login.php">Log Out </a>
            </nav>
                
                <h2 align="center">STUDENT SPHERE</h2>
                <h3 align="center">STUDENT INFORMATION</h3>
                <div class="content">
                <form action="record.php" method="post">
                    <p><input type="submit" value="View admin record" name="cmdView"></p>
                </form>

                <form action="deleteList.php"method="post">
                    <p><input type="submit" value="Delete Record" name="cmdDelete"></p>
                </form>

                <form action="registration.php" method="post">
                    <p><input type="submit" value="Add new student Record"></p>
                </form>
                </div>
            </form>
        </body>
        </html>