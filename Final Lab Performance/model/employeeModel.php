<?php
require_once('db.php');

// CREATE - add new employee
function addEmployee($emp){
    $con = getConnection();
    $sql = "INSERT INTO employee (name, contact, username, password)
            VALUES ('{$emp['name']}', '{$emp['contact']}', '{$emp['username']}', '{$emp['password']}')";
    $result = mysqli_query($con, $sql);
    return $result;
}

// READ - get all employees
function getAllEmployees(){
    $con = getConnection();
    $sql = "SELECT * FROM employee";
    $result = mysqli_query($con, $sql);
    return $result;
}

// READ - get one employee by id
function getEmployeeById($id){
    $con = getConnection();
    $sql = "SELECT * FROM employee WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($result);
}

// UPDATE - update employee info
function updateEmployee($emp){
    $con = getConnection();
    $sql = "UPDATE employee SET
                name='{$emp['name']}',
                contact='{$emp['contact']}',
                username='{$emp['username']}',
                password='{$emp['password']}'
            WHERE id='{$emp['id']}'";
    $result = mysqli_query($con, $sql);
    return $result;
}

// DELETE - delete employee by id
function deleteEmployee($id){
    $con = getConnection();
    $sql = "DELETE FROM employee WHERE id='$id'";
    $result = mysqli_query($con, $sql);
    return $result;
}

// SEARCH - search employee by name or username
function searchEmployee($keyword){
    $con = getConnection();
    $sql = "SELECT * FROM employee WHERE name LIKE '%$keyword%' OR username LIKE '%$keyword%' OR contact LIKE '%$keyword%'";
    $result = mysqli_query($con, $sql);
    return $result;
}

?>
