<?php
session_start();
require_once('../model/employeeModel.php');

if(!isset($_SESSION['admin'])){
    header('location: ../view/login.php');
    exit;
}

$id = $_GET['id'];

if($id == ""){
    $_SESSION['error'] = "Invalid employee ID.";
    header('location: ../view/employeeList.php');
    exit;
}

$result = deleteEmployee($id);

if($result){
    $_SESSION['success'] = "Employee deleted successfully!";
}else{
    $_SESSION['error'] = "Delete failed. Try again.";
}

header('location: ../view/employeeList.php');
?>
