<?php
session_start();

if(isset($_POST['login'])){

    if(isset($_SESSION['user'])){

        if($_SESSION['user']['username'] == $_POST['username'] &&
           $_SESSION['user']['password'] == $_POST['password']){

            $_SESSION['status'] = true;

            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid credentials!";
        }

    } else {
        echo "No registered user found!";
    }
}
?>