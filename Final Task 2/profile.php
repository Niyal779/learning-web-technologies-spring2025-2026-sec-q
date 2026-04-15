<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}
?>
<html lang="en">
<head>
    <title>View Profile - xCompany</title>
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
        .main{
            display: flex;
            min-height: 400px;
        }
        .sidebar{
            width: 200px;
            border-right: 1px solid black;
            padding: 15px;
        }
        .content{
            flex: 1;
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img src="logo.png" height="40">
            <div class="nav">
                Logged in as <?=$_SESSION['user']['name']?> |
                <a href="logout.php">Logout</a>
            </div>
        </div>
        <div class="main">
            <div class="sidebar">
                <b>Account</b><hr>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Profile</a></li>
                    <li><a href="change_password.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
            <div class="content">
                <h2>Profile Information</h2>
                <table border="1" cellpadding="8">
                    <tr><td><b>Name</b></td><td><?=$_SESSION['user']['name']?></td></tr>
                    <tr><td><b>Email</b></td><td><?=$_SESSION['user']['email']?></td></tr>
                    <tr><td><b>Username</b></td><td><?=$_SESSION['user']['username']?></td></tr>
                    <tr><td><b>Gender</b></td><td><?=$_SESSION['user']['gender']?></td></tr>
                    <tr><td><b>Date of Birth</b></td><td><?=$_SESSION['user']['dd']?>/<?=$_SESSION['user']['mm']?>/<?=$_SESSION['user']['yyyy']?></td></tr>
                </table>
            </div>
        </div>
        <div class="footer">Copyright © 2017</div>
    </div>
</body>
</html>