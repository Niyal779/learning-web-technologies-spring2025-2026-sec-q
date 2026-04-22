<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>REGISTRATION</legend>
                Name: <input type="text" name="name"><hr>
                Email: <input type="email" name="email"><hr>
                Username: <input type="text" name="username"><hr>
                Password: <input type="password" name="password"><hr>
                Confirm Password: <input type="password" name="cpassword"><hr>
                <input type="radio" name="role" value="customer">Customer
                <input type="radio" name="role" value="manager">Manager <br><br>
                

                <input type="submit" name="submit" value="Submit">
                <input type="reset" name="reset" value="Reset">

            </fieldset>

        </form>
        <?php
        if(isset($_POST['submit'])){
        if($_POST['password'] == $_POST['cpassword']){
    
        $_SESSION['user'] = [
            "name" => $_POST['name'],
            "email" => $_POST['email'],
            "username" => $_POST['username'],
            "password" => $_POST['password'],
            "role" => $_POST['role']
        ];
        echo "Registration successful!";
        echo "<br><a href='login.php'>Go to Login</a>";
    } else {
        echo "Password mismatch!";
    }
}
?>
</body>
</html>