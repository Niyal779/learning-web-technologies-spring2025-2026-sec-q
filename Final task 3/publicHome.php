<?php session_start(); ?>
<html lang="en">
<head>
    <title>Public Home - xCompany</title>
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
            padding: 80px;
            text-align: center;
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
            <h1>Welcome to xCompany</h1>
        </div>
        <div class="footer">Copyright © 2017</div>
    </div>
</body>
</html>