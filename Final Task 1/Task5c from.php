<!DOCTYPE html>
<html>
<head>
    <title>Task 5C - Degree Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 5C - Degree (Retains Previously Selected Checkboxes)</h3>

<?php
$degrees = array();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["degree"])) {
        $degrees = $_POST["degree"];
    }
}
?>

<form action="" method="post">
    <fieldset>
        <legend>DEGREE</legend>

        <input type="checkbox" name="degree[]" value="SSC"
            <?php if (in_array("SSC", $degrees)) echo "checked"; ?> /> SSC

        <input type="checkbox" name="degree[]" value="HSC"
            <?php if (in_array("HSC", $degrees)) echo "checked"; ?> /> HSC

        <input type="checkbox" name="degree[]" value="BSc"
            <?php if (in_array("BSc", $degrees)) echo "checked"; ?> /> BSc

        <input type="checkbox" name="degree[]" value="MSc"
            <?php if (in_array("MSc", $degrees)) echo "checked"; ?> /> MSc

        <br><hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (count($degrees) > 0) {
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