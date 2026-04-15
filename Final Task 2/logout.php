<?php
session_start();

// Clear session
session_destroy();

// Clear remember me cookie
if(isset($_COOKIE['remember_username'])){
    setcookie('remember_username', '', time() - 3600, "/");
}

header("Location: publicHome.php");
exit();
?>