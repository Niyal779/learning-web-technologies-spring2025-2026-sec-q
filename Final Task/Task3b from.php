<!DOCTYPE html>
<html>
<head>
    <title>Task 3B - Date of Birth Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="text"] { padding: 4px; margin: 4px 0; }
        .dd { width: 40px; }
        .mm { width: 40px; }
        .yyyy { width: 60px; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
        label { font-size: 13px; }
    </style>
</head>
<body>

<h3>Task 3B - Date of Birth (Displays on Current Page)</h3>

<form action="" method="post">
    <fieldset>
        <legend>DATE OF BIRTH</legend>
        <label>dd</label>&nbsp;&nbsp;&nbsp;
        <label>mm</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <label>yyyy</label><br>
        <input type="text" name="dd" class="dd" maxlength="2" />
        /
        <input type="text" name="mm" class="mm" maxlength="2" />
        /
        <input type="text" name="yyyy" class="yyyy" maxlength="4" />
        <br><hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dd   = $_POST["dd"];
    $mm   = $_POST["mm"];
    $yyyy = $_POST["yyyy"];
    echo "<p>Date of Birth: " . $dd . "/" . $mm . "/" . $yyyy . "</p>";
}
?>

</body>
</html>