<!DOCTYPE html>
<html>
<head>
    <title>Task 4A - Handler Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
    </style>
</head>
<body>

<h3>Handler Page</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST["gender"];
    echo "<p>Gender: " . $gender . "</p>";
}
?>

<a href="task4a_form.html">Go Back</a>

</body>
</html>