<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
</head>

<body>
    <form method="post" action="saveRegistration.php" name="regForm">

        <h2 align="center">STUDENT SPHERE</h2>
        <h3 align="center">Student that register for student sphere</h3><br>
        <table align="center" border="1">
            <tr>
                <th colspan="2">BIODATA</th>
            </tr>
            <tr>
                <th width="104">Name</th>
                <td width="350"><input type="text" name="uname" size="30"></td>
            </tr>
            <tr>
                <th width="104">Password</th>
                <td width="350"><input type="password" name="pass" size="30"></td>
            </tr>
            <tr>
                <th width="104">Email</th>
                <td width="350"><input type="text" name="email" size="30"></td>
            </tr>
            <tr>
                <th width="104">Phone Number</th>
                <td width="350"><input type="text" name="num" size="30"></td>
            </tr>
            <tr>
                <td>&nbsp&nbsp</td>
                <td>&nbsp&nbsp</td>
            </tr>
            <tr>
                <td width="104"><input type="submit" name="submitBtn" value="Submit"></td>
                <td width="350"><input type="reset" name="resetBtn" value="Clear"></td>
            </tr>
        </table>
    </form>
</body>

</html>
