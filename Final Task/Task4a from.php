<!DOCTYPE html>
<html>
<head>
    <title>Task 4A - Gender Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 4A - Gender (Displays on Handler Page)</h3>

<form action="task4a_handler.php" method="post">
    <fieldset>
        <legend>GENDER</legend>
        <input type="radio" name="gender" value="Male" /> Male
        <input type="radio" name="gender" value="Female" /> Female
        <input type="radio" name="gender" value="Other" /> Other
        <br><hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

</body>
</html>