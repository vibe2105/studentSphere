<?php
// db.php

// Database connection parameters
$servername = "localhost"; // Your database host
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "studentsphere"; // Your database name

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>
