<?php
session_start();

include ("db.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM admin WHERE uname = '$username' AND pass = '$password' LIMIT 1";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            $_SESSION['admin_name'] = $user_data['uname']; // Set the session variable with the username

            // Redirect to another page if login is successful
            header("Location: admin.php");
            die();
        } else {
            echo "<script type='text/javascript'>alert('Wrong username or password')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Please enter username and password')</script>";
    }
}

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
            font-family: "poppins", sans-serif;
        }

        body {
            height: 100vh;
            width: 100%;
            background: #000;

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
            background: url(wallpaper.jpg) no-repeat;
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

        .btnLogin-popup {
            width: 150px;
            /* Increase the button width */
            height: 50px;
            background: #f72d7a;
            /* Change the background color */
            border: 2px solid #fff;
            outline: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1.1em;
            color: #fff;
            font-weight: 500;
            margin-left: 20px;
            /* Adjust margin as needed */
            transition: .5s;
        }

        .btnLogin-popup:hover {
            background: #fff;
            /* Change the background color on hover */
            color: #f72d7a;
            /* Change the text color on hover */
        }

        .container {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 75%;
            height: 550px;
            margin-top: 20px;
            background: url(backgroun3.jpg) no-repeat;
            background-position: center;
            background-size: cover;
            border-radius: 20px;
            overflow: hidden;
        }

        .item {
            position: absolute;
            top: 0;
            left: 0;
            width: 58%;
            height: 75%;
            color: #fff;
            background: transparent;
            padding: 80px;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }

        .item .logo {
            color: #fff;
            font-size: 30px;

        }

        .text-item h2 {
            padding-top: 10px;
            padding-left: 10px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 40px;
            line-height: 1;
            color: black;
        }

        .text-item p {
            font-size: 16px;
            margin: 20px 0;
        }

        .social-icon a i {
            color: #fff;
            font-size: 24px;
            margin-left: 10px;
            cursor: pointer;
            transition: .5s ease;
        }

        .container .login-section {
            position: absolute;
            top: 0;
            right: 0;
            width: calc(100% - 58%);
            height: 100%;
            color: #fff;
            backdrop-filter: blur(10px);
        }

        .login-section .form-box {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;

        }

        .login-section .form-box.login {
            transform: translateX(0px);
            transition: transform .6s ease;
            transition-delay: 0.7s;
        }

        .login-section.active .form-box.login {
            transform: translateX(430px);
            transition-delay: 0s;
        }

        .login-section .form-box h2 {
            color: black;
            text-align: center;
            font-size: 25px;
        }

        .form-box .input-box {
            width: 340px;
            height: 50px;
            border-bottom: 2px solid#fff;
            margin: 30px 0;
            position: relative;
        }

        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            padding-right: 28px;


        }

        .input-box label {
            color: black;
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 16px;
            font-weight: 600px;
            pointer-events: none;
            transition: .5s ease;

        }

        .input-box .icon {
            position: absolute;
            top: 13px;
            right: 0;
            font-size: 19px;
        }

        .input-box input:focus~label,
        .input-box input:valid~label {
            top: -5px;
        }

        .remember-password {
            font-size: 14px;
            font-weight: 500;
            margin: -15px 0 15px;
            display: flex;
            justify-content: space-between;
        }

        .remember-password label input {
            accent-color: #fff;
            margin-right: 3px;

        }

        .remember-password a {
            color: #fff;
            text-decoration: none;
        }

        .remember-password a:hover {
            text-decoration: underline;
        }

        .btn {
            background: #fff;
            width: 100%;
            height: 45px;
            outline: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: white;
            font-size: 16px;
            color: black;
            box-shadow: rgba(0, 0, 0, 0.4);
        }

        .form-box.login button:hover {
            background-color: black;
            color: white;
        }

        .create-account {
            font-size: 14.5px;
            text-align: center;
            margin: 25px;
        }

        .create-account p a {
            color: #fff;
            font-weight: 600px;
            text-decoration: none;
        }

        .create-account p a:hover {
            text-decoration: underline;
        }
    </style>
    <title>STUDENT SPHERE</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="header">
    </header>
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <h2 class="logo"><img src="uptm.png" width="350" height="150">
                <div class="text-item">
                    <h2>Welcome ! <br><span>
                            To Student Sphere
                        </span></h2>
                </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form method="POST">
                    <h2>Welome Admin</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <input type="text" name="uname" class="uname" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" name="pass" class="pass" required>
                        <label>Password</label>
                    </div>
                    <button class="btn">Login In</button>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>