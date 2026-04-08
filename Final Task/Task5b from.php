<!DOCTYPE html>
<html>
<head>
    <title>Task 5B - Degree Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 5B - Degree (Displays on Current Page)</h3>

<form action="" method="post">
    <fieldset>
        <legend>DEGREE</legend>
        <input type="checkbox" name="degree[]" value="SSC" /> SSC
        <input type="checkbox" name="degree[]" value="HSC" /> HSC
        <input type="checkbox" name="degree[]" value="BSc" /> BSc
        <input type="checkbox" name="degree[]" value="MSc" /> MSc
        <br><hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

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

</body>
</html>