<!DOCTYPE html>
<html>
<head>
    <title>Task 4C - Gender Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 4C - Gender (Retains Previously Selected Radio Button)</h3>

<?php
$gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gender = $_POST["gender"];
}
?>

<form action="" method="post">
    <fieldset>
        <legend>GENDER</legend>

        <input type="radio" name="gender" value="Male"
            <?php if ($gender == "Male") echo "checked"; ?> /> Male

        <input type="radio" name="gender" value="Female"
            <?php if ($gender == "Female") echo "checked"; ?> /> Female

        <input type="radio" name="gender" value="Other"
            <?php if ($gender == "Other") echo "checked"; ?> /> Other

        <br><hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p>Gender: " . $gender . "</p>";
}
?>

</body>
</html>