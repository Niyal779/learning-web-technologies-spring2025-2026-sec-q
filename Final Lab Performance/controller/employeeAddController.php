<?php
session_start();
require_once('../model/employeeModel.php');

if(!isset($_SESSION['admin'])){
    header('location: ../view/login.php');
    exit;
}

if(isset($_POST['submit'])){

    $name     = $_POST['name'];
    $contact  = $_POST['contact'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // NULL VALIDATION
    if($name == "" || $contact == "" || $username == "" || $password == ""){
        $_SESSION['error'] = "All fields are required! No field can be empty.";
        header('location: ../view/employeeAdd.php');
        exit;
    }

    $emp = [
        'name'     => $name,
        'contact'  => $contact,
        'username' => $username,
        'password' => $password
    ];

    $result = addEmployee($emp);

    if($result){
        $_SESSION['success'] = "Employee added successfully!";
        header('location: ../view/employeeList.php');
    }else{
        $_SESSION['error'] = "Failed to add employee. Try again.";
        header('location: ../view/employeeAdd.php');
    }

}else{
    header('location: ../view/employeeAdd.php');
}
?>
