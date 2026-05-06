<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('location: login.php');
    exit;
}
require_once('../model/employeeModel.php');

$id  = $_GET['id'];
$emp = getEmployeeById($id);

if(!$emp){
    $_SESSION['error'] = "Employee not found.";
    header('location: employeeList.php');
    exit;
}
?>
<html>
<head><title>Update Employee</title></head>
<body>

<h2>Update Employee</h2>

<a href="dashboard.php">Dashboard</a> |
<a href="employeeList.php">Employee List</a> |
<a href="../controller/logoutController.php">Logout</a>
<hr>

<?php
if(isset($_SESSION['error'])){
    echo "<p style='color:red'>".$_SESSION['error']."</p>";
    unset($_SESSION['error']);
}
?>

<form method="post" action="../controller/employeeUpdateController.php">
    <fieldset>
        <legend>UPDATE EMPLOYEE</legend>
        <input type="hidden" name="id" value="<?php echo $emp['id']; ?>">

        Name:     <input type="text" name="name"     value="<?php echo $emp['name']; ?>"><br><br>
        Contact:  <input type="text" name="contact"  value="<?php echo $emp['contact']; ?>"><br><br>
        Username: <input type="text" name="username" value="<?php echo $emp['username']; ?>"><br><br>
        Password: <input type="password" name="password" placeholder="Enter new password (or keep old)"><br><br>

        <input type="submit" name="submit" value="Update Employee">
        <a href="employeeList.php">Cancel</a>
    </fieldset>
</form>

</body>
</html>
