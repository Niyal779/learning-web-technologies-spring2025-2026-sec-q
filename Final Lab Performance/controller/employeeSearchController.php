<?php
session_start();
require_once('../model/employeeModel.php');

if(!isset($_SESSION['admin'])){
    echo json_encode([]);
    exit;
}

$keyword = $_GET['q'] ?? '';

$result = searchEmployee($keyword);

$employees = [];
while($row = mysqli_fetch_assoc($result)){
    $employees[] = $row;
}

header('Content-Type: application/json');
echo json_encode($employees);
?>
