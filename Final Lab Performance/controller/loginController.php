<?php
session_start();
require_once('../model/adminModel.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    // NULL VALIDATION
    if($username == "" || $password == ""){
        $_SESSION['error'] = "Username and password cannot be empty!";
        header('location: ../view/login.php');
        exit;
    }

    $status = loginAdmin($username, $password);

    if($status){
        $_SESSION['admin'] = $username;
        header('location: ../view/dashboard.php');
    }else{
        $_SESSION['error'] = "Invalid username or password!";
        header('location: ../view/login.php');
    }

}else{
    header('location: ../view/login.php');
}
?>
