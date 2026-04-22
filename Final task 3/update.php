<?php
    session_start();
    $products = $_SESSION['products'];
     $id = $_GET['id'];
     $name = $_GET['name'];
    array_push($products, $id, $name);
    header("Location: product.php");


?>