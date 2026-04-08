<!DOCTYPE html>
<html>
<head>
    <title>Task 6C - Blood Group Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        select { padding: 4px; margin: 8px 0; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 6C - Blood Group (Retains Previously Selected Option)</h3>

<?php
$blood_group = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blood_group = $_POST["blood_group"];
}
?>

<form action="" method="post">
    <fieldset>
        <legend>BLOOD GROUP</legend>
        <select name="blood_group">
            <option value="">-- Select --</option>

            <option value="A+"  <?php if ($blood_group == "A+")  echo "selected"; ?>>A+</option>
            <option value="A-"  <?php if ($blood_group == "A-")  echo "selected"; ?>>A-</option>
            <option value="B+"  <?php if ($blood_group == "B+")  echo "selected"; ?>>B+</option>
            <option value="B-"  <?php if ($blood_group == "B-")  echo "selected"; ?>>B-</option>
            <option value="AB+" <?php if ($blood_group == "AB+") echo "selected"; ?>>AB+</option>
            <option value="AB-" <?php if ($blood_group == "AB-") echo "selected"; ?>>AB-</option>
            <option value="O+"  <?php if ($blood_group == "O+")  echo "selected"; ?>>O+</option>
            <option value="O-"  <?php if ($blood_group == "O-")  echo "selected"; ?>>O-</option>

        </select>
        <br><hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Blood Group: " . $blood_group . "</p>";
}
?>

</body>
</html>