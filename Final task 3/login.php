<?php session_start(); ?>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="loginCheck.php" enctype="multipart/form-data">
            <fieldset>
                <legend>LOGIN</legend>
                Username: <input type="text" name="username"><hr>
                Password: <input type="password" name="password">
                <input type="radio" name="role" value="customer">Customer
                <input type="radio" name="role" value="manager">Manager
                <br><br>
                <input type="submit" name="login" value="Submit">
                

            </fieldset>
        </form>
</body>
</html>