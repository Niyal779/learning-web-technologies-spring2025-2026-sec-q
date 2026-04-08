<!DOCTYPE html>
<html>
<head>
    <title>Task 2A - Handler Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
    </style>
</head>
<body>

<h3>Handler Page</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    echo "<p>Email: " . $email . "</p>";
}
?>

<a href="task2a_form.php">Go Back</a>

</body>
</html>