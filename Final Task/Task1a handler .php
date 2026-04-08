<!DOCTYPE html>
<html>
<head>
    <title>Task 1A - Handler Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
    </style>
</head>
<body>

<h3>Handler Page</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    echo "<p>Name: " . $name . "</p>";
}
?>

<a href="task1a_form.php">Go Back</a>

</body>
</html>