<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location: login.php');
    exit;
}
?>
<html>
<head><title>Add Employee</title></head>
<body>

<h2>Register New Employee</h2>

<a href="dashboard.php">Dashboard</a> |
<a href="employeeList.php">Employee List</a> |
<a href="../controller/logoutController.php">Logout</a>
<hr>

<?php
if(isset($_SESSION['error'])){
    echo "<p style='color:red'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}
if(isset($_SESSION['success'])){
    echo "<p style='color:green'>".$_SESSION['success']."</p>";
    unset($_SESSION['success']);
}
?>

<form method="post" action="../controller/employeeAddController.php">
    <fieldset>
        <legend>ADD EMPLOYEE</legend>
        Name:     <input type="text" name="name"><br><br>
        Contact:  <input type="text" name="contact"><br><br>
        Username: <input type="text" name="username"><br><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" name="submit" value="Add Employee">
        <input type="reset" value="Clear">
    </fieldset>
</form>

</body>
</html>
