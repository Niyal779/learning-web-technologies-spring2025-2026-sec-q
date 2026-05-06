<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location: login.php');
    exit;
}
?>
<html>
<head><title>Dashboard</title></head>
<body>

<h2>Welcome, <?php echo $_SESSION['admin']; ?></h2>

<a href="employeeAdd.php">Add Employee</a> |
<a href="employeeList.php">Employee List</a> |
<a href="../controller/logoutController.php">Logout</a>

<hr>
<p>Select an option from the menu above.</p>

</body>
</html>
