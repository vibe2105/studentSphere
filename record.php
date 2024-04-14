<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentsphere";


// Establish a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "<div style='text-align:center;'>STUDENT INFO</div>" . "<br>";
// Retrieve user information
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "<br>";
        echo "Name: " . $row["uname"] . "<br>";
        echo "Email: " . $row["email"] . "<br>";
        echo "Number: " . $row["num"] . "<br><br>";
        echo "Joined club: " . $row["club"] . "<br><br>";
    }
} else {
    echo "0 results";
}

?>
</table>
</div>
<style>
    .button {
            width: 100%;
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
        }
    
        .grid-container {
            padding: 20px;
        }
        .styled-table {
            border-collapse: collapse;
            width: 100%;
        }
        .styled-table th,
        .styled-table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        .styled-table th {
            font-weight: bold;
        }
</style>
<a href="admin.php" class="button">Back to main menu</a>

<?php

$conn->close();
?>
