<!DOCTYPE html>
<html>
<head>
    <title>Task 1C - Name Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="text"] { width: 250px; padding: 4px; margin: 8px 0; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 1C - Name (Retains Previous Value)</h3>

<?php
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
}
?>

<form action="" method="post">
    <fieldset>
        <legend>NAME</legend>
        <input type="text" name="name" value="<?php echo $name; ?>" /><br>
        <hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Name: " . $name . "</p>";
}
?>

</body>
</html>