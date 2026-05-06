<?php
require_once('db.php');

function loginAdmin($username, $password){
    $con = getConnection();
    $sql = "SELECT * FROM employee WHERE username='$username' AND password='$password'";
    $result = mysqli_query($con, $sql);
    if(mysqli_num_rows($result) == 1){
        return true;
    }else{
        return false;
    }
}

?>