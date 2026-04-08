<!DOCTYPE html>
<html>
<head>
    <title>Task 6A - Handler Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
    </style>
</head>
<body>

<h3>Handler Page</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_group = $_POST["blood_group"];
    echo "<p>Blood Group: " . $blood_group . "</p>";
}
?>

<a href="task6a_form.php">Go Back</a>

</body>
</html>