<html>
<head>
    <title>Delete Record</title>
</head>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "studentsphere";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the 'uname' field is set in the $_POST array
    if (isset($_POST['uname'])) {
        // get input value
        $username = $_POST['uname'];

        // sql to delete a record
        $sql = "DELETE FROM user WHERE uname='$username'";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    } else {
        echo "No 'username' field found in the form data.";
    }

    // close connection
    $conn->close();

    echo '<p><a href="admin.php">Back to Main Menu</a></p>';
    ?>
</body>
</html>
