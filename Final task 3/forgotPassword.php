<?php session_start(); ?>
<html lang="en">
<head>
    <title>Forgot Password - xCompany</title>
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
            <form method="post" action="">
                <fieldset>
                    <legend>FORGOT PASSWORD</legend>
                    Enter Email: <input type="email" name="email" required><hr>
                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </form>
            <?php
            if(isset($_POST['submit'])){
                $email = $_POST['email'];
                $found = false;
                
                if(isset($_SESSION['users'])){
                    foreach($_SESSION['users'] as $user){
                        if($user['email'] == $email){
                            echo "<p style='color:green'>Password reset link has been sent to your email!</p>";
                            $found = true;
                            break;
                        }
                    }
                }
                
                if(!$found){
                    echo "<p style='color:red'>Email not found in our records!</p>";
                }
            }
            ?>
        </div>
        <div class="footer">Copyright © 2017</div>
    </div>
</body>
</html>