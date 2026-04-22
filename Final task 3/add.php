<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit</title>
</head>
<body>
        <h1>Add Products</h1>
        <a href='product.php'>Back</a> |
        <a href='logout.php'>Logout</a>
        <br>

        <form method="post" action="update.php" enctype="">
            ID: <input type="number" name="id" value=""/> <br><br>
            Product Name: <input type="text" name="name" value=""/> <br><br>
            <input type="submit" name="submit" value="Submit"/> <input type="reset">
        </form>
</body>
</html>