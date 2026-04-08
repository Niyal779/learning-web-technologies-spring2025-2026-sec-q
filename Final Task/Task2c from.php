<!DOCTYPE html>
<html>
<head>
    <title>Task 2C - Email Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="email"] { width: 250px; padding: 4px; margin: 8px 0; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 2C - Email (Retains Previous Value)</h3>

<?php
$email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
}
?>

<form action="" method="post">
    <fieldset>
        <legend>EMAIL</legend>
        <input type="email" name="email" value="<?php echo $email; ?>" /><br>
        <hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Email: " . $email . "</p>";
}
?>

</body>
</html>