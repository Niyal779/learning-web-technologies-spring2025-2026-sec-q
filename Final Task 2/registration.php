<?php
session_start();

// Redirect if already logged in
if(isset($_SESSION['user'])) {
    header("Location: dashboard.php");
    exit();
}

if(isset($_POST['submit'])){
    $error = "";
    
    if($_POST['password'] != $_POST['cpassword']){
        $error = "Password mismatch!";
    } elseif(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['username'])) {
        $error = "All fields are required!";
    } else {
        // Store in session (as per lab requirement - no database)
        $_SESSION['users'][$_POST['username']] = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "username" => $_POST['username'],
            "password" => $_POST['password'],
            "gender" => $_POST['gender'],
            "dd" => $_POST['dd'],
            "mm" => $_POST['mm'],
            "yyyy" => $_POST['yyyy']
        ];
        $success = "Registration successful! <a href='login.php'>Login here</a>";
    }
}
?>
<html lang="en">
<head>
    <title>Registration - xCompany</title>
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
            padding: 20px;
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
            <form method="post" action="">
                <fieldset>
                    <legend>REGISTRATION</legend>
                    Name: <input type="text" name="name" required><hr>
                    Email: <input type="email" name="email" required><hr>
                    Username: <input type="text" name="username" required><hr>
                    Password: <input type="password" name="password" required><hr>
                    Confirm Password: <input type="password" name="cpassword" required><hr>
                    <fieldset>
                        <legend>Gender</legend>
                        <input type="radio" name="gender" value="Male" required>Male
                        <input type="radio" name="gender" value="Female">Female
                    </fieldset><hr>
                    <fieldset>
                        <legend>DOB</legend>
                        <input type="text" size="2" maxlength="2" name="dd" placeholder="dd" required> /
                        <input type="text" size="2" maxlength="2" name="mm" placeholder="mm" required> /
                        <input type="text" size="4" maxlength="4" name="yyyy" placeholder="yyyy" required>
                        (dd/mm/yyyy)
                    </fieldset><hr>
                    <input type="submit" name="submit" value="Submit">
                    <input type="reset" name="reset" value="Reset">
                </fieldset>
            </form>
            <?php 
            if(isset($error)) echo "<p style='color:red'>$error</p>";
            if(isset($success)) echo "<p style='color:green'>$success</p>";
            ?>
        </div>
        <div class="footer">Copyright © 2017</div>
    </div>
</body>
</html>