<!DOCTYPE html>
<html>
<head>
    <title>Task 3A - Handler Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
    </style>
</head>
<body>

<h3>Handler Page</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dd   = $_POST["dd"];
    $mm   = $_POST["mm"];
    $yyyy = $_POST["yyyy"];
    echo "<p>Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy . "</p>";
}
?>

<a href="task3a_form.php">Go Back</a>

</body>
</html>