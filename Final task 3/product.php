<?php

    session_start();
    
    $products = [
            ['id'=>1, 'name'=>'Apple'],
            ['id'=>2, 'name'=>'Orange'],
            ['id'=>3, 'name'=>'Pineapple'],
            ['id'=>4, 'name'=>'Guava'],
            ['id'=>5, 'name'=>'Mango']
    ];
    $_SESSION['products']= $products;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
</head>
<body>
    <h1>Product List</h1>
    <a href='home.php'>Back</a> |
    <a href='logout.php'>Logout</a>
    <br>

    <table border=1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Action</th>
        </tr>

        <?php foreach($products as $product){ ?>

        <tr>
            <td><?php echo $product['id'];?></td>
            <td><?php echo $product['name'];?></td>
            <td>
                <a href="edit.php?id=<?=$user['id']?>">EDIT </a> |
                <a href="delete.php">DELETE </a> |
                <a href="detail.php">DETAILS </a>
            </td>
        </tr>
        
        <?php } ?>
</table>
    <a href="add.php">Add</a> | <a href="remove.php">Remove</a>
</body>
</html>