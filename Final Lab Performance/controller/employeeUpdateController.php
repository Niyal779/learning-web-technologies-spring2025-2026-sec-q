<?php
session_start();
require_once('../model/employeeModel.php');

if(!isset($_SESSION['admin'])){
    header('location: ../view/login.php');
    exit;
}

if(isset($_POST['submit'])){

    $id       = $_POST['id'];
    $name     = $_POST['name'];
    $contact  = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // NULL VALIDATION
    if($name == "" || $contact == "" || $username == ""){
        $_SESSION['error'] = "Name, contact and username cannot be empty!";
        header("location: ../view/employeeUpdate.php?id=$id");
        exit;
    }

    // If password left blank, keep the old one
    if($password == ""){
        $old = getEmployeeById($id);
        $password = $old['password'];
    }

    $emp = [
        'id'       => $id,
        'name'     => $name,
        'contact'  => $contact,
        'username' => $username,
        'password' => $password
    ];

    $result = updateEmployee($emp);

    if($result){
        $_SESSION['success'] = "Employee updated successfully!";
        header('location: ../view/employeeList.php');
    }else{
        $_SESSION['error'] = "Update failed. Try again.";
        header("location: ../view/employeeUpdate.php?id=$id");
    }

}else{
    header('location: ../view/employeeList.php');
}
?>
