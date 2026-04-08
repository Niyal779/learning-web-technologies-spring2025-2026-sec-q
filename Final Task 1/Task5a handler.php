<!DOCTYPE html>
<html>
<head>
    <title>Task 5A - Handler Page</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
    </style>
</head>
<body>

<h3>Handler Page</h3>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["degree"])) {
        $degrees = $_POST["degree"];
        echo "<p>Selected Degrees: ";
        for ($i = 0; $i < count($degrees); $i++) {
            echo $degrees[$i];
            if ($i < count($degrees) - 1) {
                echo ", ";
            }
        }
        echo "</p>";
    } else {
        echo "<p>No degree selected.</p>";
    }
}
?>

<a href="task5a_form.php">Go Back</a>

</body>
</html>