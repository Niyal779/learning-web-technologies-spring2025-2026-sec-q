<?php
session_start();

if(isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}

// Check for remember me cookie
if(isset($_COOKIE['remember_username'])) {
    $remember_username = $_COOKIE['remember_username'];
}
?>
<html lang="en">
<head>
    <title>Login - xCompany</title>
    <style>
        .container{
            width: 800px;
            margin: auto;
            border: 1px solid black;
        }
        .header {
            padding: 15px;
            border-bottom: 1px solid black;
        }
        .nav {
            float: right;
        }
        .footer{
            text-align:center;
            padding: 10px;
        }
        .content{
            padding: 40px;
            border-bottom: 1px solid black;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="logo.png" height="40">
            <div class="nav">
                <a href="publicHome.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="registration.php">Registration</a>
            </div>
        </div>
        <div class="content">
            <form method="post" action="loginCheck.php">
                <fieldset>
                    <legend>LOGIN</legend>
                    Username: <input type="text" name="username" value="<?php echo isset($remember_username) ? $remember_username : ''; ?>" required><hr>
                    Password: <input type="password" name="password" required><hr>
                    <input type="checkbox" name="remember"> Remember Me<br><br>
                    <input type="submit" name="login" value="Submit">
                    <a href="forgotPassword.php">Forgot Password?</a>
                </fieldset>
            </form>
        </div>
        <div class="footer">Copyright © 2017</div>
    </div>
</body>
</html>