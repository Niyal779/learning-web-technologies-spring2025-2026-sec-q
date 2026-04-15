<?php
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember = isset($_POST['remember']);
    
    // Check if user exists in session storage
    if(isset($_SESSION['users'][$username]) && $_SESSION['users'][$username]['password'] == $password){
        $_SESSION['user'] = $_SESSION['users'][$username];
        
        // Set remember me cookie if checked (30 days)
        if($remember){
            setcookie('remember_username', $username, time() + (86400 * 30), "/");
        } else {
            if(isset($_COOKIE['remember_username'])){
                setcookie('remember_username', '', time() - 3600, "/");
            }
        }
        
        header("Location: dashboard.php");
        exit();
    } else {
        $_SESSION['login_error'] = "Invalid username or password!";
        header("Location: login.php");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>