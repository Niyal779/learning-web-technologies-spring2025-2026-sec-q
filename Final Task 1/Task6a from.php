<!DOCTYPE html>
<html>
<head>
    <title>Task 6A - Blood Group Form</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        fieldset { width: 300px; }
        legend { font-weight: bold; font-size: 18px; }
        select { padding: 4px; margin: 8px 0; }
        input[type="submit"] { padding: 4px 12px; margin-top: 8px; }
    </style>
</head>
<body>

<h3>Task 6A - Blood Group (Displays on Handler Page)</h3>

<form action="task6a_handler.php" method="post">
    <fieldset>
        <legend>BLOOD GROUP</legend>
        <select name="blood_group">
            <option value="">-- Select --</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>
        <br><hr>
        <input type="submit" value="Submit" />
    </fieldset>
</form>

</body>
</html>